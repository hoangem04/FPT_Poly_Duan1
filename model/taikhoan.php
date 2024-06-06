<?php
function getAll_taikhoan()
{
    $sql = "SELECT * FROM `taikhoan`";
    $result = pdo_query($sql);
    return $result;
}
function add_khachhang($user, $pass, $email, $address, $tel, $role)
{
    $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$user','$pass','$email','$address','$tel','$role')";
    pdo_execute($sql);
}
function  getold_khachhang($idUdate)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id= $idUdate ";
    $result = pdo_query_one($sql);
    return $result;
}
function delete_khachhang($idDlete)
{
    $sql = "DELETE FROM `taikhoan` WHERE id = $idDlete";
    pdo_execute($sql);
}
function update_khachhang($id, $tenkh, $pass, $email, $address, $tel, $role)
{
    $sql = "UPDATE `taikhoan` SET `user`='$tenkh',`pass`='$pass',`email`='$email',`address`='$address',`tel`='$tel',`role`='$role' WHERE id = $id";
    pdo_execute($sql);
}
function check_user($user, $pass)
{
    $sql = "select * from taikhoan where user = '" . $user . "' AND pass = '" . $pass . "'";
    $result = pdo_query_one($sql);
    return $result;
}
function check_taikhoan($user)
{
    $sql = "select * from taikhoan where user =  $user ";
    $result = pdo_query_one($sql);
    return $result;
}
function add_taikhoan_khachhang($user, $pass, $email, $address, $tel, $role)
{
    $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$user','$pass','$email','$address','$tel','$role')";
    pdo_execute($sql);
}
function  gettaikhoan_id($idtk)
{
    $sql = "select * from taikhoan where id = $idtk";
    $result = pdo_query_one($sql);
    return $result;
}
function check_email($email)
{
    $sql = "select * from taikhoan where email = '" . $email . "'";
    $result = pdo_query_one($sql);
    return $result;
}
function capnhat_thongtin_taikhoan($user, $email, $address, $tel)
{
    $sql = "UPDATE `taikhoan` SET `user`='$user',`email`='$email',`address`='$address',`tel`='$tel'";
    pdo_execute($sql);
}
function  capnhat_taikhoan_id($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email',`address`='$address',`tel`='$tel' WHERE id = $id ";
    pdo_execute($sql);
}
