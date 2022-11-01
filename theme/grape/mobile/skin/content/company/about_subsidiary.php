<section id="detail_main" class="portfolio_main">
    <h1>포트폴리오</h1>
</section>
<section id="intro_info" class="portfolio_intro">
    <h2 class="detail_h2 scroll-trans"><span>UNIHUB Promote University  Innovation</span></h2>
</section>
<section id="university">
    <article>
        <div class="txt">
        <h2 class="detail_h2 scroll-trans">유니허브에 <br><span class="underline">참여중인 대학</span></h2>
        <p class="scroll-trans">국내 대학 중 <b>미국특허 보유 건수 10위권 내외<br> 대학들</b>과 함께하고 있습니다.  </p>
        <button class="uni_btn color1 scroll-trans" onclick="window.location.href='/bbs/qawrite.php'">참여문의</button>
        </div>
        <div class="swiper_container scroll-trans">
            <div class="swiper university-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_kyunghee.png">
                    <p>경희대학교</p>
                    </div>
                    <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_deagu.png">
                    <p>대구경북과학기술원</p>
                    </div>
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_sungkyun.png">
                    <p>성균관대학교</p>
                    </div> -->
                    <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_ajou.png">
                    <p>아주대학교</p>
                    </div>
                    <!-- <div class="swiper-slide">
                    <img src="<?php echo G5_IMG_URL ?>/partner_pohang.png">
                    <p>포항공과대학교</p></div> -->
                    <div class="swiper-slide">
                        <img src="<?php echo G5_IMG_URL ?>/partner_hanyang.png">
                        <p>한양대학교</p>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </article>
</section>
<section id="portfolio">
    <h2 class="detail_h2 scroll-trans"><span class="underline">PORTFOILO</span></h2>
    <p class="scroll-trans">유니허브는 대표적으로 아래와 같은 기술들에 대하여 라이센싱 활동을 해나가고 있습니다.  </p>
    <div class="portfolio_con_1 scroll-trans">
        <img src="<?php echo G5_IMG_URL ?>/portfolio_1.png">
    </div>
    <div class="portfolio_arrow scroll-trans">
        <img src="<?php echo G5_IMG_URL ?>/portfolio_arrow.png">
    </div>
    <div class="portfolio_con_2 scroll-trans">
        <img src="<?php echo G5_IMG_URL ?>/portfolio_2.png">
        <p class="tm">Target market</p>
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
        
    </div>
</section>
<!-- <section id="pf_list_bn">
    <article>
        <h2>특허 List</h2>
        <p>유니허브는 약 1900건의 특허 LIST를 보유하고 있습니다.</p>
        <button class="uni_btn">특허리스트 바로가기</button>
    </article>
</section> -->

<script>
    let spaceB;
    if(window.innerWidth > 1100){
        spaceB = 29;
    }else{
        spaceB = 8;
    }
    
    var swiper = new Swiper(".university-swiper", {
        slidesPerView:4,
        spaceBetween:spaceB,
        scrollbar: {
          el: ".swiper-scrollbar",
          hide: false
        },
        mousewheel: {
            invert: true,
        },
    })

    if(window.innerWidth < 768){
        swiper.destroy();
    }
</script>