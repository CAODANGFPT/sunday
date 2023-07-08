<?php
    extract($_SESSION['user']);
?>
<section class=" block ">
    <div class="container bg-white flex g25 justify-start">
        <?php include 'chucnangtk.php' ?>
        <div style="width: 1000px;" class="">
            <div class="pdlr4">
                <h3 class="fs2-5">Đặt bàn</h3>
                <hr>
            </div>
            <div class="pdlr4">Lịch đã đặt</div>
            <?php 
            $db = ht_datban($id);
            
            foreach($db as $db){
                $madb = ht_moan_datban($db['id']);
            ?>
                <form class="container text_cter">
                    <input class="m_top_10px" type="date"  value="<?php echo $db['ngay']?>" disabled>
                    <input class="m_top_10px" type="text"  value="<?php echo $db['gioan']?>" disabled>
                    <div class="m_top_10px">Số người: <?php echo $db['songuoi']?></div>
                    <div class="m_top_10px">Loại bàn: <?php echo $db['tenban']?></div>
                    <div class="m_top_10px">Các món ăn đã chọn</div>
                    <div>
                        <table style="width: 1000px;"  class=" border_table p_8px ">
                            <tr class="">
                                <th class="p_left_10px  border_table p_8px">Hình</th>
                                <th  class="p_left_10px border_table p_8px">Món ăn</th>
                                <th class="p_left_10px border_table p_8px">Đơn giá</th>
                                <th class="p_left_10px border_table p_8px">Số lượng</th>
                                <th class="p_left_10px border_table p_8px">Thành tiền</th>
                                <th class="p_left_10px border_table p_8px">Thao tác</th>
                                
                            </tr>
                            <?php 
                                $tong = 0;
                                $i = 0;
                                foreach($madb as $madb){
                                    extract($madb);
                                    $tong += $thanhtien;
                                    $xoa = '<a onclick = "return confirm("Bạn có muốn xóa ??")" href="index.php?act=xoaaddma&id='.$id.'"><input class="btn_cndb" type="button" value="Xóa"></a>';
                                    echo '
                                        <tr class="">
                                            <td><img class="m_10px border_table " style="width: 100px;" src="public/img/'.$img.'" alt=""></td>
                                            <td class="text_qldatban border_table text_cter p_8px" >'.$name.'</td>
                                            <td class="text_qldatban border_table text_cter p_8px" >'.$gia.'</td>
                                            <td class="text_qldatban border_table text_cter p_8px" >'.$soluong.'</td>
                                            <td class="text_qldatban border_table text_cter p_8px" >'.$thanhtien.'</td>
                                            <td class="text_qldatban border_table text_cter p_8px" >'.$xoa.'</td>
                                        </tr>
                                        ';
                                    $i+=1;
                                }
                                echo '<tr>
                                    <td class="border_table text_cter p_8px"   colspan=2>Tổng tiền</td>
                                    <td class="border_table text_cter p_8px" colspan=3>'.$tong.'</td>
                                    <td class="border_table text_cter p_8px" colspan=1><input class="btn_cndb" type="button" value="Thanh toán"></td>
                                </tr>';
                            ?>
                            
                        </table>
                    </div>
                    <a href="index.php?act=sualichdat&id=<?php echo $db['id'] ?>"><input class="m_top_8px btn_cndb" type="button" name=""
                        id="" value="Sửa lịch đặt"></a>
                    <a onclick = "return confirm('Bạn có muốn hủy lịch ??')" href="index.php?act=xoalichdat&id=<?php echo $db['id'] ?>"><input class="m_top_8px btn_cndb" type="button" name=""
                        id="" value="Hủy đạt bàn"></a>
                </form>
            <?php } ?>
        </div>
    </div>
</section>