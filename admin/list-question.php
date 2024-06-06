
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
        <body id="page-top">
    <div id="wrapper">
        <div class="container-fluid">
            <div class="card shadow mb-4" >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quản Lý Hỏi đáp</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã hỏi đáp</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Nội dung</th>
                                    <th>Thao tác</th>
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                foreach ($listques as $ques) : extract($ques); ?>
                                    <tr>
                                        <td><?= $id_ques ?></td>
                                        <td><?= $name ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= $phone ?></td>
                                        <td><?= $contennt ?></td>
                                        <td>
                                        <a href="./index.php?act=delete_ques&id_ques=<?= $ques['id_ques'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</html>

    <!-- End of Main Content -->
    <?php include_once "footer.php" ?>