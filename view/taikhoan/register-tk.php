<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop LUXURY MAN</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="content">
                <div class="title-register">
                    <p>ĐĂNG KÝ TÀI KHOẢN</p>
                </div>
                <div class="content-register">
                    <div class="thongbao-dangky" style="color: red;" align="center" >
                        <p>
                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo $thongbao;
                            }
                            ?>
                        </p>
                    </div>
                    <form action="?act=register-tk" method="post">
                        <div class="name">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="user" placeholder="Tài khoản" required>
                        </div>
                        <div class="pass">
                            <label for="">Mật khẩu</label>
                            <input type="text" name="pass" placeholder="Mật khẩu" required>
                        </div>
                        <div class="email">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="address">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" placeholder="Địa chỉ">
                        </div>
                        <div class="tel">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="tel" placeholder="Số điện thoại">
                        </div>
                        <div class="quyen" style="display: none;">
                            <label for="">Quyền</label>
                            <select name="role">
                                <option value="0">User</option>
                            </select>
                        </div>
                        <button name="btn-register">
                            Đăng Ký
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>