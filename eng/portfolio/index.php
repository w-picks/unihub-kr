<?php include '../inc/header.php' ?>
<section id="detail_main" class="portfolio_main">
    <h1>Portfolio</h1>
</section>
<section id="intro_info" class="portfolio_intro">
    <h2 class="detail_h2 scroll-trans"><span>UNIHUB Promote University  Innovation</span></h2>
</section>
<section id="university">
    <article>
        <div class="txt">
        <h2 class="detail_h2 scroll-trans"><span class="underline">Members of</span><br>UNIHUB</h2>
        <!-- <p class="scroll-trans">국내 대학 중 <b>미국특허 보유 건수 10위권 내외<br> 대학들</b>과 함께하고 있습니다.  </p> -->
        <!-- <p class="scroll-trans">N of country’s leading research universities<br>are participating UNIHUB’s licensing program.</p> -->
        <button class="uni_btn color1 scroll-trans" onclick="window.location.href='/bbs/qawrite.php'">Join Us</button>
        </div>
        <div class="swiper_container scroll-trans">
            <div class="swiper university-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <img src="/img/partnel_empty_mo.png">
                    <p>University A</p>
                    </div>
                    <div class="swiper-slide">
                    <img src="/img/partnel_empty_mo.png">
                    <p>University B</p>
                    </div>
                    <div class="swiper-slide">
                    <img src="/img/partnel_empty_mo.png">
                    <p>University C</p>
                    </div>
                    <div class="swiper-slide">
                    <img src="/img/partnel_empty_mo.png">
                    <p>University D</p>
                    </div>
                    
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_kyunghee.png">
                    <p>경희대학교</p>
                    </div>
                    <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_deagu.png">
                    <p>대구경북과학기술원</p>
                    </div> -->
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_sungkyun.png">
                    <p>성균관대학교</p>
                    </div> -->
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_ajou.png">
                    <p>아주대학교</p>
                    </div> -->
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_pohang.png">
                    <p>포항공과대학교</p></div> -->
                    <!-- <div class="swiper-slide">
                        <img src="<?php echo G5_IMG_URL ?>/partner_hanyang.png">
                        <p>한양대학교</p>
                    </div> -->
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </article>
</section>
<section id="portfolio">
    <h2 class="detail_h2 scroll-trans"><span class="underline">PORTFOILO</span></h2>
    <p class="scroll-trans">UNIHUB is licensing technologies in the following fields.</p>
    <div class="portfolio_con_1 scroll-trans">
        <img src="/img/portfolio_1.png">
    </div>
    <div class="portfolio_arrow scroll-trans">
        <img src="/img/portfolio_arrow.png">
    </div>
    <div class="portfolio_con_2 scroll-trans">
        <img src="/img/portfolio_2.png">
        <ul class="tm_left">
            <li class="scroll-trans">Communication</li>
            <li class="scroll-trans">Computer Related</li>
            <li class="scroll-trans">Other Electronics Related</li>
            <li class="scroll-trans">Medical/Health Related</li>
            <li class="scroll-trans">Energy</li>
            <li class="scroll-trans">Consumer Related</li>
        </ul>
        <ul class="tm_right">
            <li class="scroll-trans">Transportation</li>
            <li class="scroll-trans">Industrial Products/Manufacturing</li>
            <li class="scroll-trans">Construction and Building Products</li>
            <li class="scroll-trans">Agriculture</li>
            <li class="scroll-trans">Forestry and Fishing</li>
            <li class="scroll-trans">Services</li>
        </ul>
        <p class="tm">Target market</p>
    </div>
</section>

<script>
    var swiper = new Swiper(".university-swiper", {
        slidesPerView:4,
        spaceBetween:29,
        scrollbar: {
          el: ".swiper-scrollbar",
          hide: false
        },
        mousewheel: {
            invert: true,
        },
    })
</script>

<?php include '../inc/footer.php' ?>