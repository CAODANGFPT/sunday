<style>
    .th-name,.th-image,
    .th-descrip ,.th-chucnang{
        
    }
</style>
<div class="dm">
        <h1 class="">Quản lý dịch vụ</h1>
        <table class = "tb b1">
            <tr class="b1">
                <th>Tên thực đơn</th>
                <th>img</th>
                <th>mô tả</th>
                <th>chức năng</th>
            </tr> 
            <?php 
                foreach($htdv as $dv){
            ?>
            
            <tr class="b1">
                <td class="b1"><?php echo $dv['name'] ?></td>
                <td class="b1"><img src="../../public/img/<?php echo $dv['img'] ?>" alt=""></td>
                <td class="b1"><?php echo $dv['mota'] ?></td>
                <td class="b1"> 
                <a href="index.php?act=suadv&id=<?php echo $dv['id'] ?>"><input class="st-ip" type="button" name="" id="" value="Sửa"></a>
                        <a onclick = "return confirm('Bạn có muốn xóa ??')" href="index.php?act=xoadv&id=<?php echo $dv['id'] ?>"><input class="st-ip" type="button" name="" id="" value="Xóa"></a>
                </td>
                                
            </tr>
            <?php  } ?>
        </table>
        <div class="">
                <a href="index.php?act=themdichvu"><input class="st-ip" type="button" value="Nhập thêm"></a>
            </div>
    </div>