<?php 
    foreach ($gt as $gt) {
        extract($gt);
    }
?>

<form class="tk" action="index.php?act=updategt" method="post" enctype="multipart/form-data">
    <h1>Sửa thư viện</h1>
    <div>
        <p>Nội dung chính</p>
        <textarea name="title" id="" cols="150" rows="5"><?=$title?></textarea>
    </div>
    <div>
        <p>Nội dung phụ 1</p>
        <textarea name="noidung1" id="" cols="150" rows="5"><?=$noidung1?></textarea>
    </div>
    <div>
        <p>Nội dung phụ 2</p>
        <textarea name="noidung2" id="" cols="150" rows="5"><?=$noidung2?></textarea>
    </div>
    <div class="chon">
        <input class="id" type="hidden" name="id" value="<?=$id?>">
        <input class="xoa-ds" name="luu" type="submit" value="Lưu">
        <input class="sua-ds" type="reset" value="Quay lại">
        <a href="index.php?act=gioithieu"><input class="sua-ds" type="button" value="Danh sách"></a>
    </div>
</form>

</div>