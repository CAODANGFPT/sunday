<?php 
    if(is_array($tk)){
        extract($tk);
        $hinhpath ="../../public/img/".$img;
        if(is_file($hinhpath)){
            $hinh= "<img src = '".$hinhpath."' height='80' ";
        } else{
            $hinh = "no photo";
        }
    }
?>
<div>
            <h1>Sửa loại hàng </h1>
            <form class="tk" action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div>
                    <p>Mã tài khoản</p>
                    <input type="text" name="id" value ="<?=$id?>" disabled>
                </div>
                <div>
                    <p>Họ và tên</p>
                    <input type="text" name="name" value ="<?=$name?>">
                </div>
                <div>
                    <p>Hình</p>
                    <input type="file" name="img">
                    <img class="w200" src="<?=$hinhpath?>" alt="">
                </div>
                <div>
                    <p>Ngày sinh</p>
                    <input type="date" name="date" value ="<?=$date?>">
                </div>
                <div>
                    <p>Số điện thoại</p>
                    <input type="text" name="sdt" value ="<?=$phone?>">
                </div>
                <div>
                    <p>Email</p>
                    <input type="text" name="email" value ="<?=$email?>">
                </div>
                <div>
                    <p>Tên đăng nhập</p>
                    <input type="text" name="user" value ="<?=$user?>">
                </div>
                <div>
                    <p>Mật khẩu</p>
                    <input type="text" name="pass" value ="<?=$pass?>">
                </div>
                <div>
                    <p>Vai trò</p>
                    <input type="text" name="vaitro" value ="<?=$vaitro?>">
                </div>
                <div class="chon">
                    <input name="id" type="hidden" value="<?=$id?>">
                    <input class="st-ip" name="capnhap" type="submit" value="Cập nhập">
                    <input class="st-ip" type="reset" value="Nhập lại">
                    <a href="index.php?act=khachhang"><input class="st-ip" type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
