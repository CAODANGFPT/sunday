<?php 
    if(is_array($bl)){
        extract($bl);
    }
?>
<div>
            <h1>Sửa bình luân </h1>
            <form class="tk" action="index.php?act=updatebl" method="post" enctype="multipart/form-data">
                <div>
                    <p>ID user</p>
                    <input type="text" name="iduser" value ="<?=$iduser?>" disabled>
                </div>
                <div>
                    <p>id pro</p>
                    <input type="text" name="idpro" value ="<?=$idpro?>" disabled>
                </div>
                <div>
                    <p>Nội dung</p>
                    <input type="text" name="noidung" value ="<?=$noidung?>">
                </div>
                <div class="chon">
                    <input name="id" type="hidden" value="<?=$id?>">
                    <input class="st-ip" name="capnhap" type="submit" value="Cập nhập">
                    <input class="st-ip" type="reset" value="Nhập lại">
                    <a href="index.php?act=binhluan"><input class="st-ip" type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
