<section class="grid1 grid-cl2 container g30">
    <?php foreach($allma as $ma) {
        extract($ma);
        $linkma = "index.php?act=chitietma&id=".$id;
        echo '<div class="flex g25 monan">
        <div class="border-tron block vf-hd wh"><img class="m-auto block w-100 border-tron h-100 img" src="public/img/'.$img.'" alt="">
        </div>
        <div class="w-55">
            <a href="'.$linkma.'" class="ww fs3 cl45 fw6 mb1 d-none">'.$name.'</a>
            <div class="mb1 fs2 clff0000">Giá: '.$gia.' đ</div>
            <div class="fs16">'.$mota.'</div>
        </div>
    </div>';
    }

    ?>
        
    </section>