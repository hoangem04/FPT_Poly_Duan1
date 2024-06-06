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
                <p>Quản lý khách hàng</p>
            </div>
            <div class="boxcontent-add-khachhang">
                <div class="box-add-khachhang">
                    <p>Thêm Người Dùng</p>
                </div>
                <form action="" method="post">
                    <div class="user">
                        <label for="">Name</label>
                        <input type="text" name="tenuser">
                    </div>
                    <div class="pass">
                        <label for="">Password</label>
                        <input type="text" name="pass">
                    </div>
                    <div class="email">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="address">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address">
                    </div>
                    <div class="tel">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="tel" >
                    </div>
                    <div class="role">
                        <label for="">Quyền</label>
                        <select name="role">
                            <option value="1">Khách hàng</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                    <button name="btn-sumbit">REGISTER</button>
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