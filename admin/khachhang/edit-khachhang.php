<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LUXURY MAN</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../asset/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="title-list-khachang">
                <p>Cập nhật khách hàng</p>
            </div>
            <div class="boxcontent-add-khachhang">
                <?php
                if (isset($thongbao)) {
                    echo $thongbao;
                }
                ?>
                <form action="?act=update-khachhang" method="post">
                    <input type="hidden" name="id" value="<?php echo $old_kh['id'] ?>">
                    <div class="user">
                        <label for="">Name</label>
                        <input type="text" name="tenuser" value="<?php echo $old_kh['user'] ?>">
                    </div>
                    <div class="pass">
                        <label for="">Password</label>
                        <input type="text" name="pass" value="<?php echo $old_kh['pass'] ?>">
                    </div>
                    <div class="email">
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo $old_kh['email'] ?>">
                    </div>
                    <div class="address">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" value="<?php echo $old_kh['address'] ?>">
                    </div>
                    <div class="tel">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="tel" value="<?php echo $old_kh['tel'] ?>">
                    </div>
                    <div class="role">
                        <label for="">Quyền</label>
                        <select name="role">
                            <option value="1" <?php if ($old_kh['role'] == "1") : ?>selected <?php endif; ?>>User</option>
                            <option value="2" <?php if ($old_kh['role'] == "2") : ?>selected <?php endif; ?>>Admin</option>
                        </select>
                    </div>
                    <button name="btn-update-khachhang">Cập nhật</button>
                </form>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>