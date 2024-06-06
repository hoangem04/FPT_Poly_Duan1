<?php
function loadall_statis()
{
    $sql = "SELECT c.iddm as idcate, c.name as namecate, COUNT(sp.id) as pro_quantity, MIN(sp.price) as min_price, MAX(sp.price) as max_price, AVG(sp.price) as avg_price";
    $sql .= " FROM sanpham sp LEFT JOIN category c ON c.id = sp.iddm";
    $sql .= " GROUP BY c.id ORDER BY c.id DESC";
    $liststatis = pdo_query($sql);
    return $liststatis;
}
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id, dm.name, COUNT(*) as soluong, MIN(price) as gia_min,
        Max(price) as gia_max, AVG(price) as gia_avg
        FROM danhmuc dm 
        JOIN sanpham sp 
        ON dm.id = sp.iddm
        GROUP BY dm.id, dm.name
        ORDER BY soluong DESC";

    return pdo_query($sql);
}
