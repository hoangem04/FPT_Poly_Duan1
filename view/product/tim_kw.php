<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="box-content-sanpham">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="box-pro-sanpham">
                        <?php foreach ($dssp as $key => $values) : ?>
                            <div class="ct-sanpham">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <?php
                                    echo "<img width='100' src='../uploads/" . $values['img'] . "'>";
                                    ?>
                                </a>
                                <div class="price-sanpham">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?></span>đ</p>
                                </div>
                                <div class="buy-now">
                                    <form action="index.php?act=giohang&idsp=<?php echo $values['id'] ?>" method="POST">
                                        <button type="submit" value="giohang" name="giohang">Thêm vào giỏ hàng</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php } else { ?>
                    <div class="box-pro-sanpham">
                        <?php foreach ($dssp as $key => $values) : ?>
                            <div class="ct-sanpham">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <?php
                                    echo "<img width='100' src='../uploads/" . $values['img'] . "'>";
                                    ?>
                                </a>
                                <div class="price-sanpham">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?></span>đ</p>
                                </div>
                                <div class="buy-now">
                                    <form action="?act=login" method="POST">
                                        <button type="submit" value="giohang" onclick="yeucau()" name="giohang">Thêm vào giỏ hàng</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
    <script>
        function yeucau() {
            let ok = confirm("Bạn cần đăng nhập để mua hàng");
            if (ok) {
                window.location.href = "index.php?act=login";
            }
        }
    </script>
</body>

</html>