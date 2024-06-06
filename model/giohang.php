<?php
function getsanpham_giohang($idpro)
{
    $sql = "SELECT * FROM `sanpham` WHERE id = $idpro";
    $result = pdo_query_one($sql);
    return $result;
}
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
        // Sử dụng đường dẫn đầy đủ đến thư mục uploads
        $images = '../uploads/' . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '
            <tr>
                <td><img src="' . $images . '" alt="" width="100px" height="150px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . number_format($cart[3]) . 'đ</td>
                <td>' . $cart[4] . '</td>
                <td>' . number_format($ttien) . 'đ</td>
                ' . $xoasp_td . '
            </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . number_format($tong) . 'đ</td>
        ' . $xoasp_td2 . '
    </tr>';
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
        $images = '../uploads/' . $cart['img'];

        $tong += $cart['thanhtien'];
        echo '
        <tr>
        <td><img src="' . $images . '" alt="" height="100px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . number_format($cart['price']) . '</td>
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
    $sql = " INSERT INTO bill (id,iduser, bill_name, bill_address, bill_email, bill_tel, bill_pttt, ngaydathang, total) VALUES (NULL,'$iduser', '$name', '$address', '$email', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
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
// function get_ttdh($n)
// {
//     switch ($n) {
//         case '0':
//             $tt = "Đơn hàng mới";
//             break;
//         case '1':
//             $tt = "Đơn xử lý";
//             break;
//         case '2':
//             $tt = "Đã giao hang";
//             break;
//         case '3':
//             $tt = "Hoàn tất";
//             break;
//         default:
//             $tt = "Đơn hàng mới";
//             break;
//     }
//     return $tt;
// }

function loadall_thongke()
{
    $sql = "SELECT categories.id as madm, categories.name as tendm, count(products.id) as countsp, min(products.price) as minprice,  max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql .= " FROM products LEFT JOIN categories on categories.id = products.iddm";
    $sql .= " GROUP BY categories.id ORDER BY categories.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
