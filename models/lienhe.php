<?php
    function guilienhe($name,$email,$phone,$diachi,$noidung,$trangthai){
        $sql = "insert into lienhe(name,email,sdt,diachi,noidung,trangthai) values('$name','$email','$phone','$diachi','$noidung','$trangthai')";
        pdo_execute($sql);
    }

?>