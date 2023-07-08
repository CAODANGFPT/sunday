<?php 
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        $namedb = $name;
        $emaildb = $email;
        $sdt = $phone;
        $iduser = $id;
    } else{
        $namedb = "";
        $emaildb = "";
        $sdt = "";
        $iduser = "";
    }
?>


<div class="container12 text-center m-auto block ">
    <div id="tat" class="">
        <div class="cancel ">
            X
        </div>
    </div>

    <form class="form-main bgwhite block m-auto p0" action="index.php?act=datban" method="post"
        enctype="multipart/form-data">
        <div class="title12">
            <h3>FORM ĐẶT BÀN</h3>
        </div>
        <div class="input-form1">
            <div class="input-1">
                <input id="ten" name="name" type="text" value="<?=$namedb?>" placeholder="Họ và tên...">
                <nav style="color: red;" id="thongbao">
                </nav>
            </div>
            <div class="input-1">
                <input id="email" name="email" type="email" value="<?=$emaildb?>" placeholder="Email">
                <nav style="color: red;" id="thongbao1">

                </nav>
            </div>
        </div>
        <div class="input-form1">
            <div class="input-1">
                <input id="sodienthoai" name="phone" type="text" value="<?=$sdt?>" placeholder="Số điện thoại ...">
                <nav style="color: red;" id="thongbao2">

                </nav>
            </div>
            <div class="input-1">
                <input id="sodienthoai" name="songuoi" type="number" placeholder="Số người" min="1" max="10">
                <nav style="color: red;" id="thongbao2">

                </nav>
            </div>
        </div>
        <div class="input-form1">
            <div class="input-1">
                <input id="diachi" name="gioan" type="time" placeholder="Giờ đặt">
                <nav style="color: red;" id="thongbao3">
                </nav>
            </div>
            <div class="input-1">
                <input id="diachi" name="ngay" type="date" placeholder="Ngày đặt">
                <nav style="color: red;" id="thongbao3">
                </nav>
            </div>
        </div>
        <div class="input-form1">

            <div class="input-1">
                <select name="idlb" id="">
                    <?php 
                        foreach($loaiban as $lb){
                            echo '<option value="'.$lb['id'].'">'.$lb['name'].'</option>';
                        } 
                        ?>
                    <?php  ?>
                </select>
            </div>
        </div>
        <div class="text-area">
            <textarea name="noidung" id="noidung" cols="20" rows="5" placeholder="Lưu ý"></textarea>
            <nav style="color: red;" id="thongbao4">

            </nav>
        </div>
        <div class="button12">
            <input id="button-sub" type="hidden" name="iduser" value="<?=$iduser?>">
            <input id="button-sub" type="submit" name="gui" value="Đặt bàn">
        </div>
        <?php
            if(isset($thongbao)&&(($thongbao!=""))){
                echo $thongbao;
            }
        ?>
    </form>
</div>