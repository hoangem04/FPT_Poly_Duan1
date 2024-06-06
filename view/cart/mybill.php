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

        .fa {
            margin-right: 5px;
            font-size: 1.2em;
        }

        /* Font Awesome Icons with Color */
        .fa-file-alt {
            color: #3498db;
        }

        /* Blue color */
        .far-calendar {
            color: #e74c3c;
        }

        /* Red color */
        .fas-money-bill {
            color: #2ecc71;
        }

        /* Green color */
        .far-clock {
            color: #f39c12;
        }

        /* Orange color */
        .fas-check-circle {
            color: #27ae60;
        }

        /* Green color */
    </style>
</head>

<body>

    <div class="row mb box">
        <div class="box_left">
            <div class="mb">
                <div class="box_title">ĐƠN HÀNG CỦA BẠN</div>
                <div class="box_content cart">
                    <table border="1">
                        <tr>
                            <th><i class="fas fa-file-alt"></i> Mã đơn hàng</th>
                            <th><i class="far fa-calendar"></i> Ngày đặt</th>
                            <th><i class="fas fa-money-bill"></i> Số lượng mặt hàng</th>
                            <th><i class="far fa-clock"></i> Tổng giá thị đơn hàng</th>
                            <th><i class="fas fa-check-circle"></i> Tình trạng đơn hàng</th>
                        </tr>
                        <?php
                        if (is_array($listbill)) {
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '<tr>
                                <td>' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . number_format($bill['total']) . 'đ</td>
                                <td>' . $bill['bill_status'] . '</td>
                            </tr>';
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_right">
            <?php
            include "./view/boxright.php";
            ?>
        </div>
    </div>

</body>

</html>