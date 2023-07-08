<div class="w_full">
    <div class="flex alit-center justify-end g15">
        <div class="w-20 border-tron block "><img class="w-100 border-tron block " src="public/img/<?=$img?>" alt="">
        </div>
        <div>
            <div class="fw6"><?=$user?></div>
            <div><a class="tdn" href="">Sửa hồ sơ</a></div>
        </div>
    </div>
    <div class="flex alit-end flex-cl mt2">
        <a class="tdn" href="index.php?act=thongtin">Tài khoản của tôi</a>
        <a class="tdn" href="index.php?act=thongtindatban">Đặt bàn</a>
        <?php if($vaitro == "Quản trị"){?>
        <a class="tdn" href="views/admin/index.php">Quản trị viên</a>
        <?php } ?>
        <a class="tdn" href="index.php?act=doimatkhau">Đổi mật khẩu</a>
    </div>
</div>