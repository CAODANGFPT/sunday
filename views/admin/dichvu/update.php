
<form class="tk" action="index.php?act=updatedv" method="post" enctype="multipart/form-data">
<h1>Sửa món ăn</h1>
    <?php 
        if(is_array($dv)){
        extract($dv);
        $iddv = $id;
        $hinhpath ="../../public/img/".$img;
        if(is_file($hinhpath)){
            $hinh= "<img src = '".$hinhpath."' height='80' ";
        } else{
            $hinh = "no photo";
        }
    }
    ?>
        
        <div>
            <p>Mã</p>
            <input type="text" name="id" value="<?=$id?>" disabled>
        </div>
        <div>
            <p>Tên </p>
            <input type="text" name="name" value="<?=$name?>">
        </div>
        <div>
            <p>Hình</p>
            <input type="file" name="img">
            <?=$hinh?>
        </div>
        <div>
            <p>Mô tả</p>
            <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
        </div>
        <div>
            <p>Chi tiết</p>
            <textarea name="noidung" id="noidung" cols="100" rows="100"><?=$chitiet?></textarea>
            <script>
            var editor = CKEDITOR.replace('noidung', {
                filebrowserBrowseUrl: '../../public/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: '../../public/ckfinder/ckfinder.html?type=Images',
                filebrowserUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                height: 500,
            })
            CKFinder.setupCKEditor(editor);
            </script>
        </div>
        <div>
            <p>Danh mục</p>
            <select name="idtd" id="">
                <?php 
                        foreach($ht_dmdv as $dmdv){
                            if($id_dv == $dmdv['id'])
                                {$s = "selected";}
                                    else{ $s= "";}
                            echo '<option value="'.$dmdv['id'].'" '.$s.'>'.$dmdv['name'].'</option>';
                        } 
                        ?>
                <?php  ?>
            </select>
        </div>
        <div class="chon">
            <input type="hidden" name="id"  value="<?=$iddv?>">
            <input class="st-ip" name="luu" type="submit" value="Lưu">
            <input class="st-ip" type="reset" value="Nhập lại">
            <a href="index.php?act=dichvu"><input class="st-ip" type="button" value="Danh sách"></a>
        </div>
        <?php ?>
    </form>
</div>