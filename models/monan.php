<?php
    function all_monan($kyw="",$id_thucdon=0){
        $sql ="select * from chitietmonan where 1";
        if($kyw!=""){
            $sql.="  and name like '%".$kyw."%'";
        }
        if($id_thucdon>0){
            $sql.="  and id_thucdon = '".$id_thucdon."'";
        }
        $sql.=" order by id";
        $allmn = pdo_query($sql);
        return $allmn;
    }
    function ht_monan_one($id){
        $sql ="select * from chitietmonan where id=".$id;
        $ma = pdo_query_one($sql);
        return $ma;
    }
    function them_monan($name,$name_img,$gia,$mota,$noidung,$idtd){
        $sql = "insert into chitietmonan(name,img,gia,mota,chitiet,id_thucdon) values ('$name','$name_img','$gia','$mota','$noidung','$idtd')";
        pdo_execute($sql);
    }
    function xoa_monan($id){
        $sql = "delete from chitietmonan where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function sua_monan($id){
        $sql ="select * from chitietmonan where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function capnhap_monan($id,$name,$name_img,$gia,$mota,$noidung,$id_td){
        if($name_img!=""){
            $sql = "update chitietmonan set name ='".$name."',img='".$name_img."', gia ='".$gia."',mota='".$mota."', chitiet ='".$noidung."', id_thucdon ='".$id_td."' where id = ".$id;
        } else {
            $sql = "update chitietmonan set name ='".$name."', gia ='".$gia."',mota='".$mota."', chitiet ='".$noidung."', id_thucdon ='".$id_td."' where id = ".$id;
        }
        pdo_execute($sql);
    }
    function mon_an_cung($id,$id_thucdon){
        $sql ="select * from chitietmonan where id_thucdon=".$id_thucdon." AND id<>".$id." order by id desc limit 0,3";
        $monan = pdo_query($sql);
        return $monan;
    }
    function mon_moi_top3(){
        $sql ="select * from chitietmonan order by id limit 0,3";
        $monan = pdo_query($sql);
        return $monan;
    }
    function thucdon_trangchu($id_thucdon){
        $sql ="select * from chitietmonan where 1";
        $sql.="  and id_thucdon = '".$id_thucdon."'";
        $sql.=" order by id";
        $allmn = pdo_query($sql);
        return $allmn;
    }
?>