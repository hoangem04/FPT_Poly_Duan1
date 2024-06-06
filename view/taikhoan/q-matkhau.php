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
                <div class="title-login">
                    <p>QUÊN MẬT KHẨU</p>
                </div>
                <div class="content-login">
                    <div class="thongbaocapnhat">
                        <form action="?act=qmk-taikhoan" method="post">
                            <div class="name-login">
                                <label for="">Tài khoản</label>
                                <input type="text" name="user" placeholder="Tài Khoản" required>
                            </div>
                            <div class="pass-login">
                                <label for="">Email:</label>
                                <input type="email" name="email" placeholder="Nhập Email" required>
                            </div>
                            <div class="pass-login">
                                <label for="">Mật khẩu cũ:</label>
                                <?php
                                if (isset($thongbao)) {
                                ?>
                                    <input type="text" name="new-pass" value="<?php echo $thongbao ?>">
                                <?php } ?>
                            </div>
                            <button name="btn-capnhat">
                                Cập nhật
                            </button>
                            <div class="regisster-tk">
                                <a href="?act=register-tk">
                                    <p>Chưa có tài khoản đăng ký tại đây!.</p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </div>
</body>

</html>