<?php 
ob_start();
session_start();
include_once  "models/pdo.php";
    include_once  "models/monan.php";
    include_once  "models/taikhoan.php";
    include_once  "models/dichvu.php";
    include_once  "models/gioithieu.php";
    include_once  "models/thuvien.php";
    include_once  "models/lienhe.php";
    include_once  "models/danhmuctd.php";
    include_once  "models/thongtin.php";
    include_once  "models/tuvan.php";
    include_once  "models/datban.php";
    include_once  "models/datmonan.php";
    $ngayht = date('Y/m/d');
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        $dbhtttt = ht_datban_ngay($id,$ngayht);
    }
    
    $loaiban = ht_loaiban();
    $thucdon = ht_thucdon();
    $thongtin = thongtin();
    $ma_top3 = mon_moi_top3();
    include 'views/header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act) {
            case '/':
            case 'trangchu':
                
                include 'views/trangchu.php';
                break;
            case 'gioithieu':
                $allgt = all_gt();
                $alldb = all_db();
                include 'views/gioithieu.php';
                break;
            case 'thucdon':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                
                }else{
                    $id = 0;
                }
                $allma = all_monan($kyw,$id);
                include 'views/thucdon.php';
                break;
            case 'chitietma':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $onema = ht_monan_one($id);
                    extract($onema);
                    $cungloai = mon_an_cung($id,$id_thucdon);
                    include 'views/chitietmonan.php';
                }else{
                    include 'views/trangchu.php';
                }
                break;

        case 'chitietma':
                include 'views/thucdon.php';
                break;
        case 'dichvu':
                $alldv = ht_dichvu();
                include 'views/dichvu.php';
                break;
        case 'chitietdv':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $onedv = ht_dichvu_one($id);
                    extract($onedv);
                    $dv_cungloai = dichvu_cungloai($id,$id_dv);
                    include 'views/dichvuchitiet.php';
                }else{
                    include 'views/trangchu.php';
                }
                break;

        case 'thuvien':
                $alltv = ht_thuvien();
                include 'views/thuvien.php';
                break;
        case 'chitiettv':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $onetv = ht_thuvien_one($id);
                    $cttv = ht_chitiet_thuvien($id);
                    include 'views/cttv.php';
                }else{
                    include 'views/trangchu.php';
                }
                break;

        case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user= $_POST['user'];
                    $pass= $_POST['pass'];
                    $checkuser = checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('location: index.php?act=trangchu');
                        die;
                    }else{
                        $thongbao ="tài khoản không tồn tại, vui lòng kiểm tra lại hoặc đăng ký";
                    }
                }
                include 'views/dangnhap.php';
                break;
        case 'thongtin':
                include 'views/thongtin.php';
                break;
        case 'luuthongtin':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $phone  = $_POST['phone'];
                    $namsinh = $_POST['namsinh'];
                    $email = $_POST['email'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    capnhap_tt($id,$name,$phone,$name_img,$namsinh,$email);
                    header('location: index.php?act=thongtin');
                    die;
                }
                break;
        case 'dangky':
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $name = $_POST['name'];
                    $phone  = $_POST['phone'];
                    $namsinh = $_POST['namsinh'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $name_img = 'atk1.jpg';
                    $vaitro = 'Người dùng';
                    $checkdangky = checkdangky($user);
                    if(is_array($checkdangky)){
                        $thongbao="Đã đang kí không thành công thành công. User đã tồn tại";
                    }else{
                        them_taikhoan($name,$phone,$name_img,$namsinh,$email,$user,$pass,$vaitro);
                        $thongbao="Đã đang kí thành công. Bạn có thể đăng nhập";
                    }
                }
                include 'views/dangky.php';
                break;
        case 'dangxuat':
                session_unset();
                include 'views/dangnhap.php';
                break;

        case 'doimatkhau':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $passc = $_POST['passc'];
                    $passm = $_POST['passm'];
                    $pass = $_POST['pass'];
                    $id = $_POST['id'];
                    if($passc == $pass){
                        capnhap_matkhau($passm,$id);
                        $thongbao = "Đổi mật khẩu thành công";
                        header('location: index.php?act=doimatkhau');
                        die;
                    } 
                    //  else {
                    // //     $thongbao = "Đổi mật khẩu không thành công";
                    // //     header('location: index.php?act=doimatkhau');
                    // //     die;
                    // // }
                    
                }
                include 'views/doimatkhau.php';
                break;
            // tài khoản
            // Liên hệ
        case 'lienhe':
                if(isset($_POST['gui']) && $_POST['gui']){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $diachi = $_POST['diachi'];
                    $noidung = $_POST['noidung'];
                    $trangthai = "Chưa phản hồi";
                    guilienhe($name,$email,$phone,$diachi,$noidung,$trangthai);
                    $thongbao="Đã phản hồi thành công";
                }
                include 'views/lienhe.php';
                break;
            //Tư vấn
        case 'tuvan':
                if(isset($_POST['btn_gui']) && $_POST['btn_gui']){
                    $name = $_POST['name'];
                    $sdt = $_POST['phone'];
                    $trangthai = "Chưa tư vấn";
                    themtuvan($name,$sdt,$trangthai);
                }
                include 'views/trangchu.php';
                break;
            //Đặt bàn
        case 'thongtindatban':
                include 'views/thongtindatban.php';
                break;
        case 'datban':
                if(isset($_POST['gui']) && $_POST['gui']){
                    $iduser = $_POST['iduser'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $songuoi = $_POST['songuoi'];
                    $ngay = $_POST['ngay'];
                    $gioan = $_POST['gioan'];
                    $id_lb = $_POST['idlb'];
                    $noidung = $_POST['noidung'];
                    $trangthai = "Chưa thanh toán";

                    them_datban($name,$iduser,$phone,$email,$songuoi,$ngay,$gioan,$noidung,$trangthai,$id_lb);
                    $thongbao = "Đặt bàn thành công";
                }
                include 'views/trangchu.php';
                break;
            case 'xoalichdat':
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_datban($_GET['id']);
                    header('location: index.php?act=thongtindatban');
                    die;
                }

                break;

            //Đặt bàn

            // Thêm món ăn
        case 'themmonan':
            if(isset($_POST['add']) && $_POST['add']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $thanhtien = $soluong * $gia;
                $iddb = $_POST['iddb'];
                them_monan_datban($name,$img,$soluong,$gia,$thanhtien,$iddb);
                header('location: index.php?act=thongtindatban');
                die;
                }
            include 'views/thongtindatban.php';
            break;
        case 'xoaaddma':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                xoa_moan_datban($id);
                header('location: index.php?act=thongtindatban');
                die;
            }
            break;
        case 'sualichdat':
            if(isset($_GET['id']) && $_GET['id']>0){
                $htttdb = ht_thongtindatban_one($_GET['id']);
                $lb = ht_loaiban();
            }
            include 'views/suattdb.php';
            break;
        case 'luuttdb':
            if(isset($_POST['luu']) && $_POST['luu']){
                $id = $_POST['id'];
                $ngay = $_POST['ngay'];
                $gio = $_POST['gio'];
                $songuoi = $_POST['songuoi'];
                $idlb = $_POST['idlb'];
                $luuy = $_POST['luuy'];
                capnhap_datban($id,$ngay,$gio,$songuoi,$idlb,$luuy);
                header('location: index.php?act=thongtindatban');
                die;
            }

        }
    } else{
        include 'views/trangchu.php';
    }
    
?>

<?php  include "views/footer.php" ?>