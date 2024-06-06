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
                <p>Quản lý đơn hàng</p>
            </div>
            <form action="#" method="POST">
                <input type="text" name="kyw" style="width: 200px;" placeholder="Search mã bill">
                <input type="submit" name="search" value="Search">
            </form>
            <div class="list-khachhang">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>THÔNG TIN KHÁCH HÀNG</th>
                            <th>SỐ LƯỢNG HÀNG</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <th>Cập nhật trạng thái đơn hàng</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                        $countsp = loadall_cart_count($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                    ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $bill['id']; ?></td>
                            <td><?php echo $kh; ?></td>
                            <td><?php echo $countsp; ?></td>
                            <td><?php echo $bill['total']; ?></td>
                            <td><?php echo $bill['ngaydathang']; ?></td>
                            <td>
                                <?php if ($bill['bill_status'] == 1) {
                                    echo "Chưa xác nhận";
                                } elseif ($bill['bill_status'] == 2) {
                                    echo "Đã xác nhận";
                                } elseif ($bill['bill_status'] == 3) {
                                    echo "Đang giao hàng";
                                } elseif ($bill['bill_status'] == 4) {
                                    echo "Giao thành công";
                                } else {
                                    echo "Hủy";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="?act=cn-donhang&id_dh=<?php echo $bill['id']; ?>">Cập nhật đơn hàng</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
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