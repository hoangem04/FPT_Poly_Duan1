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
            <div class="list-khachhang">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <td></td>
                            <!-- <td>STT</td> -->
                            <td>Tên sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Mô tả</td>
                            <td>Lượt xem</td>
                            <td>Danh mục</td>
                            <td>Chức Năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dssp as $key => $values) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="">
                                </td>

                                <td><?php echo $values['name'] ?></td>
                                <td>
                                    <?php
                                    echo "<img width='100' src='../uploads/" . $values['img'] . "'>";
                                    ?>
                                </td>
                                <td><?php echo number_format($values['price']) ?>đ</td>
                                <td><?php echo $values['mota'] ?></td>
                                <td><?php echo $values['luotxem'] ?></td>
                                <td>
                                    <?php if ($values['iddm'] == "1") {
                                        echo "Áo phông";
                                    } else {
                                        echo "Quần tây";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?act=edit-sanpham&idUp=<?php echo $values['id'] ?>">Sửa </a>
                                    <a href="?act=delete-sanpham&idSP=<?php echo $values['id'] ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="add-khachhang">
                    <a href="?act=add-sanpham">
                        <p>Thêm mới</p>
                    </a>
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