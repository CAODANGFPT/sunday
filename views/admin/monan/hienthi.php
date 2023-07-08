<div class="dm">
        <h1 class="">Quản lý loại hàng</h1>
        <table class ="tb b1">
            <tr class="bgb b1">
                <th>Tên thực đơn</th>
                <th>img</th>
                <th>mô tả</th>
                <th>giá tiền</th>
                <th>chức năng</th>
            </tr> 
            <?php 
                foreach($htma as $ma){
            ?>
            
            <tr class="b1">
                <td class="b1"><?php echo $ma['name'] ?></td>
                <td class="b1"><img src="../../public/img/<?php echo $ma['img'] ?>" alt=""></td>
                <td class="b1"><?php echo $ma['mota'] ?></td>
                <td class="b1"><?php echo $ma['gia'] ?>đ</td>
                <td class="b1"> 
                <a href="index.php?act=suama&id=<?php echo $ma['id'] ?>"><input class="btn_cn" type="button" name="" id="" value="Sửa"></a>
                        <a onclick = "return confirm('Bạn có muốn xóa ??')" href="index.php?act=xoama&id=<?php echo $ma['id'] ?>"><input class="btn_cn" type="button" name="" id="" value="Xóa"></a>
                </td>
                                
            </tr>
            <?php  } ?>
        </table>
        <div class="">
                <a href="index.php?act=themmonan"><input class="btn_cn" type="button" value="Nhập thêm"></a>
            </div>
    </div>