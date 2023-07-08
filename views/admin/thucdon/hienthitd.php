<div class="dm">
    <h1>Quản lý danh sách thực đơn</h1>
    <table class="table_td dm border-td ">
        <tr class="bgb">
            <th class="py">Mã</th>
            <th class="py">Tên thực đơn</th>
            <th class="py">chức năng</th>
        </tr>
        <?php foreach ($ht_td as $td) { ?>
        <tr class="text_cter ">
            <td class="border-tr-td"><?php echo $td['id'] ?></td>
            <td class="border-tr-td"><?php echo $td['name'] ?></td>
            <td class="border-tr-td">
                <a  href="index.php?act=suatd&id=<?php echo $td['id'] ?>"><input class="sua_td" type="button" name=""
                        id="" value="Sửa"></a>
                <a onclick="return confirm('Bạn có muốn xóa ??')"
                    href="index.php?act=xoatd&id=<?php echo $td['id'] ?>"><input class="xoa_td" type="button" name=""
                        id="" value="Xóa"></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div class="">
        <a href="index.php?act=themthucdon"><input class="btn_cn" type="button" value="Nhập thêm"></a>
    </div>
</div>