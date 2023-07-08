<?php
    // monan
        function them_monan_datban($name,$img,$soluong,$gia,$thanhtien,$iddb){
            $sql = "insert into damonan(name,img,soluong,gia,thanhtien,iddatban) values('$name','$img','$soluong','$gia','$thanhtien','$iddb')";
            pdo_execute($sql);
        }
        function ht_moan_datban($id){
            $sql ="select * from damonan where iddatban = ".$id;
            $datbam = pdo_query($sql);
            return $datbam;
        }
        function xoa_moan_datban($id){
            $sql = "delete from damonan where id=".$_GET['id'];
            pdo_execute($sql);
        }
        function ht_moan_datban_all(){
            $sql ="select * from damonan";
            $datbam = pdo_query($sql);
            return $datbam;
        }
?>