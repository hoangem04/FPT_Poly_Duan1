<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .box {
            display: flex;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .box_left {
            flex: 2;
            padding: 20px;
        }

        .mb {
            margin-bottom: 20px;
        }

        .box_title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .box_content {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        a {
            text-decoration: none;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Font Awesome Icons */
        .box_title::before {
            margin-right: 5px;
        }

        .box_title::before,
        th:first-child::before,
        th:nth-child(2)::before,
        i {
            font-family: 'Font Awesome\ 5 Free';
        }

        .box_title::before {
            content: '\f4fe';
            /* Unicode for heart icon in Font Awesome */
        }

        th:first-child::before {
            content: '\f007';
            /* Unicode for user icon in Font Awesome */
        }

        th:nth-child(2)::before {
            content: '\f2b9';
            /* Unicode for map marker icon in Font Awesome */
        }
    </style>
</head>

<body>

    <div class="row mb box">
        <div class="box_left">
            <div class="mb">
                <div class="box_title">CẢM ƠN</div>
                <div class="box_content">
                    <h2><i class="fas fa-heart"></i> Cảm ơn quý khách đã đặt hàng</h2>
                </div>
            </div>
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
                unset($_SESSION['mycart']);
            }
            ?>
            <div class="mb">
                <div class="box_title">THÔNG TIN ĐƠN HÀNG</div>
                <div class="box_content">
                    <ul>
                        <li><i class="fas fa-file-alt"></i> Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                        <li><i class="fas fa-money-bill"></i> Tổng đơn hàng : <?= number_format($bill['total']); ?>đ</li>
                        <li><i class="fas fa-file-alt"></i> Ngày đặt: <?php echo $ngaydathang?></li>
                        <li><i class="fas fa-credit-card"></i> Phương thức thanh toán :<?php if ($bill['bill_pttt'] == 1) {
                                                                                            echo "Thanh toán khi nhận hàng";
                                                                                        } elseif ($bill['bill_pttt'] == 2) {
                                                                                            echo "Thanh toán qua tài khoản ngân hàng";
                                                                                        } else {
                                                                                            echo "Thanh toán online";
                                                                                        }
                                                                                        ?></li>
                    </ul>
                </div>
            </div>
            <div class="mb">
                <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="box_content billform">
                    <table>
                        <tr>
                            <th><i class="fas fa-user"></i> Người đặt hàng</th>
                            <td><?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-map-marker-alt"></i> Địa chỉ</th>
                            <td><?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <th><i class="far fa-envelope"></i> Email</th>
                            <td><?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-phone-alt"></i> Điện thoại</th>
                            <td><?= $bill['bill_tel']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mb">
                <div class="box_title">CHI TIẾT GIỎ HÀNG</div>
                <div class="box_content cart mb">
                    <table border="1">
                        <?php
                        bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
                <div class="mb bill">
                    <a href="index.php?act=trangchu"><input type="submit" value="Về trang chủ"></a>
                </div>
            </div>
        </div>
        <div class="box_right">

        </div>
    </div>

</body>

</html>