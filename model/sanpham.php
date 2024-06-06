<?php
function getAll_sanpham()
{
    $sql = "SELECT * FROM `sanpham`";
    $result = pdo_query($sql);
    return $result;
}
function getsix_sanpham()
{
    $sql = "SELECT * FROM `sanpham` LIMIT 6";
    $result = pdo_query($sql);
    return $result;
}
function getsanpham_dm()
{
    $sql = "SELECT * FROM `sanpham` LIMIT 8";
    $result = pdo_query($sql);
    return $result;
}
function delete_sanpham($idSP)
{
    $sql = "delete from sanpham where id= $idSP";
    pdo_execute($sql);
}
function getone_sanpham($id)
{
    $sql = 'select * from sanpham where id = ' . $id;
    $result = pdo_query_one($sql);
    return $result;
}
function get_sanpham($id)
{
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function  add_sanpham($tensp, $giasp, $photo, $mota, $luotxem, $danhmuc)
{
    $sql = "INSERT INTO `sanpham`( `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES ('$tensp','$giasp','$photo','$mota','$luotxem','$danhmuc')";
    pdo_execute($sql);
}
function getold_sanpham($idUp)
{
    $sql = "select * from sanpham where id= $idUp";
    $result = pdo_query_one($sql);
    return $result;
}
function update_sanpham($idsp, $tensp, $giasp, $photo, $mota, $luotxem, $danhmuc)
{
    if ($photo == "") {
        $sql = "UPDATE `sanpham` SET `name`='$tensp',`price`='$giasp,',`mota`='$mota',`luotxem`='$luotxem',`iddm`='$danhmuc' WHERE id = $idsp";
    } else {
        $sql = "UPDATE `sanpham` SET `name`='$tensp',`price`='$giasp,',`img`='$photo',`mota`='$mota',`luotxem`='$luotxem',`iddm`='$danhmuc' WHERE id = $idsp";
    }

    pdo_execute($sql);
}
function getsanpham_ct($idsp)
{
    $sql = "select * from sanpham where id = $idsp";
    $result = pdo_query_one($sql);
    return $result;
}
function one_sanpham($idsp)
{
    $sql = "SELECT * FROM sanpham where id= $idsp";
    $result = pdo_query_one($sql);
    return $result;
}
function xemthem_sanpham($idsp)
{
    $sanpham = one_sanpham($idsp);
    $iddm = $sanpham['iddm'];
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm AND id <> $idsp limit 0,4";

    $result = pdo_query($sql);
    return $result;
}
function tim_sanpham_kyw($kyw, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE 1";

    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%'";
    }

    if ($iddm) {
        $sql .= " AND iddm = '" . $iddm . "'";
    }

    $sql .= " ORDER BY id DESC";
    $result = pdo_query($sql);
    return $result;
}
function tim_sanpham($iddm)
{
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm ";
    $result = pdo_query($sql);
    return $result;
}
function getsanpham_danhmuc($iddm)
{
    $sql = "SELECT * FROM `sanpham` WHERE iddm = $iddm";
    $result = pdo_query($sql);
    return $result;
}
