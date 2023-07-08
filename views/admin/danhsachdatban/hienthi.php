<div class="dm">
    <h1>Quản lý đơn đặt bàn</h1>
    <table>
        <tr class="bgr">
            <th class="px">Tên</th>
            <th class="px">Số điện thoại</th>
            <th class="px">Email</th>
            <th class="px">Số người</th>
            <th class="px">Ngày đặt</th>
            <th class="px">Giờ tới</th>
            <th class="px">Nội dung</th>
            <th class="px">Loại bàn</th>
            <th class="px">Trạng thái</th>
            <th class="px">Thao tác</th>
        </tr>
        <?php foreach ($htttdb as $ttdb) { ?>
        <tr>
            <td class="center px"><?php echo $ttdb['tenuser']?></td>
            <td class="center px"><?php echo $ttdb['phone'] ?></td>
            <td class="center px"><?php echo $ttdb['email'] ?></td>
            <td class="center px"><?php echo $ttdb['songuoi'] ?></td>
            <td class="center px"><?php echo $ttdb['ngay'] ?></td>
            <td class="center px"><?php echo $ttdb['gioan'] ?></td>
            <td class="center px"><?php echo $ttdb['noidung'] ?></td>
            <td class="center px"><?php echo $ttdb['tenban'] ?></td>
            <td class="center px"><?php echo $ttdb['trangthai'] ?></td>
            <td class="center px"><a href="index.php?act=chitietdb&id=<?php echo $ttdb['id'] ?>"><input class="sua-ds" type="button" name=""
                        id="" value="Chi tiết"></a></td>
        </tr>
        <?php } ?>
    </table>
</div>