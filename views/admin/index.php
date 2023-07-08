<?php 
ob_start();
include_once "../../models/pdo.php";
include_once "../../models/danhmuctd.php";
include_once "../../models/dichvu.php";
include_once "../../models/monan.php";
include_once "../../models/thuvien.php";
include_once "../../models/taikhoan.php";
include_once "../../models/binhluan.php";
include_once "../../models/thongtin.php";
include_once "../../models/gioithieu.php";
include_once "../../models/datmonan.php";
include_once "../../models/datban.php";
include_once "../../models/thongke.php";
include_once "header.php";


?>

<?php 
    if(isset($_GET['act'])){
        $art = $_GET['act'];
        switch($art) {
            case '/':
            case 'trangchu':
                include 'trangchu/home.php';
                break;
        // Thực đơn

            case 'thucdon':
                $ht_td = ht_thucdon();
                    include 'thucdon/hienthitd.php';
                    break;
                
            case 'xoatd':
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_thucdon($_GET['id']);
                }
                $ht_td = ht_thucdon();
                include 'thucdon/hienthitd.php';
                break;
            case 'themthucdon':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $ten = $_POST['ten'];
                    them_thucdon($ten);
                }
                include 'thucdon/add.php';
                break;
            case 'suatd':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $std = sua_thucdon($_GET['id']);
                }
                include 'thucdon/update.php';
                break;
            case 'updatetd':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $id = $_POST['id'];
                    $ten = $_POST['ten'];
                    capnhap_dm($id,$ten);
                }
                $ht_td = ht_thucdon();
                include 'thucdon/hienthitd.php';
                break;
            
        // Thực đơn

        // Món ăn

            case 'monan':
                $htma = all_monan();
                include 'monan/hienthi.php';
                break;
            case 'themmonan':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $name = $_POST['name'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $noidung = $_POST['noidung'];
                    $idtd = $_POST['idtd'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    them_monan($name,$name_img,$gia,$mota,$noidung,$idtd);
                }
                $ht_td = ht_thucdon();
                include 'monan/add.php';
                break;
            case 'xoama':
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_monan($_GET['id']);
                }
                $htma = all_monan();
                include 'monan/hienthi.php';
                break;
            case 'suama':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $ma = sua_monan($_GET['id']);
                }
                $ht_td = ht_thucdon();
                include 'monan/update.php';
                break;
            case 'updatema':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $noidung = $_POST['noidung'];
                    $id_td = $_POST['idtd'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    
                    capnhap_monan($id,$name,$name_img,$gia,$mota,$noidung,$id_td);
                    header('location: index.php?act=monan');
                    die;
                }
                $ht_td = ht_thucdon();
                include 'thucdon/hienthitd.php';
                break;
        // Món ăn
        // Dịch vụ  
            case 'dichvu':
                $htdv = ht_dichvu();
                include 'dichvu/hienthidv.php';
                break;
            case 'themdichvu':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tendv = $_POST['tendv'];
                    $mota = $_POST['mota'];
                    $noidung = $_POST['noidung'];
                    $iddv = $_POST['iddv'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    them_dichvu($tendv,$name_img,$mota,$noidung,$iddv);
                }
                $ht_dmdv = ht_danhmuc_dichvu();
                include 'dichvu/add.php';
                break;
            case 'xoadv':
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_dichvu($_GET['id']);
                }
                $htdv = ht_dichvu();
                include 'dichvu/hienthidv.php';
                break;
            case 'suadv':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $dv = ht_dichvu_one($_GET['id']);
                }
                $ht_dmdv = ht_danhmuc_dichvu();
                include 'dichvu/update.php';
                break;
            case 'updatedv':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $noidung = $_POST['noidung'];
                    $id_td = $_POST['idtd'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    
                    capnhap_dichvu($id,$name,$name_img,$mota,$noidung,$id_dv);
                    header('location: index.php?act=dichvu');
                    die;
                }
                $ht_td = ht_thucdon();
                include 'dichvu/hienthidv.php';
                break;

        // Dịch vụ
        // Thư viện
            case 'thuvien':
                $httv = ht_thuvien();
                include 'thuvien/hienthi.php';
                break;
            case 'themthuvien':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $chitiet = $_POST['chitiet'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    them_thuvien($name,$chitiet,$mota,$name_img);
                }
                include 'thuvien/add.php';
                break;
            case 'xoatv':
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_tv($_GET['id']);
                }
                $httv = ht_thuvien();
                include 'thuvien/hienthi.php';
                break;
            case 'suatv':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $tv = ht_thuvien_one($_GET['id']);
                }
                include 'thuvien/update.php';
                break;
            case 'updatetv':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $chitiet = $_POST['chitiet'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    
                    capnhap_thuvien($id,$name,$name_img,$mota,$chitiet);
                    header('location: index.php?act=thuvien');
                    die;
                }
                $httv = ht_thuvien();
                include 'thuvien/hienthi.php';
                break;
            case 'suaatv':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $tv = ht_thuvien_one($_GET['id']);
                    $atv = ht_chitiet_thuvien($_GET['id']);
                }
                include 'thuvien/anhthuvien.php';
                break;
            case 'themanh':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $tv = ht_thuvien_one($_GET['id']);
                    // $tt= them_anhthuvien($name_img,$id_tv);
                }
                include 'thuvien/themanhthuvien.php';
                break;
            case 'themanhs':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $id_tv = $_POST['id'];
                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);

                    them_anhthuvien($name_img,$id_tv);
                }
                $tv = ht_thuvien_one($id_tv);
                include 'thuvien/themanhthuvien.php';
                break;
        // Thư viện
        // Khách hàng
            case 'taikhoan':
                $listkhachhang = listkhachhang();
                include 'taikhoan/list.php';
                break;
            case 'xoatk':{
                    if(isset($_GET['id']) && $_GET['id']>0){
                        xoa_khachhang($_GET['id']);
                    }
                    $listkhachhang = listkhachhang();
                    include "taikhoan/list.php";
                    break;
                }
            case 'suatk':{
                    if(isset($_GET['id']) && $_GET['id']>0){
                        $tk=sua_taikhoan($_GET['id']);
                    }
                    
                    include "taikhoan/update.php";
                    break;
                }
            case 'updatetk':{
                    if(isset($_POST['capnhap']) && $_POST['capnhap']){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $date = $_POST['date'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $vaitro = $_POST['vaitro'];

                        $name_img = $_FILES['img']['name'];
                        $tmp_img = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                        capnhap_tk($id,$name,$name_img,$sdt,$date,$email,$user,$pass,$vaitro);
                        header('location: index.php?act=taikhoan');
                        die;
                    }
                    $listkhachhang = listkhachhang();
                    include "taikhoan/list.php";
                    break;
                }

        // khách hàng

        // bình luận
            case 'xoabl':{
                if(isset($_GET['id']) && $_GET['id']>0){
                    xoa_binhluan($_GET['id']);
                    header('location: index.php?act=binhluan');
                    die;
                }
                $listbinhluan = listbinhluan();
                include "binhluan/list.php";
                break;
            }
            case 'binhluan':
                if(isset($_POST['ok']) && $_POST['ok']){
                    $idsp = $_POST['idsp'];
                } else {
                    $idsp = 0;
                }
                $listsp = all_monan("",0);
                $listbinhluan = listbinhluan($idsp);
                include "binhluan/list.php";
                break;


        // bình luận

        //Thông tin
            case 'thongtin':
                $tt = thongtin();
                include "thongtin/hienthi.php";
                break;
            case 'suatt':
                $tt = thongtin();
                include "thongtin/update.php";
                break;
            case 'updatett':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $id = $_POST['id'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img,'../../public/img/'.$name_img);
                    capnhap_thongtin($id,$name_img,$sdt,$email,$diachi);
                    header('location: index.php?act=thongtin');
                    die;
                }
                $tt = thongtin();
                include "thongtin/hienthi.php";
                break;
        //Thông tin

        //Giới thiệu
            case 'gioithieu':
                $gt = all_gt();
                $db = all_db();
                include "gioithieu/hienthi.php";
                break;
            case 'suagt':
                $gt = all_gt();
                include "gioithieu/updategt.php";
                break;
            case 'updategt':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $title = $_POST['title'];
                    $noidung1 = $_POST['noidung1'];
                    $noidung2 = $_POST['noidung2'];
                    $id = $_POST['id'];

                    capnhap_gioithieu($id,$title,$noidung1,$noidung2);
                    header('location: index.php?act=gioithieu');
                    die;
                }
                $gt = all_gt();
                $db = all_db();
                include "gioithieu/updategt.php";
                break;

        // Giới thiệu

        // Đầu bếp
            case 'suagt':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $tk = sua_daubep($_GET['id']);
                }
                include "gioithieu/updategt.php";
                break;
            case 'updategt':
                if(isset($_POST['luu']) && $_POST['luu']){
                    $title = $_POST['title'];
                    $noidung1 = $_POST['noidung1'];
                    $noidung2 = $_POST['noidung2'];
                    $id = $_POST['id'];

                    capnhap_gioithieu($id,$title,$noidung1,$noidung2);
                    header('location: index.php?act=gioithieu');
                    die;
                }
                $gt = all_gt();
                $db = all_db();
                include "gioithieu/updategt.php";
                break;

        //Đầu bếp
        // Danh sách đặt bàn
            case 'danhsachdatban':
                $htttdb = ht_thongtindatban();
                include "danhsachdatban/hienthi.php";
                break;
            case 'chitietdb':
                if(isset($_GET['id']) && $_GET['id']>0){
                    $htttdb = ht_thongtindatban_one($_GET['id']);
                }
                include "danhsachdatban/chitiet.php";
                break;
            case 'luuttdb':
                if(isset($_POST['bttrangthai']) && $_POST['bttrangthai']){
                    $id = $_POST['id'];
                    $trangthai = $_POST['trangthai'];
                    
                    luu_trang_thai($id,$trangthai);
                    header('location: index.php?act=danhsachdatban');
                }
        // Danh sách đặt bàn
        //Thống kê
                case 'thongke':
                    $thongke = thongkesp();
                    include "tonghop/thongke.php";
                    break;
                case 'bieudo':
                    $thongke = thongkesp();
                    include "tonghop/bieudo.php";
                    break;
        //Thống kê
            default:
                // include "lỗi";
                break;
        }
    }
?>

<?php  include_once "footer.php"?>