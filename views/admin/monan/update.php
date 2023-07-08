<form class="dm tk" action="index.php?act=updatema" method="post" enctype="multipart/form-data">
<h1>Sửa món ăn</h1>
    <?php 
        if(is_array($ma)){
        extract($ma);
        $idma = $id;
        $hinhpath ="../../public/img/".$img;
        if(is_file($hinhpath)){
            $hinh= "<img src = '".$hinhpath."' height='80' ";
        } else{
            $hinh = "no photo";
        }
    }
    ?>
    <div class="border-td">
    <div class="text_cter ">
            <p>Mã</p>
            <input type="text" name="id" value="<?=$id?>" disabled>
        </div>
        <div class="text_cter">
            <p>Tên </p>
            <input type="text" name="name" value="<?=$name?>">
        </div>
        <div class="text_cter">
            <p>Hình</p>
            <input type="file" name="img">
            <?=$hinh?>
        </div>
        <div class="text_cter">
            <p>Giá</p>
            
            <input type="text" name="gia" value = "<?=$gia?>">
        </div>
        <div class="text_cter">
            <p>Mô tả</p>
            <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
        </div>
    </div>
        

        <div class="text_cter">
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
        <div class="text_cter">
            <p>Danh mục</p>
            <select name="idtd" id="">
                <?php 
                        foreach($ht_td as $td){
                            if($id_thucdon == $td['id'])
                                {$s = "selected";}
                                    else{ $s= "";}
                            echo '<option value="'.$td['id'].'" '.$s.'>'.$td['name'].'</option>';
                        } 
                        ?>
                <?php  ?>
            </select>
        </div>
        <div class="chon text_cter" >
            <input type="hidden" name="id"  value="<?=$idma?>">
            <input class="sua_td" name="luu" type="submit" value="Lưu">
            <input class="sua_td" type="reset" value="Nhập lại">
            <a href="index.php?act=monan"><input class="sua_td" type="button" value="Danh sách"></a>
        </div>
        <?php ?>
    </form>