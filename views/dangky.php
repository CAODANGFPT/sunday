<div class="container2">
    <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" class="form12">
        <h3>ĐĂNG KÝ</h3>
        <input class="input2" name="name" type="text" placeholder="Họ và tên" require>
        <input class="input2" name="phone" type="text" placeholder="Số điện thoại" require>
        <input class="input2" name="email" type="email" placeholder="Email" require>
        <input class="input2" name="namsinh" type="date" placeholder="Năm sinh" require>
        <input class="input2" name="user" type="text" placeholder="Username" require>
        <input class="input2" name="pass" type="password" placeholder="Password" require>
        <input class="input2" name="" type="password" placeholder="Nhập Lại Password" require>
        <input class="buttondn" name="dangky" type="submit" value="Đăng ký">
    </form>
    <?php
            if(isset($thongbao)&&(($thongbao!=""))){
                echo $thongbao;
            }
        ?>
</div>