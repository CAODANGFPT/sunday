<?php 
    extract($onema);
?>
<section>
    <div class="container1">
        <div class="row">

            <div class="img-banner">
                <img src="public/img/<?=$img?>" alt="" width="100%">
            </div>


            <div class="cols">
                <h3><?=$name?></h3>
                <span class="ctn">Giá: <?=$gia?> đ</span>
                <p><?=$mota?></p>

                <div class="phone hienthi">
                    <div>Đặt bàn</div>
                </div>
                <?php 
                    if(isset($_SESSION['user'])){
                ?>
                <div class="phone">
                    <form action="index.php?act=themmonan" method="post" enctype="multipart/form-data">
                        <div>
                            <div>Số lượng</div>
                            <input type="number" name="soluong" min="1" value="1">
                        </div>
                        <div class="phone hienthi">
                            <div>Vào ngày</div>
                        </div>
                        <select name="iddb" id="">
                            <?php foreach($dbhtttt as $ttbb){ ?>
                            <option value="<?php echo $ttbb['id'] ?>"><?php echo $ttbb['ngay'] ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="hidden" name="name" value="<?=$name?>">
                        <input type="hidden" name="img" value="<?=$img?>">
                        <input type="hidden" name="gia" value="<?=$gia?>">
                        <input class="" type="submit" name="add" value="Thêm món ăn">
                    </form>
                </div>


                <?php } ?>
                <div class="mn">
                    <span class="icon"><a href=""> <i class="fas fa-tags"></i></a></span>
                    <a href="">Sunday</a>
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
            <div style="margin-top: 30px;" class="binhluan" id="bl">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                $(document).ready(function() {
                    $("#bl").load("views/binhluan/binhluanform.php", {
                        mamonan: <?=$id?>
                    });

                });
                </script>
            </div>
            <div class="service">
                <h3>Sản phẩm liên quan</h3>
            </div>
            <section class="grid1 grid-cl3 container g30 text-center">
                <?php foreach($cungloai as $cl){
                    extract($cl);
                    $linkma = "index.php?act=chitietma&id=".$id;
                ?>
                <div class="flex g25 monan flex-cl">
                    <div class=" block vf-hd wh"><img class="m-auto block w-100 h-100 img" src="public/img/<?=$img?>"
                            alt="">
                    </div>
                    <div class="w-55">
                        <a href="<?=$linkma?>" class="ww fs3 cl45 fw6 mb1 d-none"><?=$name?></a>
                        <div class="mb1 fs2 clff0000">Giá: <?=$gia?> đ</div>
                    </div>
                </div>
                <?php } ?>
            </section>
        </div>
    </div>
</section>