<?php 
    // loại bàn
    function them_loaiban($ten){
        $sql = "insert into loaiban(name) values('$ten')";
        pdo_execute($sql);
    }
    function xoa_loaiban($id){
        $sql = "delete from loaiban where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function ht_loaiban(){
        $sql ="select * from loaiban";
        $loaiban = pdo_query($sql);
        return $loaiban;
    }
    function sua_loaiban($id){
        $sql ="select * from loaiban where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function capnhap_loaiban($id,$ten){
        $sql = " update loaiban set name = '".$ten."' where id=".$id;
        pdo_execute($sql);
    }
    function ht_loaiban_one($id_lb){
        $sql ="select * from loaiban where id = $id_lb";
        $ma = pdo_query_one($sql);
        return $ma;
    }
    // loại bàn

    // datban
    function them_datban($name,$iduser,$phone,$email,$songuoi,$ngay,$gioan,$noidung,$trangthai,$id_lb){
        $sql = "insert into datban(name,iduser,phone,email,songuoi,ngay,gioan,noidung,trangthai,id_lb) values('$name','$iduser','$phone','$email','$songuoi','$ngay','$gioan','$noidung','$trangthai','$id_lb')";
        pdo_execute($sql);
    }
    function ht_datban($id){
        $sql =" select b.id,a.name as tenban,b.name as tenuser,b.phone,b.email,b.songuoi,b.ngay,b.gioan,b.noidung,b.trangthai from loaiban a  join datban b on a.id = b.id_lb where iduser = ".$id;
        $datbam = pdo_query($sql);
        return $datbam;
    }

    function ht_datban_ngay($id,$ngayht){
        $sql =" select b.id,a.name as tenban,b.name as tenuser,b.phone,b.email,b.songuoi,b.ngay,b.gioan,b.noidung,b.trangthai from loaiban a  join datban b on a.id = b.id_lb where iduser = '".$id."' and  b.ngay >= '".$ngayht."'";
        $datbam = pdo_query($sql);
        return $datbam;
    }

    function ht_thongtindatban(){
        $sql ="select b.id,a.name as tenban,b.name as tenuser,b.phone,b.email,b.songuoi,b.ngay,b.gioan,b.noidung,b.trangthai from loaiban a  join datban b on a.id = b.id_lb";
        $ma = pdo_query($sql);
        return $ma;
    }
    function ht_thongtindatban_one($id){
        $sql ="select b.id,a.name as tenban,b.name as tenuser,b.phone,b.email,b.songuoi,b.ngay,b.gioan,b.noidung,b.trangthai from loaiban a  join datban b on a.id = b.id_lb where b.id=".$id;
        $ma = pdo_query_one($sql);
        return $ma;
    }

    function luu_trang_thai($id,$trangthai){
        $sql = " update datban set trangthai = '".$trangthai."' where id=".$id;
        pdo_execute($sql);
    }
    function capnhap_datban($id,$ngay,$gio,$songuoi,$idlb,$luuy){
        $sql = " update datban set ngay = '".$ngay."',gioan = '".$gio."',songuoi = '".$songuoi."',id_lb = '".$idlb."',noidung = '".$luuy."' where id=".$id;
        pdo_execute($sql);
    }
    function xoa_damonan($iddb){
        $sql = "delete from damonan where iddatban=".$iddb;
        pdo_execute($sql);
    }
    function xoa_datban($id){
        $sql = "delete from datban where id=".$id;
        pdo_execute($sql);
        xoa_damonan($id);
    }
?>