<?php 
    if(is_array($tv)){
        extract($tv);
    }
?>
<form class="tk" action="index.php?act=themanhs" method="post" enctype="multipart/form-data">
    <h1>Thêm Ảnh Album: <?=$name?></h1>
    <div>
        <p>Ảnh</p>
        <input class="ip" type="file" name="img">
    </div>
    <div class="chon">
        <input class="st-ip" name="id" type="hidden" value="<?=$id?>">
        <input class="xoa-ds" name="themmoi" type="submit" value="Thêm mới">
        <a href="index.php?act=thuvien"><input class="sua-album" type="button" value="Danh sách"></a>
    </div>
</form>