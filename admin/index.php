<?php
// session_start();
include "header.php";
include "menu.php";
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "../model/doanhthu.php";
include "../model/thongke.php";
include "../model/hoidap.php";
?>

<div>
    <?php
    // Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        $doanh_thu = doanhthu_hangngay();
        switch ($act) {
            case 'trangchu':
                $dsthongke = load_thongke_sanpham_danhmuc();
                include "trangchu/trangchu.php";
                break;
            case 'thongke':
                $liststatis = load_thongke_sanpham_danhmuc();
                include "thongke/thongke.php";
                break;
            case 'list-khachhang':
                $dskh = getAll_taikhoan();
                include "khachhang/list-khachhang.php";
                break;
            case 'add-khachhang':
                if (isset($_POST['btn-sumbit'])) {
                    $user = $_POST['tenuser'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    add_khachhang($user, $pass, $email, $address, $tel, $role);
                    header("location: ?act=list-khachhang");
                }
                include "khachhang/add-khachhang.php";
                break;
            case 'update-khachhang':
                if (isset($_GET['idUdate'])) {
                    $old_kh = getold_khachhang($_GET['idUdate']);
                }
                if (isset($_POST['btn-update-khachhang'])) {
                    $id = $_POST['id'];
                    $tenkh = $_POST['tenuser'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    update_khachhang($id, $tenkh, $pass, $email, $address, $tel, $role);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=list-khachhang");
                }
                include "khachhang/edit-khachhang.php";
                break;

            case 'delete-khachhang':
                if (isset($_GET['idDlete'])) {
                    delete_khachhang($_GET['idDlete']);
                }
                $dskh = getAll_taikhoan();
                include "khachhang/list-khachhang.php";
                break;
            case 'list-sanpham':
                $dssp = getAll_sanpham();
                include "sanpham/list-sanpham.php";
                break;
            case 'add-sanpham':
                if (isset($_POST['btn-add-sanpham'])) {
                    $tensp = $_POST['namesp'];
                    $giasp = $_POST['giasp'];
                    $photo = null;
                    if ($_FILES['img']['name'] != "") {
                        $photo = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$photo");
                    }
                    $mota = $_POST['mota'];
                    $luotxem = $_POST['luotxem'];
                    $danhmuc = $_POST['danhmuc'];
                    add_sanpham($tensp, $giasp, $photo, $mota, $luotxem, $danhmuc);
                    header("location: ?act=list-sanpham");
                }
                $dsdm = getAll_danhmuc();
                include "sanpham/add-sanpham.php";
                break;
            case 'edit-sanpham':
                if (isset($_GET['idUp'])) {
                    $old_sp = getold_sanpham($_GET['idUp']);
                }
                if (isset($_POST['btn-update-sanpham'])) {
                    $idsp = $_POST['id'];
                    $tensp = $_POST['namesp'];
                    $giasp = $_POST['giasp'];
                    $photo = "";
                    if ($_FILES['img']['name'] != "") {
                        $photo = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$photo");
                    }
                    $mota = $_POST['mota'];
                    $luotxem = $_POST['luotxem'];
                    $danhmuc = $_POST['danhmuc'];
                    update_sanpham($idsp, $tensp, $giasp, $photo, $mota, $luotxem, $danhmuc);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=list-sanpham");
                }
                include "sanpham/edit-sanpham.php";
                break;
            case 'delete-sanpham':
                if (isset($_GET['idSP'])) {
                    delete_sanpham($_GET['idSP']);
                }
                $dssp = getAll_sanpham();
                include "sanpham/list-sanpham.php";
                break;
            case 'danhmuc':
                $dsdm = getAll_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            case 'add-danhmuc':
                if (isset($_POST['btn-add-danhmuc'])) {
                    $danhmuc = $_POST['ten-danhmuc'];
                    add_danhmuc($danhmuc);
                }
                include "danhmuc/add-danhmuc.php";
                break;
            case 'update-danhmuc':
                if (isset($_GET['idUP'])) {
                    $lold_dm = getold_danhmuc($_GET['idUP']);
                }
                if (isset($_POST['btn-update-danhmuc'])) {
                    $id = $_POST['id'];
                    $tenDm = $_POST['ten-danhmuc'];
                    update_danhmuc($id, $tenDm);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=danhmuc");
                }
                include "danhmuc/edit-danhmuc.php";
                break;
            case 'delete-danhmuc':
                if (isset($_GET['idDm'])) {
                    delete_danhmuc($_GET['idDm']);
                }
                $dsdm = getAll_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            case 'listbill':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                include "bill/listbill.php";
                break;
            case 'binhluan':
                $dsbl = danhsach_binhluan();
                include "binhluan/list-binhluan.php";
                break;
            case 'dl-binhluan':
                if (isset($_GET['idbl'])) {
                    delete_binhluan($_GET['idbl']);
                }
                header("location: ?act=binhluan");
                include "binhluan/list-binhluan.php";
                break;
            case 'cn-donhang':
                if (isset($_GET['id_dh'])) {
                    $old_dh = getOld_donhang($_GET['id_dh']);
                }
                if (isset($_POST['btn-update-donhang'])) {
                    $id = $_POST['id'];
                    $trg_thai = $_POST['bill_status'];
                    update_trangthai_donhang($id, $trg_thai);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=listbill");
                }
                include "bill/editbill.php";
                break;
                case 'list_ques':
                    if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                        $listques = question();
                    include('list-question.php');
                break;
                   case 'delete_ques':
                    if (isset($_GET['id_ques']) && ($_GET['id_ques']) > 0) {
                        $id_ques = $_GET['id_ques'];
                        delete_ques($id_ques);
                    }
                    header('location: ?act=list_ques');
                    break;
            default:
                include "trangchu/trangchu.php";
                break;
        }
    } else {
        include "trangchu/trangchu.php";
    }
    ?>
</div>