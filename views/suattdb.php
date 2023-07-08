<?php 
    if(is_array($htttdb)){
        extract($htttdb);
        $idlb = $id;
    }
?>
<section class=" block">
    <div class="container bg-white flex g25 justify-start">
        <?php include 'chucnangtk.php' ?>
        <div style="width: 10000px;" class="w-100">
            <div class="pdlr4">
                <h3 class="fs2-5">Đặt bàn</h3>
                <hr>
            </div>
            <div class="pdlr4 mb1 mt1">Thay đổi ngày đặt</div>
            <form class="pdlr4 text_cter border p_8px" action="index.php?act=luuttdb" method="post" enctype="multipart/form-data">
                <div class="m_top_10px">
                    <p>Ngày đặt</p>
                    <input type="date" name="ngay" value="<?=$ngay?>">
                </div>
                <div class="m_top_10px">
                    <p>Giờ</p>
                    <input type="time" name="gio" value="<?=$gioan?>">
                </div>
                <div class="m_top_10px">
                    <p>Số người</p>
                    <input type="text" name="songuoi" value="<?=$songuoi?>">
                </div>
                <div class="m_top_10px">
                    <p>Loại bàn</p>
                    <select name="idlb" id="">
                        <?php 
                        foreach($lb as $lb){
                            if($idlb == $lb['id'])
                                {$s = "selected";}
                                    else{ $s= "";}
                            echo '<option value="'.$lb['id'].'" '.$s.'>'.$lb['name'].'</option>';
                        } 
                        ?>
                        <?php  ?>
                    </select>
                </div>
                <div class="m_top_10px">
                    <p>Lưu ý</p>
                    <textarea name="luuy" id="" cols="120" rows="10"><?=$noidung?></textarea>
                </div>
                <div>
                    <input class="btn_cndb m_top_10px" type="hidden" name="id" value="<?=$id?>">
                    <input class="btn_cndb m_top_10px" type="submit" value="Lưu" name="luu">
                </div>
                <div class="">
                    <a href="index.php?act=thongtindatban"><input class="btn_cndb m_top_10px" type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </div>
</section>