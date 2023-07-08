
<section class="option">
    <div class="container1">
        <div class="row">

            <div class="nav-left">
                <h3>TÌM KIẾM</h3>

                <div class="ba-search">
                    <input type="search" placeholder="Nhập từ khóa...">
                    <div class="search">
                        <a href="#"> <i class="fas fa-search"></i></a>
                    </div>
                </div>
                <div class="danh-muc">
                    <h3>Danh Mục</h3>
                    <div class="menudv">
                        <a href=""> Đồ Tươi Sống</a>
                        <a href=""> Món Ăn Chơi</a>
                        <a href=""> Món Đặc Sản</a>
                        <a href=""> Món Lẩu</a>
                        <a href="">Thức Uống</a>

                    </div>
                    <div class="menu-tags">
                        <h3>Tags</h3>

                        <a href=""> nhà hàng</a>
                        <a href=""> quán ăn</a>
                        <a href=""> buôn bán thực phẩm</a>
                        <a href="">buôn bán đồ uống</a>
                        <a href=""> khách sạn</a>
                        <a href=""> ẩm thực</a>
                        <a href=""> dịch vụ nhà hàng</a>
                        <a href="">dịch vụ khách sạn </a>
                        <a href=""> web nhà hàng</a>
                        <a href="">demo nhà hàng </a>
                        <a href=""> giao diện website nhà hàng</a>
                        <a href="">website quán ăn </a>
                        <a href="">giao diện web quán ăn </a>
                        <a href="">giao diện web đẹp </a>
                        <a href="">thiết kế website </a>
                        <a href="">web30s</a>
                    </div>
                </div>
            </div>
            <div class="hehe">
                <div class="content">
                    <p>Thực khách có thể tự mình khám phá nét duyên của ẩm thực Việt Nam qua những món ăn truyền
                        thống cũng như những món được biến tấu sáng tạo từ những nguyên liệu vốn đơn giản và thuần
                        Việt tại Grand Restaurant. </p>
                </div>
                <div class="">
                    <!-- hàng 1-->
                    <div class="cols-1 row2">
                        <?php 
                            foreach($alldv as $dv){
                                extract($dv);
                                $link = "index.php?act=chitietdv&id=".$id;
                                echo '<a href="'.$link.'">
                                <div class="img1" style=" background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(public/img/'.$img.');">
                                    <div class="content-img">
                                        <h4>'.$name.'</h4>
                                        <hr>
                                        <p>
                                            '.$mota.'
                                        </p>
                                        <button>XEM NGAY</button>
                                    </div>
    
                                </div>
                            </a>';
                            }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>