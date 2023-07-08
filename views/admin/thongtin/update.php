<?php 
    foreach ($tt as $tt) {
        extract($tt);
    }
?>

<form class="tk" action="index.php?act=updatett" method="post" enctype="multipart/form-data">
    <h1>Sửa thư viện</h1>
    <div>
        <p>Ảnh đại diện</p>
        <input type="file" name = "img">
        <img src = '../../public/img/<?=$logo?>' height='80' >
    </div>
    <div>
        <p>Số điện thoại</p>
        <input class="id" type="text" name="sdt" value="<?=$sdt?>">
    </div>
    <div>
        <p>Địa chỉ</p>
        <input class="id" type="text" name="diachi" value="<?=$diachi?>">
    </div>
    <div>
        <p>Email</p>
        <input class="id" type="text" name="email" value="<?=$email?>">
    </div>

    <div class="chon">
        <input class="id" type="hidden" name="id" value="<?=$id?>">
        <input class="xoa-ds" name="luu" type="submit" value="Lưu">
        <input class="sua-ds" type="reset" value="Quay lại">
        <a href="index.php?act=thongtin"><input class="sua-ds" type="button" value="Danh sách"></a>
    </div>
</form>

</div>