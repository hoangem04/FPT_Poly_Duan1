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
                <p>Quản lý bình luận</p>
            </div>
            <div class="list-khachhang">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <td>STT</td>
                            <td>Nội dung bình luận</td>
                            <td>Tên khách hàng</td>
                            <td>Tên sản phẩm</td>
                            <td>Ngày bình luận</td>
                            <td>Chức Năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dsbl  as $key => $values) : ?>
                            <tr>
                                <td><?php echo $values['id'] ?></td>
                                <td><?php echo $values['noidung'] ?></td>
                                <td><?php echo $values['user'] ?></td>
                                <td><?php echo $values['name'] ?></td>
                                <td><?php echo $values['ngaybinhluan'] ?></td>
                                </td>
                                <td>
                                    <a style="color: white;" onclick="confirmDelete('<?php echo $values['id'] ?>')">Xóa</a>
                                </td>
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
    <script>
        function confirmDelete(id) {
            let ok = confirm("Bạn có muốn xóa bình luận này không!");
            if (ok) {
                window.location.href = "?act=dl-binhluan&idbl=" + id;
            }
        }
    </script>
</body>

</html>