<style>
.th-name,
.th-image,
.th-phone,
.th-date,
.th-email,
.th-user,
.th-pass,
.th-vaitro {
    width: 500px;
    font-family: 'Mulish', sans-serif;
    background-color: cornflowerblue;
}

td {
    border: 2px solid grey;
    font-family: 'Mulish', sans-serif;
    text-align: center;
}

.btton {
    display: flex;
    height: 108px;
}

.dm1 {
    background-color: azure;
    padding-left: 10px;
    margin-left: 0px;
}
</style>
<div class="dm1">
            <h1>Quản lý khách hàng</h1>
            <table>
                <tr class="bgb">
                    <th class ="py th-name">Họ và tên</th>
                    <th class ="py th-image">Ảnh</th>
                    <th class ="py th-phone">Phone</th>
                    <th class ="py th-date">Ngày sinh</th>
                    <th class ="py  th-email">Email</th>
                    <th class ="py  th-user">User</th>
                    <th class ="py  th-pass">pass</th>
                    <th class ="py  th-vaitro">vaitro</th>
                    <th class ="py  "></th>
                </tr>
                <?php foreach ($listkhachhang as $tk) { ?>
                <tr>
                    <td><?php echo $tk['name'] ?></td>
                    <td><img class="w200 h100" src="../../public/img/<?php echo $tk['img'] ?>" alt=""></td>
                    <td><?php echo $tk['phone'] ?></td>
                    <td><?php echo $tk['date'] ?></td>
                    <td><?php echo $tk['email'] ?></td>
                    <td><?php echo $tk['user'] ?></td>
                    <td><?php echo $tk['vaitro'] ?></td>
                    <td class="btton">
                        <a class="" href="index.php?act=suatk&id=<?php echo $tk['id'] ?>"><input class="st-ip" type="button" name="" id="" value="Sửa"></a>
                        <a onclick = "return confirm('Bạn có muốn xóa ??')" href="index.php?act=xoatk&id=<?php echo $tk['id'] ?>"><input  class="st-ip" type="button" name="" id="" value="Xóa"></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div class="">
            </div>
        </div>