<?php 
        if(is_array($tv)){
        extract($tv);
        $hinhpath ="../../public/img/".$img;
        if(is_file($hinhpath)){
            $hinh= "<img src = '".$hinhpath."' height='80' >";
        } else{
            $hinh = "no photo";
        }
    }
    ?>
<form class="tk" action="index.php?act=updatetv" method="post" enctype="multipart/form-data">
    <h1>Sửa thư viện</h1>
    <div>
        <p>Mã</p>
        <input class="id" type="text" name="id" value="<?=$id?>" disabled>
    </div>
    <div>
        <p>Tên Album</p>
        <textarea name="name" id="" cols="150" rows="5"><?=$name?></textarea>
    </div>
    <div>
        <p>Mô tả</p>
        <textarea name="mota" id="" cols="150" rows="5"><?=$mota?></textarea>
    </div>
    <div>
        <p>Chi tiết</p>
        <textarea name="chitiet" id="" cols="150" rows="5"><?=$chitiet?></textarea>
    </div>
    <div>
        <p>Ảnh đại diện</p>
        <input type="file" name = "img">
        <?=$hinh?>
    </div>
    <div class="chon">
        <input class="id" type="hidden" name="id" value="<?=$id?>">
        <input class="xoa-ds" name="luu" type="submit" value="Lưu">
        <input class="sua-ds" type="reset" value="Quay lại">
        <a href="index.php?act=thuvien"><input class="sua-ds" type="button" value="Danh sách"></a>
    </div>
</form>
</div>