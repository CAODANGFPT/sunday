
<div class="container">
    <div class="main">
        <div class="left-main" >
            <h2>GỬI THÔNG TIN CHO CHÚNG TÔI !</h2>
            <form class="form" action="index.php?act=lienhe" method="post" enctype="multipart/form-data">
                <div class="input-form">
                    <div class="top-input-form">
                        <input name="name"  type="text" placeholder="Họ và tên">
                        <input name="email" type="text" placeholder="Email" require>
                    </div>
                    <div class="under-input-form">
                        <input name="phone" type="text" placeholder="Số điện thoại">
                        <input name="diachi" type="text" placeholder="Địa chỉ">
                    </div>

                </div>
                <textarea name="noidung" id="" cols="30" rows="10"></textarea> <br>
                <input class="t2t" type="Submit" name="gui" value = "Gửi">
                <input class="t2t" type="reset" value = "Nhập lại">
                <div class="w30s-widget-childs">
                
                </div>
            </form>
            
        </div>
        <div class="right-main">
            <section class="w30s-column w30s-column-387387">
                <div class="w30s-widget-childs">
                    <div class="w30s-widget w30s-widget-map w30s-widget-4305937 w30s-widget-unique-1001657177877300">
                        <div class="w30s-map" data-address="196 Nguyễn Đình Chiểu, Phường Võ Thị Sáu, Quận 3, TP.HCM"
                            data-latitude="" data-longitude="" data-label_address="" data-zoom="15"></div><iframe
                            width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8670506651624!2d105.74367511538537!3d21.038004992837443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454962c0b6523%3A0x5c76c67564d9d1b9!2zUC4gVHLhu4tuaCBWxINuIELDtCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669714505910!5m2!1svi!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w30s-widget w30s-widget-group w30s-widget-4305938 w30s-widget-unique-1001657177921091">
                        <div class="w30s-widget-childs">
                            <div class="w30s-widget w30s-widget-text w30s-widget-4305939 w30s-widget-unique-1001657177921092 "
                                data-widget-unique="1001657177921092" data-content_type="0">Địa chỉ:</div>
                            <h4 class="w30s-widget w30s-widget-title w30s-widget-4305940 w30s-widget-unique-1001657177921093"
                                data-widget-id="4305940" data-widget-unique="1001657177921093"><span
                                    class="w30s-content "><?=$diachi?></span></h4>
                        </div>
                    </div>
                    <div class="w30s-widget w30s-widget-group w30s-widget-4305941 w30s-widget-unique-1001657177939683">
                        <div class="w30s-widget-childs">
                            <div class="w30s-widget w30s-widget-text w30s-widget-4305942 w30s-widget-unique-1001657177939684 "
                                data-widget-unique="1001657177939684" data-content_type="0">Hotline:</div>
                            <h4 class="w30s-widget w30s-widget-title w30s-widget-4305943 w30s-widget-unique-1001657177939685"
                                data-widget-id="4305943" data-widget-unique="1001657177939685"><a class="w30s-content "
                                    href="tel:19009477" title="19009477"><?=$sdt?></a></h4>
                        </div>
                    </div>
                    <div class="w30s-widget w30s-widget-group w30s-widget-4305944 w30s-widget-unique-1001657177958979">
                        <div class="w30s-widget-childs">
                            <div class="w30s-widget w30s-widget-text w30s-widget-4305945 w30s-widget-unique-1001657177958980 "
                                data-widget-unique="1001657177958980" data-content_type="0">Email:</div>
                            <h4 class="w30s-widget w30s-widget-title w30s-widget-4305946 w30s-widget-unique-1001657177958981"
                                data-widget-id="4305946" data-widget-unique="1001657177958981"><a class="w30s-content "
                                    href="mailto:admin@demo031112.web30s.vn"
                                    title="admin@demo031112.web30s.vn"><?=$email?></a></h4>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
            if(isset($thongbao)&&(($thongbao!=""))){
                echo $thongbao;
            }
        ?>
</div>