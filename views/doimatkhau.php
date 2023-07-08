<?php
    extract($_SESSION['user']);
?>
<section class=" block">
    <div class="container bg-white flex g25">
    <?php include 'chucnangtk.php' ?>
        <div style="width: 300%;" class="w-100">
            <div class="pdlr4">
                <h3 class="fs2-5">Đổi mật khẩu</h3>
                <div>Quản lý thông tin hồ sơ bảo mật tài khoản</div>
                <hr>
            </div>
            <form action="index.php?act=doimatkhau" method="post" enctype="multipart/form-data" class="form12">
                <input class="input2" name="passc" type="password" placeholder="Mật khẩu cũ">
                <input class="input2" name="passm" type="password" placeholder="Mật khẩu mới">
                <input class="input2" name="pass" type="hidden" value="<?=$pass?>">
                <input class="input2" name="id" type="hidden" value="<?=$id?>">
                <input class="buttondn" name="luu" type="submit" value="lưu">
                <?php
            if(isset($thongbao)&&(($thongbao!=""))){
                echo $thongbao;
            }
        ?>
            </form>
        </div>
    </div>
</section>