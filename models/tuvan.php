<?php 
    function themtuvan($name,$sdt,$trangthai){
        $sql = "insert into tuvan(ten,sdt,trangthai) values ('$name','$sdt','$trangthai')";
        pdo_execute($sql);
    }
?>