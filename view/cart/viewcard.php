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
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #3498db;
            /* Blue color */
        }

        .box_content {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 15px;
            border: 1px solid #ddd;
        }

        input[type="submit"],
        input[type="button"] {
            padding: 15px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            text-transform: uppercase;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="row mb box">
        <div class="box_left">
            <div class="mb">
                <div class="box_title">GIỎ HÀNG</div>
                <div class="box_content cart">
                    <table border="1">
                        <?php
                        viewcart(1);
                        ?>
                    </table>
                </div>
            </div>
            <?php
            $donhang0 = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $donhang0 += $cart[3] * $cart[4];
            }
            if ($donhang0 > 0) {
                echo '<a href="index.php?act=bill"><input type="submit" value="Tiếp tục đặt hàng"></a>';
                echo ' <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>';
            } else {
                echo 'Bạn chưa có đơn hàng nào vui lòng thêm vào giỏ hàng <a href="index.php?act=trangchu">tại đây</a>';
            }

            ?>
        </div>
    </div>

</body>

</html>