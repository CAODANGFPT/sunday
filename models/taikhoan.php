<?php 
    function them_taikhoan($name,$phone,$name_img,$namsinh,$email,$user,$pass,$vaitro){
        $sql = "insert into taikhoan(name,img,phone,date,email,user,pass,vaitro) values('$name','$name_img','$phone','$namsinh','$email','$user','$pass','$vaitro')";
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql ="select * from taikhoan where user='".$user."' AND pass = '".$pass."'";
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function checkdangky($user){
        $sql ="select * from taikhoan where user = '".$user."'";
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function capnhap_tt($id,$name,$phone,$name_img,$namsinh,$email){
        if($name_img!=""){
            $sql = "update taikhoan set name ='".$name."', phone ='".$phone."',img='".$name_img."', date ='".$namsinh."',email='".$email."'where id = ".$id;
        } else {
            $sql = "update taikhoan set name ='".$name."', phone ='".$phone."', date ='".$namsinh."',email='".$email."'where id = ".$id;
        }
        pdo_execute($sql);
    }
    function listkhachhang(){
        $sql ="select * from taikhoan";
        $taikhoan = pdo_query($sql);
        return $taikhoan;
    }
    function xoa_khachhang($id){
        $sql = "delete from taikhoan where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function sua_taikhoan($id){
        $sql ="select * from taikhoan where id=".$id;
        $bl=pdo_query_one($sql);
        return $bl;
    }
    function capnhap_tk($id,$name,$name_img,$sdt,$date,$email,$user,$pass,$vaitro){
        if($name_img!=""){
            $sql = "update taikhoan set name ='".$name."', phone ='".$sdt."',img='".$name_img."', date ='".$date."',vaitro='".$vaitro."'where id = ".$id;
        } else {
            $sql = "update taikhoan set name ='".$name."', phone ='".$sdt."', date ='".$date."',email='".$email."',vaitro='".$vaitro."'where id = ".$id;
        }
        pdo_execute($sql);
    }
    function capnhap_matkhau($passm,$id){
        $sql = "update taikhoan set pass ='".$passm."'where id = ".$id;
        pdo_execute($sql);
    }
?>