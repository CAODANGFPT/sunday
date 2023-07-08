<?php 
    extract($onetv);
?>
<section class="section-tv1">
    <div class="container1">
        <div class="zues">
            <h3><?=$name?></h3>
            <p><?=$chitiet?></p>
        </div>
        <div class="grid">
            <?php 
                foreach($cttv as $tv){
                    extract($tv);
                    echo '<a href="">
                    <div class="img2">
                        <div class="bgr-image" style="background-image:url(public/img/'.$img.') ;">
    
                        </div>
                    </div>
                </a>';
                }
            ?>
            
        </div>
        <!-- end grid -->
        <div class="bottom">
            <span class="icons"><a href=""> <i class="fas fa-tags"></i></a></span>
            <a href=""> Các Món Ăn Tươi Sống</a>
        </div>
        <!-- share -->
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
        <!-- <div class="album">
            <h3>ALBUM LIÊN QUAN</h3>
        </div> -->



    </div>
</section>

<!-- <section class="slider">
    <div class="new"> -->

        <!-- product box -->


        <!-- <ul id="autoWidth" class="cs-hidden"> -->
            <!-- 1---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/suon-bo.jpg) ;">
                                <div class="ct-img1">
                                    <a href="chitietthuvien.html"><span class="icon"><i class="far fa-image"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href="chitietthuvien.html"> Món ngon tươi sống chế biến sẵn</a></h3>
                            <p>
                                Mực nướng ngũ vị, lẩu hải sản Samba, cua lột chiên giòn hay ghẹ hấp bia, ...
                            </p>
                            <a href="chitietthuvien.html" id="btn">XEM THÊM</a>
                        </div>

                    </div>
                </div>
            </li> -->
            <!--  -->
            <!-- 2---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/ab1-2.jpg) ;">
                                <div class="ct-img1">
                                    <a href=""><span class="icon"><i class="far fa-image"></i></span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href=""> Thực đơn bữa cơm gia đình tết tại nhà hàng</a></h3>
                            <p>
                                Làm sao để vừa đầy đủ dinh dưỡng, vừa ngon miệng lại phù hợp với tất cả các thành viên
                                trong gia đình

                            </p>
                            <a href="" id="btn">XEM THÊM</a>
                        </div>

                    </div>
                </div>
            </li> -->
            <!--  -->
            <!-- 3---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/ab2-9.jpg) ;">
                                <div class="ct-img1">
                                    <a href=""><span class="icon"><i class="far fa-image"></i></span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href=""> Món ngon đón Tết Tân Sửu</a></h3>
                            <p>
                                Tết là dịp đoàn tụ gia đình nên mâm cỗ ngày Tết cũng thường được chuẩn bị vô cùng
                                thịnh soạn

                            </p>
                            <a href="" id="btn">XEM THÊM</a>
                        </div>

                    </div>
                </div>
            </li> -->
            <!--  -->
            <!-- 4---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/ab3-9.jpg) ;">
                                <div class="ct-img1">
                                    <a href=""><span class="icon"><i class="far fa-image"></i></span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href=""> Món ngon tươi sống chế biến sẵn</a></h3>
                            <p>
                                Mực nướng ngũ vị, lẩu hải sản Samba, cua lột chiên giòn hay ghẹ hấp bia, ...
                            </p>
                            <a href="" id="btn">XEM THÊM</a>
                        </div>

                    </div>
            </li> -->
            <!--  -->
            <!-- 5---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/ab1-1.jpg) ;">
                                <div class="ct-img1">
                                    <a href=""><span class="icon"><i class="far fa-image"></i></span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href=""> Thực đơn bữa cơm gia đình tết tại nhà hàng</a></h3>
                            <p>
                                Làm sao để vừa đầy đủ dinh dưỡng, vừa ngon miệng lại phù hợp với tất cả các thành viên
                                trong gia đình

                            </p>
                            <a href="" id="btn">XEM THÊM</a>
                        </div>

                    </div>
            </li> -->
            <!--  -->
            <!-- 6---------------------------------------- -->
            <!-- <li class="item-a">
                <div class="product-box">
                    <div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(images/ab2-8.jpg) ;">
                                <div class="ct-img1">
                                    <a href=""><span class="icon"><i class="far fa-image"></i></span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href=""> Món ngon đón Tết Tân Sửu</a></h3>
                            <p>
                                Tết là dịp đoàn tụ gia đình nên mâm cỗ ngày Tết cũng thường được chuẩn bị vô cùng
                                thịnh soạn

                            </p>
                            <a href="" id="btn">XEM THÊM</a>
                        </div>


                    </div>
            </li> -->
            <!--  -->

<!-- 
        </ul>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
    integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
});
</script> -->