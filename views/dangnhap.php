<div class="container2">
    <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data" class="form12">
        <h3>ĐĂNG NHẬP</h3>
        <input class="input2" name="user" type="text" placeholder="Username">
        <input class="input2" name="pass" type="password" placeholder="Password">
        <input class="buttondn" name="dangnhap" type="submit" value="Đăng nhập">
        <p>Bạn chưa có tài khoản? Đăng ký <a href="index.php?act=dangky">Tại đây</a></p>
        <?php
            if(isset($thongbao)&&(($thongbao!=""))){
                echo $thongbao;
            }
        ?>
    </form>
</div>