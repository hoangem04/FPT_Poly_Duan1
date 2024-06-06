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
                <p>Quản lý thông kê</p>
            </div>
            <div class="list-khachhang">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <td>STT</td>
                            <td>Tên sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Giá nhỏ nhất</td>
                            <td>Giá cao nhất</td>
                            <td>Giá trung bình</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($liststatis as $key => $values) : ?>
                            <tr>
                                <td><?php echo $values['id'] ?></td>
                                <td><?php echo $values['name'] ?></td>
                                <td><?php echo $values['soluong'] ?></td>
                                <td><?php echo number_format($values['gia_min']) ?>đ</td>
                                <td><?php echo number_format($values['gia_max'])  ?>đ</td>
                                <td><?php echo number_format($values['gia_avg'])  ?>đ</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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