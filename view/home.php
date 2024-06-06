<div class="box-content">
    <main>
        <div class="container-pro">
            <div class="box-product-left">
                <div class="box-sale">
                    <p class="text1">GIÁ RẤT TỐT. THỜI TỚI ĐANG SALE</p>
                    <p class="text2">Thỏa sức mua sắm với 47K</p>
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="container-product-left">
                        <?php foreach ($dssp as $key => $values) : ?>
                            <div class="product">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <img src="../uploads/<?php echo $values['img'] ?>">
                                </a>
                                <div class="price-product">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?></span>đ</p>
                                </div>
                                <div class="buy-now">
                                    <form action="index.php?act=giohang&idsp=<?php echo $values['id'] ?>" method="post">
                                        <button type="submit" value="giohang" name="giohang">Thêm vào giỏ hàng</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php } else { ?>
                    <div class="container-product-left">
                        <?php foreach ($dssp as $key => $values) : ?>
                            <div class="product">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <img src="../uploads/<?php echo $values['img'] ?>">
                                </a>
                                <div class="price-product">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?></span>đ</p>
                                </div>
                                <div class="buy-now">
                                    <form action="" method="POST">
                                        <button type="submit" value="giohang" onclick="yeucau()" name="giohang">Thêm vào giỏ hàng</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="box-product-right">
                <a href="">
                    <img src="../asset/css/img/banner-product-right.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- end container pro 1 -->
        <hr>
        <div class="title-pro2">
            <a href="">
                <p>Xem thêm các sản phẩm khác</p>
            </a>
        </div>
        <!-- container pro 2 -->
        <div class="container-pro">
            <div class="box-product-right">
                <a href="">
                    <img src="../uploads/quantay_0.jpg" alt="">
                </a>
            </div>
            <div class="box-product-left">
                <div class="box-sale">
                    <p class="text1">WRINKLE FREE</p>
                    <p class="text2">Mặc Ngay - Không Cần Ủi . Mở bán 17/11/2023 . Sale 20% trong 3 ngày đầu mở bán</p>
                </div>
                <?php
                $iddm = 2;
                $dssp_dm = getsanpham_danhmuc($iddm);
                ?>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="container-product-left2">
                        <?php foreach ($dssp_dm as $values) : ?>
                            <div class="product">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <img src="../uploads/<?php echo $values['img'] ?>">
                                </a>
                                <div class="price-product">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?>đ</span></p>
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
                    <div class="container-product-left2">
                        <?php foreach ($dssp_dm as $values) : ?>
                            <div class="product">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <img src="../uploads/<?php echo $values['img'] ?>">
                                </a>
                                <div class="price-product">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?>đ</span></p>
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
        </div>
        <!--end container pro 2 -->
    </main>
    <script>
        function yeucau() {
            let ok = confirm("Bạn cần đăng nhập để mua hàng");
            if (ok) {
                window.location.href = "index.php?act=login";
            }
        }
    </script>
</div>