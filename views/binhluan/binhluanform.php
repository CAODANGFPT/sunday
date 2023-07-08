<?php
    session_start();
    include "../../models/pdo.php";
    include "../../models/binhluan.php";
    $mamonan = $_REQUEST['mamonan'];
    $dsbl = hienthibl($mamonan);
?>
        <div class="bl" style="padding-top: 0px">Bình luận</div>     
        <table style="margin-top: 10px; margin-bottom: 10px; margin-left: 15px;">
            <?php 
    
    foreach($dsbl as $bl){
        extract($bl);
        echo '<tr style=" border: 1px soild black;" >';
        echo '<td class="p_10px m_left_8px text_bl_cter" style="width: 38%;">'.$noidung.'</td>';
        echo '<td class="p_10px m_left_8px text_bl_cter" style="width: 40%;">'.$name.'</td>';
        echo '<td class="p_10px m_left_8px text_bl_cter" style="width: 40%;">'.$ngaybl.'</td>';
        echo '</tr>';
    }

    ?>
        </table>
        <div>
            <?php 
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                    $iduser = $_SESSION['user']['id'];
                    $name = $_SESSION['user']['name'];
            ?>
            <form style="margin-top: 10px; margin-bottom: 10px; margin-left: 15px;"  action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="mamonan" value="<?=$mamonan?>">
                <input class="nd_form_bl" type="text" name="noidung">
                <input class="btn_from_bl" type="submit" name="guibinhluan" value="Gửi">
            </form>
            <?php }else{ ?>
                <p>Bạn cần đăng nhập để bình luận</p>
            <?php } ?>
        </div>

        <?php 
    
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $mamonan = $_POST['mamonan'];
            $iduser = $_SESSION['user']['id'];
            $name = $_SESSION['user']['name'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            them_binhluan($iduser,$name,$mamonan,$noidung,$ngaybinhluan);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        
    ?>
    </div>
