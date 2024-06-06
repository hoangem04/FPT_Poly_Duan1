<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LUXURY MAN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../asset/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="title-list-khachang">
                <p>Quản lý sản phẩm</p>
            </div>
            <div class="boxcontent-add-sanpham">
                <div class="form-add-sanpham">
                    <div class="box-add-sanpham">
                        <p>Thêm sản phẩm mới</p>
                    </div>
                    <form action="?act=add-sanpham" method="post" enctype="multipart/form-data">
                        <div class="name-sanpham">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="namesp" required>
                        </div>
                        <div class="price-sp">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="giasp" required>
                        </div>
                        <div class="img-sanpham">
                            <label for="">Ảnh sản phẩm</label>
                            <input type="file" name="img" required>
                        </div>
                        <div class="mota-sanpham">
                            <label for="">Mô tả</label>
                            <input type="text" name="mota">
                        </div>
                        <div class="luotxem-sanpham">
                            <label for="">Lượt xem</label>
                            <input type="text" name="luotxem">
                        </div>
                        <div class="role">
                            <label for="">Danh mục</label>
                            <select name="danhmuc">
                                <option value="1">Áo phông</option>
                                <option value="2">Quần tây</option>
                            </select>
                        </div>
                        <button name="btn-add-sanpham">Thêm sản phẩm</button>
                    </form>
                </div>

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