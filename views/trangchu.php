<!-- conten -->
<section class="">
    <div class="flex ct-top container">
        <div class="ctt-left">
            <div class="ctt-left1">Về chúng tôi</div>
            <div class="ctt-left2">Nhà hàng</div>
            <div class="ctt-left3">
                <div>Nhân cơ hội này, chúng tôi muốn chào đoán bạn tại Sunday Retaurant của chúng tôi.</div>
                <div>Chúng tôi mang đến một bàu không khí thân thiện, ấm áp để chia sẻ bữa ăn với gia đình và bạn bề
                    vào bất kỳ thời điểm nào trong ngày hoặc buổi tối</div>
            </div>
            <div class="datban hienthi">
                <button>Đặt bàn ngay</button>
            </div>
            <div class="grid1 grid-cl3 g25">
                <?php
                        foreach($ma_top3 as $t3){
                            $linkma = "index.php?act=chitietma&id=".$t3['id'];
                            echo '<a href="'.$linkma.'" class="monan d-none">
                            <div class="hinh">
                                <img src="public/img/'.$t3['img'].'" alt="">
                            </div>
                            <div class="name">
                            '.$t3['name'].'
                            </div>
                            <div class="gia flex">
                                <p>'.$t3['gia'].' đ </p>
    
                            </div>
                        </a>';
                        }
                    ?>
            </div>
        </div>
        <div class="ctt-right">
            <img src="public/img/vidoe.jfif" alt="">
        </div>
    </div>
    <div class="tuvan text-center">
        <div class="container ">YÊU CẦU TƯ VẤN!</div>
        <form class="container " action="index.php?act=tuvan" method="post" enctype="multipart/form-data">
            <input cl type="text" placeholder="Họ và tên" name="name">
            <input cl type="text" placeholder="Số điện thoại" autocomplete="off" name="phone">
            <input type="submit" value="GỬI" class="guitv" name="btn_gui">
        </form>
    </div>
    <div class="container grid1 grid-cl2 ct-td gap-2">
        <div class="ct-td-l">
            <div class="ct-td-l1">
                <div class="clCFA670">Discover</div>
                <div class="mtb2 fs5">Thực Đơn</div>
                <div>
                    Grand Restaurant từ lâu là điểm đến lý tưởng của những người yêu thích ẩm thực truyền thống.
                </div>
                <div class="mt2">
                    Thực khách có thể tự mình khám phá nét duyên của ẩm thực Việt Nam qua những món ăn truyền thống
                    cũng như những món được biến tấu năng động từ những nguyên liệu vốn đơn giản, thuần Việt.
                </div>
            </div>
        </div>
        <?php foreach($thucdon as $td){
            $ma = thucdon_trangchu($td['id']);
            ?>
            
        <div class="border mt2">
            <div class="text-center bg-black cl-while fs2-5 pdtb1"><?php echo $td['name'];?></div>
            <?php foreach($ma as $ma){ ?>
            <div class="mt2 pdlr3">
                <div class="flex  justify-between bdb mb2">
                    <div class="w-60">
                        <a class="ww fs2 cl45 fw6" href=""><?php echo $ma['name'];?></a>
                        <p class="ww cl-gray mt1"><?php echo $ma['mota'];?>
                        </p>
                    </div>
                    <div class="w-20 fs2 clCFA670">
                    <?php echo $ma['gia'];?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    <div class="container">
        <div class="text-center mt4">
            Giải pháp tốt nhất
        </div>
        <div class="text-center fs5 mb2">Dịch vụ của chúng tôi</div>
        <div class="grid1 grid-cl4 g25 mt-1">
            <div class="">
                <div class=""><img class="w-20 m-auto block" src="public/img/db.png" alt=""></div>
                <div class="ww mt2">Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Grand
                    Restaurant luôn được đổi mới, đa dạng</div>
            </div>
            <div class="flex flex-cl justify-centen">
                <div><img class="w-20 m-auto block" src="public/img/ly.png" alt=""></div>
                <div class="ww mt2">Cùng với đội ngũ nhân viên mang đầy sức trẻ và nhiệt huyết, chúng tôi luôn mong muốn
                    đem lại cho khách hàng</div>
            </div>
            <div class="">
                <div><img class="w-20 m-auto block" src="public/img/mp.png" alt=""></div>
                <div class="ww mt2">Lựa chọn cho mình một hướng đi mới để tạo nên sự khác biệt, giúp khách hàng tiết
                    kiệm thời gian, đem đến sự tiện lợi</div>
            </div>
            <div class="">
                <div><img class="w-20 m-auto block" src="public/img/gh.png" alt=""></div>
                <div class="ww mt2">Để tăng cường sự tin tưởng và yên tâm với khách hàng, cam kết luôn giao hàng đúng
                    giờ và chi phí giao hàng rẻ nhất</div>
            </div>
        </div>
    </div>
    <div class="bgprimary mt5 mb5">
        <div class="container grid1 grid-cl4 text-center cl-while fs3-5 pdtb5">
            <div class="">
                <div>23</div>
                <div>Năm kinh nghiệm</div>
            </div>
            <div class="">
                <div>100</div>
                <div>Menu đa dạng</div>
            </div>
            <div class="">
                <div>1000</div>
                <div>Nhân viên</div>
            </div>
            <div class="">
                <div>2410</div>
                <div>Khách hàng hài lòng</div>
            </div>
        </div>
    </div>
    <div class="container bgp1  flex alit-center justify-between ">
        <div class="flex alit-center pdlr3 pdtb5 g25 ">
            <div class="mw"><img class="w-100" src="public/img/tich.png" alt=""></div>
            <div class="cl-while">
                <div>
                    LIÊN LẠC VỚI CHÚNG TÔI NGAY !
                </div>
                <div>Để có các thông tin mới nhất</div>
            </div>
        </div>
        <div class="pdlr3">
            <button class="gui">Gọi ngay</button>
            <button class="gui hienthi">Đặt bàn ngày</button>
        </div>
    </div>
</section>
<!-- conten -->