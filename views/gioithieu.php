<section class="container">
<article class="gt_text">
    <?php 
        foreach($allgt as $gt){
            extract($gt);
            echo '<h1>'.$title.'</h1>
            <div class="gt_text fs16">
            <p class = " cl45">'.$noidung1.'</p>
            <p class = " cl45">'.$noidung2.'</p>
        </div>';

        }
    ?>

    </article>
</section>
<section class="bodygt">
    <article class="banner container">
        <p class="cld0 fs2">Về chúng tôi</p>
        <h1 class="fs5">CHUYÊN GIA</h1>
        <p>TRONG SUỐT HƠN 20 NĂM HÌNH THÀNH VÀ PHÁT TRIỂN, TỪ NIỀM ĐAM MÊ ẨM THỰC DÂN TỘC, <br>GRAND
            RESTAURANT KHÔNG NGỪNG MỞ RỘNG VÀ PHÁT TRIỂN VỚI MONG<br> MUỐN MONG MUỐN MANG ĐẾN KHÁCH HÀNG NHỮNG MÓN ĂN
            NỒNG NÀN HƯƠNG VỊ<br> TRUYỀN THỐNG NHƯNG CŨNG RẤT RIÊNG.</p>
        <div class="datban">
            <button>Đặt bàn</button>
        </div>
    </article>
</section>
<div class="banner-bottom container">
    <?php 
            foreach($alldb as $db){
                extract($db);
                echo '<div>
                <img src="public/img/'.$img.'" alt="">
                <p class = "mtb1 fs2 cl4545">'.$name.'</p>
                <p class= "fs16 cl-gray">'.$chucvu.'</p>
            </div>';
            }
        ?>
</div>