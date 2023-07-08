<section>
    <article class="t-v">
        <div class="container1">
            <div class="row3">
                <?php 
                    foreach($alltv as $tv){
                        extract($tv);
                        $linktv = "index.php?act=chitiettv&id=".$id;
                        echo '<div class="content-tv">
                        <div class="over">
                            <div class="img1" style="background-image: url(public/img/'.$img.') ;">
                                <div class="ct-img1">
                                    <a href="'.$linktv.'"><span class="icon"><i class="far fa-image"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-section">
                            <h3> <a href="'.$linktv.'">'.$name.'</a></h3>
                            <p>
                            '.$mota.'
                            </p>
                            <a href="'.$linktv.'" id="btn">XEM THÊM</a>
                        </div>
    
                    </div>';
                    }
                ?>
                
            </div>

            <!--end hàng1 -->

        </div>

    </article>
</section>