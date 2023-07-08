<form class="tk" action="" method="post" enctype="multipart/form-data">
    <h1>Quản lí hình trong album</h1>
    <div>
    <?php if(is_array($tv)){
        extract($tv); }?>
        <p>Tên Album: <?=$name?></p>
    </div>
    <div class="grid1 grid-cl5 g30">
    <?php foreach($atv as $atv){?>
        <div class="flex flex-cl alit-center justify-center">
            <div><img class="w200 h100" src="../../public/img/<?php echo $atv['img']?>" alt=""></div>
            <div><a href="" onclick="return confirm('Bạn có muốn xóa ??')"><input type="submit" class="delete" name="xoa" value="Xóa"></a></div>
        </div>
    <?php } ?>
    </div>
    <div class="chon">
        <input class="id" type="hidden" name="id" value="<?php echo $atv['id']?>">
        <a href="index.php?act=themanh&id=<?=$id?>"><input class="xoa-ds" type="button" value="Thêm ảnh"></a>
        <a href="index.php?act=thuvien"><input class="sua-ds" type="button" value="Danh sách Album"></a>
    </div>
</form>
<?php 
    if(isset($_POST['xoa']) && $_POST['xoa']){
        $id = $_POST['id'];
        xoa_cttv1($id);
    }
?>