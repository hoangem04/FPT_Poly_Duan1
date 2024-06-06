    <?php
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/danhmuc.php";
    include "../model/giohang.php";
    include "../model/binhluan.php";
    include "../model/question.php";
    include "../model/huydonhang.php";
    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../asset/css/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Shop Quần Áo Luxury Man</title>
    </head>

    <body>
        <?php include "header.php"; ?>
        <div class="container">
            <!-- Header -->

            <!-- end header -->
            <!-- Main-->
            <?php
            $dssp = getsix_sanpham();
            $dsdm = getAll_danhmuc();
            if (isset($_GET['act']) && $_GET['act'] != "") {
                $act = $_GET['act'];
                switch ($act) {
                    case 'trangchu':
                        $dssp = getsix_sanpham();
                        include "home.php";
                        break;
                    case 'login':
                        if (isset($_POST['btn-login'])) {
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $check_user = check_user($user, $pass);
                            if (isset($check_user) && is_array($check_user)) {
                                $_SESSION['user'] = $check_user;
                                header("location: ?act=trangchu");
                            } else {
                                $thongbao = "Tên đăng nhập hoặc mật khẩu không tồn tại";
                            }
                        }
                        include "taikhoan/login.php";
                        break;
                    case 'if-taikhoan':
                        if (isset($_GET['idtk'])) {
                            $if_tk = gettaikhoan_id($_GET['idtk']);
                        }
                        if (isset($_GET['btn-capnhat'])) {
                            $user = $_POST['user'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            capnhat_thongtin_taikhoan($user, $email, $address, $tel);
                            $thongbao = "Cập nhật thành công";
                        }
                        include "taikhoan/if-taikhoan.php";
                        break;
                    case "logout":
                        session_unset();
                        header("location: ?act=trangchu");
                        break;

                    case 'register-tk':
                        if (isset($_POST['btn-register'])) {
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            $role = $_POST['role'];
                            add_taikhoan_khachhang($user, $pass, $email, $address, $tel, $role);
                            $thongbao = "Đăng ký tài khoản thành công!";
                        }
                        include "taikhoan/register-tk.php";
                        break;
                    case 'ct-taikhoan':
                        include "taikhoan/ct-taikhoan.php";
                        break;
                    case 'cn-taikhoan':
                        if (isset($_GET['idtk'])) {
                            $cntk = gettaikhoan_id($_GET['idtk']);
                        }
                        if (isset($_POST['btn-cn-taikhoan'])) {
                            $id = $_POST['id'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            capnhat_taikhoan_id($id, $user, $pass, $email, $address, $tel);
                            header("Location: ?act=cn-taikhoan&idtk=$id");
                        }
                        include "taikhoan/cn-taikhoan.php";
                        break;
                    case 'qmk-taikhoan':
                        if (isset($_POST['btn-capnhat'])) {
                            $email = $_POST['email'];
                            $check_mail = check_email($email);
                            if (is_array($check_mail)) {
                                $thongbao = $check_mail['pass'];
                            } else {
                                $thongbao = "Email này không tồn tại!";
                            }
                        }
                        include "taikhoan/q-matkhau.php";
                        break;
                    case 'ct-sanpham':
                        if (isset($_GET['idsp'])) {
                            $ct_sp = getsanpham_ct($_GET['idsp']);
                            $dsbl =  load_binhluan($_GET['idsp']);
                            $sanpham_lq = xemthem_sanpham($_GET['idsp']);
                        }
                        if (isset($_POST['btnSubmit'])) {
                            add_binhluan($_POST['noidung'], $_POST['iduser'], $_POST['idpro'], $_POST['datetime']);
                            header("Location: ?act=ct-sanpham&idsp=" . $_GET['idsp']);
                        }
                        include "product/ctsanpham.php";
                        break;
                    case "tim_kyw":
                        if (isset($_POST['tim_kyw'])) {
                            $iddm = isset($_GET['iddm']) ? $_GET['iddm'] : null;
                            if (isset($_POST['kyw'])) {
                                $kyw = $_POST['kyw'];
                                $dssp = tim_sanpham_kyw($kyw, $iddm);
                            } else {
                                $dssp = getsanpham_danhmuc($iddm);
                            }
                        }
                        include "product/tim_kw.php";
                        break;
                    case 'timsp_kw':
                        $dssp = getAll_sanpham();
                        include "tim_kw.php";
                        break;
                    case 'pro-danhmuc':
                        if (isset($_GET['iddm'])) {
                            $ds_dm_pro = getsanpham_danhmuc($_GET['iddm']);
                        }
                        include "product/dm-sanpham.php";
                        break;
                    case 'giohang':
                        if (isset($_POST['giohang']) && ($_POST['giohang'])) {
                            $id = $_GET['idsp'];
                            $sp = getone_sanpham($id);
                            $soluong = 1;
                            $ttien = $soluong * $sp['price'];
                            $spadd = [$id, $sp['name'], $sp['img'], $sp['price'], $soluong, $ttien];

                            if (!is_array($_SESSION['mycart'])) {
                                $_SESSION['mycart'] = [];
                            }
                            array_push($_SESSION['mycart'], $spadd);
                        }
                        include "../view/cart/viewcard.php";
                        break;
                    case 'delcart':
                        if (isset($_GET['idcart'])) {
                            array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                        } else {
                            $_SESSION['mycart'] = [];
                        }
                        include "../view/cart/viewcard.php";
                        break;
                    case 'bill':
                        include "../view/cart/bill.php";
                        break;
                    case 'billconfirm':
                        if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                            if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                            else $id = 0;
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $pttt = $_POST['pttt'];
                            $tel = $_POST['tel'];
                            $ngaydathang = date('Y-m-d H:i:s');
                            $tongdonhang = tongdonhang();
                            $idbill = insert_bill($id, $name, $address, $email, $tel, $pttt,  $ngaydathang, $tongdonhang);
                            foreach ($_SESSION['mycart'] as $cart) {
                                insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                            }
                            $_SESSION['cart'] = [];
                        }
                        $bill = loadone_bill($idbill);
                        $billct = loadall_cart($idbill);
                        include "../view/cart/billconfirm.php";
                        break;
                    case 'mybill':
                        $listbill = loadall_cart_user($_SESSION['user']['id']);
                        include "../view/cart/mybill.php";
                        break;

                    case 'thevip':
                        include '../view/taothevip.php';
                        break;
                    case 'donhangtt':
                        $listbill = loadall_cart_user($_SESSION['user']['id']);
                        include('../view/cart/thongtindonhang.php');
                        break;
                    case 'contact':
                        if (isset($_POST['btn_contact']) && ($_POST['btn_contact'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $contennt = $_POST['contennt'];
                            question($name, $email, $phone, $contennt);
                            echo '<script>alert("Gửi câu hỏi thành công !")</script>';
                        }
                        include "lienhe.php";
                        break;
                        case 'cancel_order':
                            if (isset($_GET['id_dh'])) {
                                $id = $_GET['id_dh'];
                                $trg_thai = 5;
                                update_trangthai_donhang($id, $trg_thai);
                                $thongbao = "Đã hủy đơn hàng thành công!";
                                header("location: index.php?act=donhangtt");
                                exit(); 
                            }
                            break;
                    default:
                        include "home.php";
                        break;
                }
            } else {
                include "home.php";
            }
            ?>
            <!-- end main -->
            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- end footer-->
        </div>
    </body>

    </html>