
<div class="dm">
            <h1>Thống kê  </h1>
            <table>
                <tr class= "bgb">
                    <th class ="py">Mã danh mục</th>
                    <th class ="py">Tên danh mục</th>
                    <th class ="py">Số lượng</th>
                    <th class ="py">Giá cao nhất</th>
                    <th class ="py">Giá thấp nhất </th>
                    <th class ="py">Giá trung bình</th>
                </tr>
                <?php foreach ($thongke as $tk) { ?>
                <tr>
                    <td><?php echo $tk['matd'] ?></td>
                    <td><?php echo $tk['tentd'] ?></td>
                    <td><?php echo $tk['countsp'] ?></td>
                    <td><?php echo $tk['maxprice'] ?></td>
                    <td><?php echo $tk['minprice'] ?></td>
                    <td><?php echo $tk['avgprice'] ?></td>
                </tr>
                <?php } ?>
            </table>
            <a href="index.php?act=bieudo"><input class="st-ip" type="button" value="Xem biều đồ"></a>
        </div>
