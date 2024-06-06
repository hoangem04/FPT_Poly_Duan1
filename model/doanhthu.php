<?php
function doanhthu_hangngay()
{
    $sql = "SELECT ngaydathang, SUM(total) AS doanhthu_ngay
    FROM bill
    WHERE bill_status = 2
    GROUP BY ngaydathang";
    return pdo_query($sql);
}
