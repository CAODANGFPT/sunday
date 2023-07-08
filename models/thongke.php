<?php 
    function thongkesp(){
        $sql = "select thucdon.id as matd, thucdon.name as tentd, count(chitietmonan.id) as countsp, min(chitietmonan.gia) as minprice, max(chitietmonan.gia) as maxprice, avg(chitietmonan.gia) as avgprice from chitietmonan left join thucdon on thucdon.id=chitietmonan.id_thucdon group by thucdon.id order by thucdon.id";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>