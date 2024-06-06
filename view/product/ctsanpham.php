<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop luxury man</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="box-ct-sanpham">
                <div class="box-title-sanpham">
                    <p>CHI TIẾT SẢN PHẨM</p>
                </div>
                <hr>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="box-content-ct-sanpham">
                        <div class="img-sanpham">
                            <img src="../uploads/<?php echo $ct_sp['img'] ?>" alt="">
                        </div>
                        <div class="if-sanpham">
                            <ul>
                                <li>
                                    <h3><?php echo $ct_sp['name'] ?></h3>
                                </li>
                                <li style="color: red;"><?php echo number_format($ct_sp['price']) ?>đ</li>
                                <li>
                                    <label class='chonsize' for="size">Chọn Size:</label>
                                    <button class="size-button" onclick="chonSize('S')" data-size="S">S</button>
                                    <button class="size-button" onclick="chonSize('M')" data-size="M">M</button>
                                    <button class="size-button" onclick="chonSize('L')" data-size="L">L</button>
                                    <button class="size-button" onclick="chonSize('XL')" data-size="XL">XL</button>
                                </li>
                                <li>
                                    <label for="">Số lượng</label>
                                    <input type="number" name="soluong" min="1">
                                </li>
                                <li>
                                    <form action="index.php?act=giohang&idsp=<?php echo $ct_sp['id'] ?>" method="POST">
                                        <button type="submit" value="giohang" name="giohang">Mua Ngay</button>
                                    </form>
                                </li>
                            </ul>
                            <div class="mota-sp">
                                <div class="box-title-sp">
                                    <p>MÔ TẢ</p>
                                </div>
                                <div class="content-mota-sp">
                                    <p><?php echo $ct_sp['mota'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="box-content-ct-sanpham">
                        <div class="img-sanpham">
                            <img src="../uploads/<?php echo $ct_sp['img'] ?>" alt="">
                        </div>
                        <div class="if-sanpham">
                            <ul>
                                <li>
                                    <h3><?php echo $ct_sp['name'] ?></h3>
                                </li>
                                <li style="color: red;"><?php echo number_format($ct_sp['price']) ?>đ</li>
                                <li>
                                    <label class='chonsize' for="size">Chọn Size:</label>
                                    <button class="size-button" onclick="chonSize('S')" data-size="S">S</button>
                                    <button class="size-button" onclick="chonSize('M')" data-size="M">M</button>
                                    <button class="size-button" onclick="chonSize('L')" data-size="L">L</button>
                                    <button class="size-button" onclick="chonSize('XL')" data-size="XL">XL</button>
                                </li>
                                <li>
                                    <label for="">Số lượng</label>
                                    <input type="number" name="soluong" min="1">
                                </li>
                                <li>
                                    <form action="?act=login" method="POST">
                                        <button type="submit" onclick="yeucau()" value="giohang" name="giohang">Mua Ngay</button>
                                    </form>
                                </li>
                            </ul>
                            <div class="mota-sp">
                                <div class="box-title-sp">
                                    <p>MÔ TẢ</p>
                                </div>
                                <div class="content-mota-sp">
                                    <p><?php echo $ct_sp['mota'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br>
            <hr>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <div class="binhluan">
                    <div class="boxtitle-bl">
                        <p>BÌNH LUẬN</p>
                    </div>
                    <?php foreach ($dsbl as $key => $value) : ?>
                        <div class="content-bl">
                            <p><i class="fa-solid fa-user"></i><?php echo $value['user'] ?></p>
                            <p><?php echo $value['noidung'] ?></p>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                    <div class="add-binhluan">
                        <form action="?act=ct-sanpham&idsp=<?php echo $_GET['idsp'] ?>" method="post" class='box-title-binhluan'>
                            <input type="text" name="noidung" placeholder="Nhập bình luận của bạn">
                            <input type="text" hidden name="iduser" value="<?= $_SESSION['user']['id']  ?>">
                            <input type="text" hidden name='idpro' value="<?php echo $_GET['idsp'] ?>">
                            <input type="datetime" hidden name='datetime' value="
            <?php $currentDateTime = date('Y-m-d H:i:s', strtotime('+5 hours'));
                echo $currentDateTime;
            ?>                                   ">
                            <button type='submit' name='btnSubmit'>Gửi</button>
                        </form>
                    </div>
                </div>
            <?php } else { ?>
                <div class="binhluan">
                    <div class="boxtitle-bl">
                        <p>BÌNH LUẬN</p>
                    </div>
                    <div class="content-bl">
                    </div>
                    <div class="add-binhluan">
                        <?php
                        echo "Bạn cần đăng nhập để có thể bình luận!";
                        ?>
                        <a href="?act=login">Tại đây</a>
                    </div>
                </div>
            <?php } ?>

            <br>
            <br>
            <div class="sanpham-cl">
                <div class="boxtitle-spcl">
                    <p>SẢN PHẨM CÙNG LOẠI</p>
                </div>
                <hr>
                <div class="box-content-spcl">
                    <?php foreach ($sanpham_lq as $key => $value) : ?>
                        <div class="box-sp">
                            <a href="?act=ct-sanpham&idsp=<?php echo $value['id'] ?>">
                                <img src="../uploads/<?php echo $value['img'] ?>" alt="">
                            </a>
                            <div class="price-sp">
                                <p><?php echo number_format($value['price']) ?>đ</p>
                            </div>
                            <div class="buy-now">
                                <form action="index.php?act=giohang&idsp=<?php echo $value['id'] ?>" method="post">
                                    <button type="submit" value="giohang" name="giohang">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
    <script>
        var selectedSize = '';

        function chonSize(size) {
            if (selectedSize) {
                document.querySelector('.size-button[data-size="' + selectedSize + '"]').classList.remove('selected');
            }
            selectedSize = size;
            document.querySelector('.size-button[data-size="' + size + '"]').classList.add('selected');
            console.log('Size đã chọn: ' + size);
        }

        function datMua() {
            if (selectedSize) {
                alert('Đã chọn size ' + selectedSize + ', và đặt mua sản phẩm!');
            } else {
                alert('Vui lòng chọn size vàtrước khi đặt mua!');
            }
        }

        function yeucau() {
            let ok = confirm("Bạn cần đăng nhập để mua hàng");
            if (ok) {
                window.location.href = "index.php?act=login";
            }
        }
    </script>
</body>

</html>