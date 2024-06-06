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

            <div class="list-khachhang">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <td></td>
                            <td>STT</td>
                            <td>Tên khách hàng</td>
                            <td>Email</td>
                            <td>Địa chỉ</td>
                            <td>Số điện thoại</td>
                            <td>Quyền</td>
                            <td>Chức Năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dskh as $key => $values) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="">
                                </td>
                                <td><?php echo $values['id'] ?></td>
                                <td><?php echo $values['user'] ?></td>
                                <td><?php echo $values['email'] ?></td>
                                <td><?php echo $values['address'] ?></td>
                                <td><?php echo $values['tel'] ?></td>
                                <td>
                                    <?php
                                    if ($values['role'] == 1) {
                                        echo "User";
                                    } else {
                                        echo "Admin";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?act=update-khachhang&idUdate=<?php echo $values['id'] ?>">Sửa </a>
                                    <a href="?act=delete-khachhang&idDlete=<?php echo $values['id'] ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="add-khachhang">
                    <a href="?act=add-khachhang">
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