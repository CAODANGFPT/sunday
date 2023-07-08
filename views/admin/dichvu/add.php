<div>
    <h1>Thêm mới dịch vụ</h1>
    <form class="tk" action="index.php?act=themdichvu" method="post" enctype="multipart/form-data">
        <div>
            <p>Mã dịch vụ</p>
            <input type="text" name="madv" value="auto" disabled>
        </div>
        <div>
            <p>Tên </p>
            <input type="text" name="tendv">
        </div>
        <div>
        <div>
            <p>Hình</p>
            <input type="file" name="img">
        </div>
        <div>
            <p>Mô tả</p>
            <input type="text" name="mota">
        </div>
        <div>
            <p>Chi tiết</p>
            <textarea name="noidung" id="noidung" cols="200" rows="30"></textarea>  
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
            <select name="iddv" id="">
                <?php foreach($ht_dmdv as $dmdv){ ?>
                <option value="<?php echo $dmdv['id'] ?>"><?php echo $dmdv['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="chon">
            <input class="st-ip" name="themmoi" type="submit" value="Thêm mới">
            <input class="st-ip" type="reset" value="Nhập lại">
            <a href="index.php?act=dichvu"><input class="st-ip" type="button" value="Danh sách"></a>
        </div>
        <?php ?>
    </form>
</div>
    