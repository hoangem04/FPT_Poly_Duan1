<div class="box-header">
    <div class="vip">
        <p>Để mua được giá tốt. Tạo thẻ VIP <a href="index.php?act=thevip">tại đây</a></p>
    </div>
    <div class="tab-nav">
        <div class="logo">
            <a href="?act=trangchu">
                <img src="../asset/css/img/logo-shop.png" alt="">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="?act=trangchu">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <?php
                $dsdm = getAll_danhmuc();
                ?>
                <li>
                    <?php foreach ($dsdm as $key => $danhmuc) : ?>
                        <a href="?act=pro-danhmuc&iddm=<?= $danhmuc['id'] ?>">
                            <?= $danhmuc['name'] ?>
                        </a>
                    <?php endforeach; ?>
                </li>
                <li><a href="?act=contact">Hỗ trợ</a></li>
            </ul>
        </div>

        <div class="search">
            <form action="?act=tim_kyw" method="post">
                <input type="text" name="kyw" required placeholder="Tìm kiếm">
                <br>
                <button type="submit" name="tim_kyw"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <?php
        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
        ?>
            <div class="menu-right">
                <a href="?act=if-taikhoan&idtk=1"><i class="fa-solid fa-user"></i></a>
                <a href="?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>

            </div>
        <?php } else { ?>
            <div class="menu-right">
                <a href="?act=login"><i class="fa-solid fa-user"></i></a>
                <a href="?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        <?php } ?>
    </div>
</div>