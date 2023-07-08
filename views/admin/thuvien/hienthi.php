<div class="dm">
    <h1>Quản lý danh sách thư viện</h1>
    <table>
        <tr class="bgr">
            <th class="px">Mã</th>
            <th class="px">Tên thư viện</th>
            <th class="px">Ảnh</th>
            <th class="px">Mô tả</th>
            <th class="px"></th>
        </tr>
        <?php foreach ($httv as $tv) { ?>
        <tr>
            <td><?php echo $tv['id']?></td>
            <td><?php echo $tv['name'] ?></td>
            <td><img width="150px;" src="../../public/img/<?php echo $tv['img'] ?>" alt=""></td>
            <td><?php echo $tv['mota'] ?></td>
            <td>
                <a href="index.php?act=suaatv&id=<?php echo $tv['id'] ?>"><input class="sua-album" type="button" name=""
                        id="" value="Sửa ảnh album"></a>
                <a href="index.php?act=suatv&id=<?php echo $tv['id'] ?>"><input class="sua-ds" type="button" name=""
                        id="" value="Sửa"></a>
                <a onclick="return confirm('Bạn có muốn xóa ??')"
                    href="index.php?act=xoatv&id=<?php echo $tv['id'] ?>"><input class="xoa-ds" type="button" name=""
                        id="" value="Xóa"></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div class="">
        <a href="index.php?act=themthuvien"><input class="xoa-ds" type="button" value="Nhập thêm"></a>
    </div>
</div>