<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>LUXURY MAN</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../asset/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Doanh Thu', {
                    role: 'style'
                }],
                ['Ngày 1', 800, '#b87333'],
                ['Ngày 2', 1200, 'silver'],
                ['Ngày 3', 1900, 'gold'],
                ['Ngày 4', 2100, '#0d6efd'],
            ]);

            var options = {
                title: 'Doanh Thu Hàng Ngày',
                width: 500,
                height: 400,
                bars: 'vertical',
                hAxis: {
                    title: 'Ngày',
                    format: 'decimal'
                },
                vAxis: {
                    title: 'Doanh Thu'
                },
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng'],
                <?php
                foreach ($dsthongke as $thongke) {
                    extract($thongke);
                    echo "['$name', $soluong],";
                }
                ?>
            ]);
            var options = {
                title: 'Biểu đồ thống kê sản phẩm'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Thống kê</h1>
                <ol class="breadcrumb mb-4">
                    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Số lượng sản phẩm</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>Số lượng: 35 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Danh mục</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>Danh mục: 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Số lượng đơn hàng</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                Số lượng: 25
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Số lượng khách hàng</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                Khách hàng: 35
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div style="display: inline-flex;" class="container-bieudo">
                <div class="box-content-bieudo-daonhthu">
                    <div style="margin-right: 50px;margin-left: 100px;" class="content-bieudo">
                        <div id="columnchart" style="width: 520px; height: 500px;border: 1px solid gray;"></div>
                    </div>
                </div>
                <div class="box-content-bieudo-soluong-pro">
                    <div class="content-bieudo">
                        <div id="piechart" style="width: 500px; height: 500px; border: 1px solid gray;"></div>
                    </div>
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