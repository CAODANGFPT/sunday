<div class="dm">
    <h1>Quản lý giới thiệu</h1>
    <table>
        <tr class="bgr">
            <th class="px">Giới thiệu  chính</th>
            <th class="px">Giới thiệu  phụ 1</th>
            <th class="px">Giới thiệu  phụ 2</th>
            <th class="px"></th>
        </tr>
        <?php foreach ($gt as $gt) { ?>
        <tr>
            <td><?php echo $gt['title']?></td>
            <td><?php echo $gt['noidung1'] ?></td>
            <td><?php echo $gt['noidung2'] ?></td>
            <td>
                <a href="index.php?act=suagt"><input class="sua-ds" type="button" name=""
                        id="" value="Sửa"></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div class="">
        <a href="index.php?act=themthuvien"><input class="xoa-ds" type="button" value="Nhập thêm"></a>
    </div>
</div>
<br>
<br>
<br>
<div class="dm">
    <h1>Quản lý đầu bếp</h1>
    <table>
        <tr class="bgr">
            <th class="px">STT</th>
            <th class="px">Tên thư viện</th>
            <th class="px">Ảnh</th>
            <th class="px">Mô tả</th>
            <th class="px"></th>
        </tr>
        <?php foreach ($db as $db) { ?>
        <tr>
            <td><?php echo $db['id']?></td>
            <td><?php echo $db['name'] ?></td>
            <td><img width="150px;" src="../../public/img/<?php echo $db['img'] ?>" alt=""></td>
            <td><?php echo $db['chucvu'] ?></td>
            <td>
                <a href="index.php?act=suadb&id=<?php echo $db['id'] ?>"><input class="sua-ds" type="button" name=""
                        id="" value="Sửa"></a>
                <a onclick="return confirm('Bạn có muốn xóa ??')"
                    href="index.php?act=xoadb&id=<?php echo $db['id'] ?>"><input class="xoa-ds" type="button" name=""
                        id="" value="Xóa"></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div class="">
        <a href="index.php?act=themthuvien"><input class="xoa-ds" type="button" value="Nhập thêm"></a>
    </div>
</div>