<?php
    extract($_SESSION['user']);
?>
<section class=" block">
    <div class="container bg-white flex g25">
        <?php include 'chucnangtk.php' ?>
        <div class="w-100">
            <div class="pdlr4">
                <h3 class="fs2-5">Hồ sơ của tôi</h3>
                <div>Quản lý thông tin hồ sơ bảo mật tài khoản</div>
                <hr>
            </div>
            <form action="index.php?act=luuthongtin" method="post" enctype="multipart/form-data" class="form12">
                <div class=" flex pdlr7 g25">
                    <div class="w-100 flex alit-end flex-cl">
                        <div class="flex alit-center al g30 mt2">
                            <div class="">Username</div>
                            <div class="ttttttt pdlr1 pdtb1"><?=$user?></div>
                        </div>
                        <div class="flex alit-center g30 mt2">

                            <div class="">Họ và tên</div>
                            <input class="tttttt pdlr1 pdtb1  fs2" name="name" type="text" value="<?=$name?>">
                        </div>
                        <div class="flex alit-center g30 mt2">
                            <div class="">Email</div>
                            <input class="tttttt pdlr1 pdtb1  fs2" name="email" type="text" value="<?=$email?>">
                        </div>
                        <div class="flex alit-center g30 mt2">
                            <div class="">Số điện thoại</div>
                            <input class="tttttt pdlr1 pdtb1  fs2" name="phone" type="text" value="<?=$phone?>">
                        </div>
                        <div class="flex alit-center g30 mt2">
                            <div class="">Ngày sinh</div>
                            <input class="tttttt pdlr1 pdtb1  fs2" name="namsinh" type="date" value="<?=$date?>">
                        </div>
                    </div>
                    <div class="mt4">
                        <div class="border-tron block w-60"><img class=" border-tron block w-100"
                                src="public/img/<?=$img?>" alt=""></div>
                        <input class="mt2" name="img" type="file" value="Chọn ảnh">
                    </div>
                </div>
                <input class="" name="id" type="hidden" value="<?=$id?>">
                <input class="m-auto block pdlr3 pdtb1 gbee4d2d fs2 mt4" name="luu" type="submit" value="Lưu">
            </form>
        </div>
    </div>
</section>