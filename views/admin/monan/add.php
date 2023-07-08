<div class="dm ">
    <h1>Thêm mới món ăn</h1>
    <form class="tk text_cter " action="index.php?act=themmonan" method="post" enctype="multipart/form-data">
        <div class="border-td">
        <div>
            <p>Mã</p>
            <input type="text" name="id" value="auto" disabled>
        </div>
        <div>
            <p>Tên </p>
            <input type="text" name="name">
        </div>
        <div>
            <p>Hình</p>
            <input type="file" name="img">
        </div>
        <div>
            <p>Giá</p>
            <input type="text" name="gia">
        </div>
        <div>
            <p>Mô tả</p>
            <input type="text" name="mota">
        </div>
        </div>
        <div>
            <p>Chi tiết</p>
            <textarea name="noidung" id="noidung" cols="200" rows="10"></textarea>
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
                <?php foreach($ht_td as $td){ ?>
                <option value="<?php echo $td['id'] ?>"><?php echo $td['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="chon">
            <input class="sua_td" name="themmoi" type="submit" value="Thêm mới">
            <input class="sua_td" type="reset" value="Nhập lại">
            <a href="index.php?act=monan"><input class="sua_td" type="button" value="Danh sách"></a>
        </div>
        <?php ?>
    </form>
</div>c