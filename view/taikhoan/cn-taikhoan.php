<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box-content-main">
            <main>
                <div class="box-title-cntk">
                    <p>Cập nhật tài khoản</p>
                </div>
                <div class="content-cn-taikhoan">
                    <?php
                    if (isset($thongbao)) {
                        echo "<h3>$thongbao</h3>";
                    }
                    ?>
                    <form action="?act=cn-taikhoan" method="post">
                        <input type="hidden" name="id" value="<?= $cntk['id'] ?>">
                        <div class="user">
                            <label for="">Tài khoản</label>
                            <input type="text" name="user" required value="<?= $cntk['user'] ?>">
                        </div>
                        <div class="pass">
                            <label for="">Mật khẩu</label>
                            <input type="text" name="pass" required value="<?= $cntk['pass'] ?>">
                        </div>
                        <div class="email">
                            <label for="">Email</label>
                            <input type="email" name="email" required value="<?= $cntk['email'] ?>">
                        </div>
                        <div class="address">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" value="<?= $cntk['address'] ?>">
                        </div>
                        <div class="tel">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="tel" value="<?= $cntk['tel'] ?>">
                        </div>
                        <button name="btn-cn-taikhoan" onclick="thongbao()">
                            Cập nhật tài khoản
                        </button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script>
        function thongbao(){
            alert("Cập nhật thành công!");
        }
    </script>
</body>

</html>