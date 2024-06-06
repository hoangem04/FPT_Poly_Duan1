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
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        main {
            margin: 20px;
        }

        .title-list-khachang {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .boxcontent-add-khachhang {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #2980b9;
        }

        footer {
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            text-align: center;
        }
    </style>

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
    <form action="?act=cntrangthai" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($old_dh['id']) ?>">
        <div class="madh">
            <label for="">Mã đơn hàng:</label>
            <input type="text" name="madonhang" readonly value="<?= htmlspecialchars($old_dh['id']) ?>">
        </div>
        <div class="thongtin">
            <label for="">Tên người đặt:</label>
            <input type="text" name="tennguoidat" readonly value="<?= htmlspecialchars($old_dh['bill_name']) ?>">
        </div>
        <div class="tinhtrang">
            <label for="">Tình trạng đơn hàng:</label>
            <select name="bill_status">
                <option value="5" <?php if ($old_dh['bill_status'] == "5") : ?>selected <?php endif; ?>>Huỷ</option>
            </select>
        </div>
        <button name="btn-update-donhang2">Cập nhật</button>
    </form>
    <?php
    if (isset($error_message)) {
        echo '<div style="color: red;">' . $error_message . '</div>';
    }
    ?>
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