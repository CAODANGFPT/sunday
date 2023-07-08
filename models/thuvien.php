<?php 
    function ht_thuvien(){
        $sql ="select * from thuvien";
        $thuvien = pdo_query($sql);
        return $thuvien;
    }
    function ht_thuvien_one($id){
        $sql ="select * from thuvien where id=".$id;
        $tv = pdo_query_one($sql);
        return $tv;
    }
    function ht_chitiet_thuvien($id){
        $sql ="select * from chitietthuvien where id_tv=".$id;
        $thuvien = pdo_query($sql);
        return $thuvien;
    }
    function capnhap_thuvien($id,$name,$name_img,$mota,$chitiet){
        if($name_img!=""){
            $sql = "update thuvien set name ='".$name."', chitiet ='".$chitiet."',mota='".$mota."',img='".$name_img."' where id = ".$id;
        } else {
            $sql = "update thuvien set name ='".$name."',mota='".$mota."', chitiet ='".$chitiet."' where id = ".$id;
        }
        pdo_execute($sql);
    }
    function them_thuvien($name,$chitiet,$mota,$name_img){
        $sql = "insert into thuvien(name,mota,chitiet,img) values('$name','$chitiet','$mota','$name_img')";
        pdo_execute($sql);
    }
    function xoa_cttv($idtv){
        $sql = "delete from chitietthuvien where id_tv=".$idtv;
        pdo_execute($sql);
    }
    function xoa_cttv1($id){
        $sql = "delete from chitietthuvien where id=".$id;
        pdo_execute($sql);
    }

    function xoa_tv($id){
        $sql = "delete from thuvien where id=".$id;
        pdo_execute($sql);
        xoa_cttv($id);
    }
    function them_anhthuvien($name_img,$id_tv){
        $sql = "insert into chitietthuvien(img,id_tv) values('$name_img','$id_tv')";
        pdo_execute($sql);
    }
?>