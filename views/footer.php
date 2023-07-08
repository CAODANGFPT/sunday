<footer class="mt7">
    <div class="grid1 grid-cl3 container text-center">
        <div class="ft-left">
            <div>
                <i class="fab fa-facebook-f">
                </i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-pinterest-p"></i>
            </div>
            <div class="gt">Thương hiệu SUN DAY đã có mặt tại viện nam đamh trở thành điểm quên thược của những
                người yêu ẩm thực truyền thống việt nam</div>
            <div class="flex justify-center">
                <input class="input" type="text" placeholder="Địa chỉ email">
                <button class="input-gui"><span class="w30s-icon far fa-paper-plane "></span></button>
            </div>
        </div>
        <div class="ft-center">
            <a href="">
                <img src="public/img/3.png" alt="">
            </a>
            <div>
                <p>Địa chỉ: </p>
                <p><?=$diachi?></p>
            </div>
            <div>
                <p>Điện thoại: </p>
                <p><?=$sdt?></p>
            </div>
            <div>
                <p>Email: </p>
                <p><?=$email?></p>
            </div>
        </div>
        <div class="ft-right text-center menu">
            <ul>
                <li class=""><a href="">Trang chủ</a></li>
                <li class=""><a href="">Giới thiệu</a></li>
                <li class=""><a href="">Thư viện</a></li>
                <li class=""><a href="">Tin tức</a></li>
                <li class=""><a href="">Liên hệ</a></li>
            </ul>


        </div>
    </div>
</footer>
</div>
<div id="hien" class="position-absolute dd hidden bg-111">
    <?php include "datban.php" ?>
</div>
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src="public/js/script.js"></script>
<script>
    const hienthi = document.querySelector(".hienthi")
const hien = document.querySelector("#hien")
const tat = document.querySelector("#tat")
const datban1 = document.querySelector("#datban1")

console.log(datban1);

hienthi.addEventListener('click', function(e) {
    hien.classList.remove('hidden');
    console.log(datban1);

})
tat.addEventListener('click', function(e) {
    hien.classList.add('hidden')
})
datban1.addEventListener('click', function(){
    hien.classList.remove('hidden')
    console.log("helllooo")
    
})
</script>


</html>