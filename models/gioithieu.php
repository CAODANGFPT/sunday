<?php 
    function all_db(){
        $sql ="select * from daubep";
        $db = pdo_query($sql);
        return $db;
    }
    function all_gt(){
        $sql ="select * from gioithieu";
        $gt = pdo_query($sql);
        return $gt;
    }
    function  capnhap_gioithieu($id,$title,$noidung1,$noidung2){
        $sql = "update gioithieu set title ='".$title."', noidung1 ='".$noidung1."',noidung2='".$noidung2."' where id = ".$id;
        pdo_execute($sql);
    }
    

    function xoa_daubep($id){
        $sql = "delete from daubep where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function sua_daubep($id){
        $sql ="select * from daubep where id=".$id;
        $bl=pdo_query_one($sql);
        return $bl;
    }
    function capnhap_daubep($id,$name,$name_img,$chucvu){
        if($name_img!=""){
            $sql = "update daubep set name ='".$name."'=,img='".$name_img."',chucvu='".$chucvu."'where id = ".$id;
        } else {
            $sql = "update daubep set name ='".$name."',chucvu='".$chucvu."' where id = ".$id;
        }
        pdo_execute($sql);
    }
?>
