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
                <p>CẬP NHẬT ĐƠN HÀNG</p>
            </div>
            <div class="boxcontent-add-khachhang">
                <?php
                if (isset($thongbao)) {
                    echo $thongbao;
                }
                ?>
                <form action="?act=cn-donhang" method="post">
                    <input type="hidden" name="id" value="<?= $old_dh['id'] ?>">
                    <div class="madh">
                        <label for="">Mã đơn hàng:</label>
                        <input type="text" name="madonhang" value="<?= $old_dh['id'] ?>">
                    </div>
                    <div class="thongtin">
                        <label for="">Tên người đặt:</label>
                        <input type="text" name="tennguoidat" value="<?= $old_dh['bill_name'] ?>">
                    </div>
                    <div class="tinhtrang">
                        <label for="">Tình trạng đơn hàng:</label>
                        <select name="bill_status">
                            <option value="1" <?php if ($old_dh['bill_status'] == "1") : ?>selected <?php endif; ?>>Chưa xác nhận</option>
                            <option value="2" <?php if ($old_dh['bill_status'] == "2") : ?>selected <?php endif; ?>>Đã xác nhận</option>
                            <option value="3" <?php if ($old_dh['bill_status'] == "3") : ?>selected <?php endif; ?>>Đang giao hàng</option>
                            <option value="4" <?php if ($old_dh['bill_status'] == "4") : ?>selected <?php endif; ?>>Giao thành công</option>
                            <option value="5" <?php if ($old_dh['bill_status'] == "4") : ?>selected <?php endif; ?>>Hủy</option>
                        </select>
                    </div>
                    <button name="btn-update-donhang">Cập nhật</button>
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