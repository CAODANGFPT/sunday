<div class="dm">
    <h1>Quản lý thông tin</h1>
    <table>
        <tr class="bgr">
            <th class="px">Logo</th>
            <th class="px">Số điện thoại</th>
            <th class="px">Địa chỉ</th>
            <th class="px">Email</th>
            <th class="px"></th>
        </tr>
        <?php foreach ($tt as $tt) { ?>
        <tr>
            <td><img width="150px;" src="../../public/img/<?php echo $tt['logo'] ?>" alt=""></td>
            <td><?php echo $tt['sdt']?></td>
            <td><?php echo $tt['diachi'] ?></td>
            <td><?php echo $tt['email'] ?></td>
            <td>
                <a href="index.php?act=suatt"><input class="sua-album" type="button" name=""
                        id="" value="Sửa"></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>