<?php 
 function getOld_donhang($id_dh)
 {
     $sql = "SELECT * FROM `bill` WHERE id = $id_dh";
     $result = pdo_query_one($sql);
     return $result;
 }
 function  update_trangthai_donhang($id, $trg_thai)
 {
     $sql = "UPDATE `bill` SET `bill_status`='$trg_thai' WHERE id = $id ";
     pdo_execute($sql);
 }
     if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
?>