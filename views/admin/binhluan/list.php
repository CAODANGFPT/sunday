<div class="dm">
            <h1>Quản lý Bình luận</h1>
            <form action="#" method="POST">
                <select name="idsp" id="">
                    <?php foreach($listsp as $sp){ ?>
                    <option value="<?php echo $sp['id'] ?>"><?php echo $sp['name'] ?></option>
                    <?php } ?>
                </select>
                <input type="submit" name ="ok" value ="Tìm">
            </form>
            <table>
                <tr class="bgb">
                    <th class ="py">ID</th>
                    <th class ="py">ID User</th>
                    <th class ="py">Tên</th> 
                    <th class ="py">Mã món ăn</th>
                    <th class ="py">Nội dung</th>    
                    <th class ="py">Ngày bình luận</th>
                    <th class ="py"></th>
                </tr>
                <?php foreach ($listbinhluan as $bl) { ?>
                <tr>
                    <td><?php echo $bl['id'] ?></td>
                    <td><?php echo $bl['iduser'] ?></td>
                    <td><?php echo $bl['name'] ?></td>
                    <td><?php echo $bl['mamonan'] ?></td>
                    <td><?php echo $bl['noidung'] ?></td>
                    <td><?php echo $bl['ngaybl'] ?></td>
                    <td>
                        <a onclick = "return confirm('Bạn có muốn xóa ??')" href="index.php?act=xoabl&id=<?php echo $bl['id'] ?>"><input class="st-ip" type="button" name="" id="" value="Xóa"></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
