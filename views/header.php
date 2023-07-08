<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunday Restaurant</title>
    <link rel="stylesheet" href="public/css/clients/style.css">
    <link rel="stylesheet" href="public/css/clients/dichvu.css">
    <link rel="stylesheet" href="public/css/clients/lienhe.css">
    <link rel="stylesheet" href="public/css/clients/thuvien.css">
    <link rel="stylesheet" href="public/css/clients/dangnhap.css">
    <link rel="stylesheet" href="public/css/clients/taikhoan.css">
    <link rel="stylesheet" href="public/css/clients/slider.css">
    <link rel="stylesheet" href="public/css/clients/datban.css">
    <link rel="stylesheet" href="public/css/clients/quanlidatban.css">
    <link rel="stylesheet" href="public/css/clients/formbinhluan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
        integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
</head>

<body class="position-relative">
    <div>
        <header>
            <div class="container flex justify-between pdtb1">
                <div class="flex g25">
                    <?php foreach($thongtin as $tt){
                    extract($tt);
                } ?>
                    <div><i class="fas fa-map-marker-alt"></i><?=$diachi?></div>
                    <div><i class="fas fa-phone-alt"></i> <?=$sdt?></div>
                </div>
                <div class="flex g25">
                    <i class="fab fa-facebook-f">
                    </i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
            <div class="header-top container fs2">
                <div>
                    <img style="width: 150px;" src="public/img/<?=$logo?>" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class=""><a href="?act=trangchu">Trang chủ</a></li>
                        <li class=""><a href="?act=gioithieu">Giới thiệu</a></li>
                        <li class="">
                            <a href="?act=thucdon">Thực Đơn <i class="fas fa-angle-down" aria-hidden="true"></i></a>
                            <div class="taikhoan12">
                                <ul class="menu">
                                    <?php 
                                foreach($thucdon as $td){
                                    extract($td);
                                    $l = '?act=thucdon&id='.$id;
                                ?>
                                    <li><a href="<?=$l?>"><?=$name?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li class=""><a href="?act=dichvu">Dịch vụ</a></li>
                        <li class=""><a href="?act=thuvien">Thư viện</a></li>
                        <li class=""><a href="?act=lienhe">Liên hệ</a></li>
                        <li class="">
                            <a href="">Tài khoản<i class="fas fa-angle-down" aria-hidden="true"></i></a>
                            <div class="taikhoan12">
                                <?php 
                            if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                                <ul class="menu">
                                    <li><a href="?act=thongtin">Tài khoản của tôi</a></li>
                                    <li><a href="?act=dangxuat">Đăng xuất</a></li>
                                </ul>
                                <?php }else { ?>
                                <ul class="menu">
                                    <li><a href="?act=dangnhap">Đăng nhập</a></li>
                                    <li><a href="?act=dangky">Đăng ký</a></li>
                                </ul>
                                <?php } ?>
                            </div>
                        </li>
                        <li><a href=""><i class="fas fa-search"></i></a>
                            <div class="taikhoan12">
                                <ul class="menu">
                                    <li>
                                        <form action="index.php?act=thucdon" method="post">
                                            <input type="text" name="kyw" class="" placeholder="Nhập từ khóa.....">
                                            <input type="submit" name="timkiem" value="Tìm kiếm">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="datban">
                    <button id="datban1">Đặt bàn</button>
                </div>
            </div>
            <div class="header-bottom">
                <main class="main-content">
                    <section class="slideshow">
                        <div class="slideshow-inner">
                            <div class="slides">
                                <div class="slide is-active ">
                                    <div class="slide-content">
                                        <div class="caption">
                                            <div class="title">ARTISAN RESTAURANT</div>
                                            <div class="text">
                                                <p>Không gian trang trọng mang phong cách quý tốc châu âu</p>
                                            </div>
                                            <div id="hienthi1" class="btn">
                                                <span  class="btn-inner">Đặt bàn ngay</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-container">
                                        <img src="public/img/baner2.jpg" alt="" class="image" />
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="slide-content">
                                        <div class="caption">
                                            <div class="title">THỰC ĐƠN ARTISAN RESTAURANT</div>
                                            <div class="text">
                                                <p>Đa dạng ẩm thực từ khắp thế giới bỏi các đầu bếp nổi tiếng</p>
                                            </div>
                                            <div id="hienthi2" class="btn">
                                                <span  class="btn-inner">Đặt bàn ngay</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-container">
                                        <img src="public/img/baner1.jpg" alt="" class="image" />
                                    </div>
                                </div>
                                <div class="slide is-active ">
                                    <div class="slide-content">
                                        <div class="caption">
                                            <div class="title">ARTISAN RESTAURANT</div>
                                            <div class="text">
                                                <p>Không gian trang trọng mang phong cách quý tốc châu âu</p>
                                            </div>
                                            <div id="hienthi3" class="btn">
                                                <span  class="btn-inner">Đặt bàn ngay</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-container">
                                        <img src="public/img/baner2.jpg " alt="" class="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="arrows">
                            <div class="arrow prev">
                                <span class="svg svg-arrow-left">
                                    <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px"
                                        height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26"
                                        xml:space="preserve">
                                        <path
                                            d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
                                    </svg>
                                    <span class="alt sr-only"></span>
                                </span>
                            </div>
                            <div class="arrow next">
                                <span class="svg svg-arrow-right">
                                    <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px"
                                        height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26"
                                        xml:space="preserve">
                                        <path
                                            d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
                                    </svg>
                                    <span class="alt sr-only"></span>
                                </span>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </header>