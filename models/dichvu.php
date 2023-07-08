<?php 
    function ht_dichvu(){
        $sql ="select * from dichvuchitiet";
        $dichvu = pdo_query($sql);
        return $dichvu;
    }
    function ht_dichvu_one($id){
        $sql ="select * from dichvuchitiet where id=".$id;
        $dv = pdo_query_one($sql);
        return $dv;
    }
    function them_dichvu($tendv,$name_img,$mota,$noidung,$iddv){
        $sql = "insert into dichvuchitiet(name,img,mota,chitiet,id_dv) values('$tendv','$name_img','$mota','$noidung','$iddv')";
        pdo_execute($sql);
    }
    function ht_danhmuc_dichvu(){
        $sql ="select * from dichvu";
        $dichvu = pdo_query($sql);
        return $dichvu;
    }
    function xoa_dichvu($id){
        $sql = "delete from dichvuchitiet where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function capnhap_dichvu($id,$name,$name_img,$mota,$noidung,$id_dv){
        if($name_img!=""){
            $sql = "update dichvuchitiet set name ='".$name."',img='".$name_img."',mota='".$mota."', chitiet ='".$noidung."', id_dv ='".$id_dv."' where id = ".$id;
        } else {
            $sql = "update dichvuchitiet set name ='".$name."',mota='".$mota."', chitiet ='".$noidung."', id_dv ='".$id_dv."' where id = ".$id;
        }
        pdo_execute($sql);
    }
    function dichvu_cungloai($id,$id_dv){
        $sql ="select * from dichvuchitiet where id_dv=".$id_dv." AND id<>".$id."";
        $dichvu = pdo_query($sql);
        return $dichvu;
    }
?>