<?php 
    extract($onedv);
?>
<section>
    <div class="container1">
        <div class="row">

            <div class="img-banner">
                <img src="public/img/<?=$img?>" alt="" width="100%">
            </div>


            <div class="cols">
                <h3><?=$name?></h3>
                <span class="ctn">Giá: Liên hệ</span>

                <p><?=$mota?></p>
                <div class="phone">
                    <a href="tel:19009477"> LIÊN HỆ TƯ VẤN</a>
                </div>
                <div class="mn">
                    <span class="icon"><a href=""> <i class="fas fa-tags"></i></a></span>
                    <a href="">Dịch vụ</a>
                    <a href="">BBQ</a>
                </div>
                <hr>
                <div class="share">
                    <div class="icons-all">
                        <div class="icons-fb">
                            <a href=""><i class="fab fa-facebook"><span> Chia sẻ</span> </i></a>
                        </div>

                        <div class="icons-twt">
                            <a href=""><i class="fab fa-twitter"><span> Tweet</span></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="title">
            <h2>MÔ TẢ CHI TIẾT</h2>

            <div class="border2">
                <?=$chitiet?>
            </div>
            <div class="service">
                <h3>DỊCH VỤ LIÊN QUAN</h3>
            </div>
        </div>
    </div>
</section>
<section class="slider">
    <div class="bug1">
        <!-- product box -->
        <ul id="autoWidth" class="cs-hidden">
            <!-- 1---------------------------------------- -->
            <?php foreach($dv_cungloai as $dv){ 
                extract($dv);
                $link = "index.php?act=chitietdv&id=".$id;
                ?>
            <li class="item-a">
                <div class="product-box">
                    <a href="<?=$link?>">
                        <div class="img1" style=" background-image: url(public/img/<?=$img?>);">
                            <div class="content-img">
                                <h4><?=$name?></h4>
                                <hr>
                                <p><?=$mota?>
                                </p>
                                <button>XEM NGAY</button>
                            </div>

                        </div>
                    </a>
                </div>
            </li>
                <?php } ?>

        </ul>

    </div>
</section>
