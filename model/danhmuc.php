<?php
function getAll_danhmuc()
{
    $sql = "SELECT * FROM `danhmuc`";
    $result = pdo_query($sql);
    return $result;
}
function  add_danhmuc($danhmuc)
{
    $sql = "INSERT INTO `danhmuc`(`name`) VALUES ('$danhmuc')";
    pdo_execute($sql);
}
function  delete_danhmuc($idDm)
{
    $sql = "delete from danhmuc where id = $idDm";
    pdo_execute($sql);
}
function getold_danhmuc($idUP)
{
    $sql = "select * from danhmuc where id = $idUP";
    $result = pdo_query_one($sql);
    return $result;
}
function update_danhmuc($id, $tenDm)
{
    $sql = "UPDATE `danhmuc` SET `name`='$tenDm' WHERE id = $id";
    pdo_execute($sql);
}
