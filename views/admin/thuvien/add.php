<form class="tk" action="index.php?act=themthuvien" method="post" enctype="multipart/form-data">
    <h1>Sửa thư viện</h1>
    <div>
        <p>Mã</p>
        <input class="id" type="text" name="id" value="auto" disabled>
    </div>
    <div>
        <p>Tên Album</p>
        <textarea name="name" id="" cols="150" rows="5"></textarea>
    </div>
    <div>
        <p>Mô tả</p>
        <textarea name="mota" id="" cols="150" rows="5"></textarea>
    </div>
    <div>
        <p>Chi tiết</p>
        <textarea name="chitiet" id="" cols="150" rows="5"></textarea>
    </div>
    <div>
        <p>Ảnh đại diện</p>
        <input type="file" name = "img">
    </div>
    <div class="chon">
        <input class="xoa-ds" name="themmoi" type="submit" value="Thêm mới">
        <input class="sua-ds" type="reset" value="Quay lại">
        <a href="index.php?act=thuvien"><input class="xoa-ds" type="button" value="Danh sách"></a>
    </div>
</form>
</div>