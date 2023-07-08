<?php 
    function thongtin(){
        $sql ="select * from thongtin";
        $thongtin = pdo_query($sql);
        return $thongtin;
    }
    function capnhap_thongtin($id,$name_img,$sdt,$email,$diachi){
        if($name_img!=""){
            $sql = "update thongtin set sdt ='".$sdt."',img='".$name_img."', diachi ='".$diachi."',email='".$email."' where id = ".$id;
        } else {
            $sql = "update thongtin set sdt ='".$sdt."', diachi ='".$diachi."',email='".$email."' where id = ".$id;
        }
        pdo_execute($sql);
    }
?>