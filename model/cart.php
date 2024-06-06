<?php
if (!function_exists('viewcart')) {
    function viewcart($del)
    {
        global $img_path;
        $tong = 0;
        $i = 0;
        if ($del == 1) {
            $xoasp_th = '<th>THAO TÁC</th>';
            $xoasp_td2 = '<td></td>';
        } else {
            $xoasp_th = '';
            $xoasp_td2 = '';
        }
        echo '<tr>
            <th>HÌNH ẢNH</th>
            <th>SẢN PHẨM</th>
            <th>ĐƠN GIÁ</th>
            <th>SỐ LƯỢNG</th>
            <th>THÀNH TIỀN</th>
            ' . $xoasp_th . '
        </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $images = '../uploads/' . $cart[2]; // Đường dẫn đầy đủ đến thư mục uploads
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            if ($del == 1) {
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            } else {
                $xoasp_td = '';
            }

            echo '
                <tr>
                <td><img src="' . $images . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . number_format($ttien) . 'đ</td>
                ' . $xoasp_td . '
            </tr>';
            $i += 1;
        }
        echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . number_format($tong) . '</td>
            ' . $xoasp_td2 . '
        </tr>';
    }
}

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
        <th>HÌNH ẢNH</th>
        <th>SẢN PHẨM</th>
        <th>ĐƠN GIÁ</th>
        <th>SỐ LƯỢNG</th>
        <th>THÀNH TIỀN</th>

    </tr>';
    foreach ($listbill as $cart) {
        $images = $img_path . $cart['img'];

        $tong += $cart['thanhtien'];
        echo '
            <tr>
            <td><img src="' . $images . '" alt="" height="80px"></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . number_format($cart['thanhtien']) . 'đ</td>
        </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>

        <td>' . number_format($tong) . 'đ</td>
    </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $name, $address, $email, $tel, $pttt,  $ngaydathang, $tongdonhang)
{
    $sql = " INSERT INTO bill (id,iduser, bill_name, bill_address, bill_email, bill_tel, bill_pttt, ngaydathang, total,bill_status) VALUES (NULL,'$iduser', '$name', '$address', '$email', '$tel', '$pttt', '$ngaydathang', '$tongdonhang',1)";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function getOld_donhang($id_dh)
{
    $sql = "SELECT * FROM `bill` WHERE id = $id_dh";
    $result = pdo_query_one($sql);
    return $result;
}
function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_user($iduser)
{
    $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n)
{
    switch ($n) {
        case '1':
            $tt = "Chưa xác nhận";
            break;
        case '2':
            $tt = "Đã xác nhận";
            break;
        default:
            $tt = "chưa xác nhận";
            break;
    }
    return $tt;
}
function  update_trangthai_donhang($id, $trg_thai)
{
    $sql = "UPDATE `bill` SET `bill_status`='$trg_thai' WHERE id = $id ";
    pdo_execute($sql);
}
function loadall_thongke()
{
    $sql = "SELECT categories.id as madm, categories.name as tendm, count(products.id) as countsp, min(products.price) as minprice,  max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql .= " FROM products LEFT JOIN categories on categories.id = products.iddm";
    $sql .= " GROUP BY categories.id ORDER BY categories.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
