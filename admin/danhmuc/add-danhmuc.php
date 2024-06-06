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
                    <p>Thêm Danh mục</p>
                </div>
                <form action="?act=add-danhmuc" method="post">
                    <div class="danhmuc">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="ten-danhmuc">
                    </div>
                    <button type="submit" name="btn-add-danhmuc">REGISTER</button>
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