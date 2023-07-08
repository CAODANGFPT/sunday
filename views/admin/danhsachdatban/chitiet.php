<?php 
    if(is_array($htttdb)){
        extract($htttdb);
        $madb = ht_moan_datban($id);
    }
?>
<form class="pdlr4" action="index.php?act=luuttdb" method="post" enctype="multipart/form-data">
    <h1>Thông tin đặt bàn mã: <?=$id?></h1>
    <input type="date" value="<?=$ngay?>">
    <input type="text" value="<?=$gioan?>">
    <div>Sô người: <?=$songuoi?></div>
    <div>Loại bàn: <?=$tenban?></div>
    <div>Các món ăn đã chọn</div>
    <div>
            <table>
                <tr>
                    <th>Hình</th>
                    <th>Món ăn</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <input type="text" value="" name="trangthai">
                </tr>
                <?php
                    $tong = 0;
                    foreach($madb as $madb){
                        extract($madb);
                        $tong += $thanhtien;
                        echo '
                            <tr class="center">
                                <td class="px"><img style="width: 100px;" src="../../public/img/'.$img.'" alt=""></td>
                                <td class="px">'.$name.'</td>
                                <td class="px">'.$gia.'</td>
                                <td class="px">'.$soluong.'</td>
                                <td class="px">'.$thanhtien.'</td>
                            </tr>
                            ';
                    }
                    echo '<tr>
                            <td colspan=4>Tổng tiền</td>
                            <td colspan=2>'.$tong.'</td>
                        </tr>
                        <tr>
                            <td colspan=4>Trạng thái</td>
                            <td colspan=2><input type="text" name="trangthai" value="'.$trangthai.'" ></td>
                        </tr>
                        ';
                ?>
            </table>
            <input class="center" type="hidden" name="id" value="<?=$id?>">
            <input class="center" type="submit" value="Lưu" name="bttrangthai">
    </div>
    <div class="">
        <a href="index.php?act=danhsachdatban"><input class="xoa-ds" type="button" value="Danh sách"></a>
</div>
</form>
