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
            <div class="box-content-taikhoan">
                <div class="box-title-taikhoan">
                    <p>Thông tin tài khoản</p>
                </div>
                <?php if (isset($_SESSION['user']) && isset($_SESSION['user'])) {
                    $role = $_SESSION['user']['role'];
                    if ($role == "2") {
                ?>
                        <div class="box-content-if-taikhoan">
                            <div class="user">
                                <label for="">Tài khoản: </label>
                                <input type="text" name="user" value="<?php echo $if_tk['user'] ?>">
                            </div>
                            <div class="emai">
                                <label for="">Email: </label>
                                <input type="text" name="email" value="<?php echo $if_tk['email'] ?>">
                            </div>
                            <div class="address">
                                <label for="">Địa chỉ: </label>
                                <input type="text" name="address" value="<?php echo $if_tk['address'] ?>">
                            </div>
                            <div class="tel">
                                <label for="">Số điện thoại: </label>
                                <input type="text" name="tel" value="<?php echo $if_tk['tel'] ?>">
                            </div>
                            <div class="logout">
                                <tr>
                                    <td>
                                        <a href="?act=logout">
                                            <p>Đăng Xuất</p>
                                        </a>

                                        <a href="../admin">
                                            <p>Truy cập admin</p>
                                        </a>
                                        <a href="?act=donhangtt">
                                            <p>Đơn hàng của tôi</p>
                                        </a>
                                        <a href="?act=cn-taikhoan&idtk=<?php echo $if_tk['id'] ?>">
                                            <p>Cập nhật tài khoản</p>
                                        </a>
                                    </td>
                                </tr>

                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="box-content-if-taikhoan">
                            <div class="user">
                                <label for="">Tài khoản: </label>
                                <input type="text" name="user" value="<?php echo $if_tk['user'] ?>">
                            </div>
                            <div class="emai">
                                <label for="">Email: </label>
                                <input type="text" name="email" value="<?php echo $if_tk['email'] ?>">
                            </div>
                            <div class="address">
                                <label for="">Địa chỉ: </label>
                                <input type="text" name="address" value="<?php echo $if_tk['address'] ?>">
                            </div>
                            <div class="tel">
                                <label for="">Số điện thoại: </label>
                                <input type="text" name="tel" value="<?php echo $if_tk['tel'] ?>">
                            </div>
                            <div class="logout">
                                <tr>
                                    <td>
                                        <a href="?act=logout">
                                            <p>Đăng Xuất</p>
                                            <a href="?act=donhangtt">
                                                <p>Đơn hàng của tôi</p>
                                            </a>
                                            <a href="?act=cn-taikhoan&idtk=<?php echo $if_tk['id'] ?>">
                                                <p>Cập nhật tài khoản</p>
                                            </a>
                                        </a>
                                    </td>
                                </tr>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>