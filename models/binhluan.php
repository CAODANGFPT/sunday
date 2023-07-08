<?php 
function them_binhluan($iduser,$name,$mamonan,$noidung,$ngaybinhluan){
        $sql = "insert into binhluan(iduser,name,mamonan,noidung,ngaybl) values('$iduser','$name','$mamonan','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function hienthibl($mamonan){
        $sql ="select * from binhluan where mamonan='".$mamonan."' order by id desc ";
        $bl = pdo_query($sql);
        return $bl;
    }

    // function listbinhluan(){
    //     $sql ="select * from binhluan";
    //     $binhluan = pdo_query($sql);
    //     return $binhluan;
    // }
    function sua_binhluan($id){
        $sql ="select * from binhluan where id=".$id;
        $bl=pdo_query_one($sql);
        return $bl;
    }
    function capnhap_bl($id,$noidung){
        $sql = " update binhluan set noidung= '".$noidung."' where id=".$id;
        pdo_execute($sql);
    }
    function xoa_binhluan($id){
        $sql = "delete from binhluan where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function listbinhluan($idsp=0){
        $sql ="select * from binhluan where 1";

        if($idsp>0){
            $sql.="  and mamonan = '".$idsp."'";
        }
        $sql.=" order by id";
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
?>