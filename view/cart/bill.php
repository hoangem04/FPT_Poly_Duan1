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
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:hover {
            border-color: #4caf50;
        }

        .payment {
            display: flex;
            flex-direction: column;
        }

        .pay {
            margin-bottom: 10px;
        }

        .box_right {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .bill {
            text-align: center;
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

        /* Example: Adding an icon to the "Người đặt hàng" row */
        th:first-child::before {
            content: '\f007'; /* Unicode for user icon in Font Awesome */
            font-family: 'Font Awesome\ 5 Free';
            margin-right: 5px;
        }

        /* Example: Adding an icon to the "Địa chỉ" row */
        th:nth-child(2)::before {
            content: '\f2b9'; /* Unicode for map marker icon in Font Awesome */
            font-family: 'Font Awesome\ 5 Free';
            margin-right: 5px;
        }

        /* Add similar styles for other rows as needed */
    </style>
</head>
<body>

<div class="row mb box">
    <div class="box_left">
        <form action="index.php?act=billconfirm" method="POST">
            <div class="mb">
                <div class="box_title">THÔNG TIN NGƯỜI ĐẶT HÀNG</div>
                <div class="box_content billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <th>Người đặt hàng</th>
                            <td><input type="text" name="name" id="" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td><input type="text" name="address" id="" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <th>Điện thoại</th>
                            <td><input type="text" name="tel" id="" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mb">
                <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="payment menu_right">
                    <div class="pay"><input type="radio" name="pttt" checked value="1"> Thanh toán khi nhận hàng</div>
                    <div class="pay"><input type="radio" name="pttt" value="2"> Chuyển khoản qua ngân hàng</div>
                    <div class="pay"><input type="radio" name="pttt" value="3"> Thanh toán online</div>
                </div>
            </div>
            <div class="mb">
                <div class="box_title">THÔNG TIN GIỎ HÀNG</div>
                <div class="box_content cart mb">
                    <table border="1">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <div class="mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="box_right">
        <!-- Additional content for the right box -->
    </div>
</div>

</body>
</html>
