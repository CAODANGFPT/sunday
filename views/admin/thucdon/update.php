<form class="tk dm " action="index.php?act=updatetd" method="post" enctype="multipart/form-data">
    <?php 
        if(is_array($std)){
        extract($std);
    }
    ?>
    <div class="border-td">
    <h1 class="text_cter" >Sửa thực đơn</h1>
    <div class="text_cter">
        <p>Mã</p>
        <input class="ip" type="text" name="ma" value="<?php echo $id ?>" disabled>
    </div>
    <div class="text_cter">
        <p>Thực đơn</p>
        <input class="ip" type="text" name="ten" value="<?php echo $name ?>">
    </div>
    <div class="chon text_cter">
        <input name="id" type="hidden" value="<?php echo $id ;?>">
        <input class="sua_td" name="themmoi" type="submit" value="Thêm mới">
        <input class="sua_td" type="reset" value="Quay lại">
        <a href="index.php?act=dsthucdon"><input class=" sua_td" type="button" value="Danh sách"></a>
    </div>
    </div>
    
</form>
</div>