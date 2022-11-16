
<?php 
include 'inc/header.php';
?>  
<div id="main_wrapper">
  <section id="main_vid">
        <article>
            <h2 class="">
            UNIHUB provides one-stop licenses for worldwoid <br>portfolio of patents<br>
            owned by universities in Korea.
            </h2>
            <button class="uni_btn" onclick="contactUs()">Learn More</button>
        </article>
    </section>
    <section id="business">
        <!-- <span class="uni_span scroll-trans">UNIHUB Business</span> -->
        <article>
            <!-- <h2 class="scroll-trans">유니허브 비즈니스 <span class="underline">한눈에 보기</span></h2> -->
            <h2 class="scroll-trans">UNIHUB <span class="underline">Business</span></h2>
            <p class="scroll-trans scroll-trans-delay-300">UNIHUB was formed to provide a platform to encourage further use of innovations contributed to the pool by the participating universities.
</p> 
            <div class="business_system scroll-trans">
                <img src="images/business_eng.png" class="pc_img">
                <img src="images/business_eng_mo.png" class="mo_img">
            </div>
            
            <ul class="thum_list">
                <li class="scroll-trans scroll-trans-delay-300">
                    <img src="/img/business_step_1.png">
                    <span class="step_num">01</span>
                    <p>Contract</p>
                </li>
                <li class="step_arrow scroll-trans scroll-trans-delay-300">
                </li>
                <li class="scroll-trans scroll-trans-delay-400">
                <img src="/img/business_step_2.png">
                <span class="step_num">02</span>
                    <p>Analysis of<br>patents/market</p>
                </li>
                <li class="step_arrow scroll-trans scroll-trans-delay-400"></li>
                <li class="scroll-trans scroll-trans-delay-500">
                    <img src="/img/business_step_3.png">
                    <span class="step_num">03</span>
                    <p>Monetization</p>
                </li>
                <li class="step_arrow scroll-trans scroll-trans-delay-500"></li>
                <li class="scroll-trans scroll-trans-delay-600">
                    <img src="/img/business_step_4.png">
                    <span class="step_num">04</span>
                    <p>Distribution of royalty</p>
                </li>
            </ul>
            
            
        </article>
    </section>
    <section id="partners">
        <article>
        <span class="uni_span scroll-trans">UNIHUB PARTNERS</span>
        <h2 class="scroll-trans">UNIHUB <span class="underline">PARTNERS</span></h2>
        <p class="scroll-trans">N country’s leading research universities<br>are participating UNIHUB’s licensing program.</p>
        <ul>
            <li class="scroll-trans scroll-trans-delay-500">
                <img src="/img/partnel_empty.png" class="pc_img">
                <img src="/img/partnel_empty_mo.png" class="mo_img">
                <p>University A</p>
            </li>
            <li class="scroll-trans scroll-trans-delay-400">
                <img src="/img/partnel_empty.png" class="pc_img">
                <img src="/img/partnel_empty_mo.png" class="mo_img">
                <p>University B</p>
            </li>
            <li class="scroll-trans scroll-trans-delay-700">
                <img src="/img/partnel_empty.png" class="pc_img">
                <img src="/img/partnel_empty_mo.png" class="mo_img">
                <p>University C</p>
            </li>
            <li class="scroll-trans scroll-trans-delay-600">
                <img src="/img/partnel_empty.png" class="pc_img">
                <img src="/img/partnel_empty_mo.png" class="mo_img">
                <p>University D</p>
            </li>
            <!-- <li class="scroll-trans scroll-trans-delay-500">
                <img src="<?php echo G5_IMG_URL ?>/partner_kyunghee_full.png" class="pc_img">
                <img src="<?php echo G5_IMG_URL ?>/partner_kyunghee.png" class="mo_img">
                <p>경희대학교</p>
            </li>
            <li class="scroll-trans scroll-trans-delay-600">
                <img src="<?php echo G5_IMG_URL ?>/partner_deagu_full.png" class="pc_img">
                <img src="<?php echo G5_IMG_URL ?>/partner_deagu.png" class="mo_img">
                <p>대구경북과학기술원</p>
            </li> -->
            <!-- <li class="scroll-trans">
                <img src="<?php echo G5_IMG_URL ?>/partner_sungkyun.png">
                <p>성균관대학교</p>
            </li> -->
            <!-- <li class="scroll-trans scroll-trans-delay-400">
                <img src="<?php echo G5_IMG_URL ?>/partner_ajou_full.png" class="pc_img">
                <img src="<?php echo G5_IMG_URL ?>/partner_ajou.png" class="mo_img">
                <p>아주대학교</p>
            </li> -->
            <!-- <li class="scroll-trans scroll-trans-delay-700">
                <img src="<?php echo G5_IMG_URL ?>/partner_pohang.png">
                <p>포항공과대학교</p>
            </li> -->
            <!-- <li class="scroll-trans scroll-trans-delay-300">
                <img src="<?php echo G5_IMG_URL ?>/partner_hanyang_full.png" class="pc_img">
                <img src="<?php echo G5_IMG_URL ?>/partner_hanyang.png" class="mo_img">
                <p>한양대학교</p>
            </li> -->
        </ul>
        <button class="uni_btn color1 scroll-trans" onclick="contactUs()">Join Us</button>
        <article>
    </section>
    <section id="investment_report">
        <article>
            <div class="scroll-trans">
                <img src="/img/report_main.png">
            </div>
            <div class="scroll-trans scroll-trans-delay-300">
                <!-- <span class="uni_span">Licensing Reports</span> -->
                <!-- <h2>참여대학 수익화현황</h2> -->
                <h2>Licensing Reports</h2>
                <p>Universities participating in the UNIHUB<br> receive quarterly licensing reports.</p>
                <button class="uni_btn" onclick="window.location.href='/bbs/board.php?bo_table=my_investment'">Licensing Reports</button>
            </div>
        </article>
    </section>
    <div id="news">
    <span class="uni_span scroll-trans">UNIHUB NEWS</span>
    <h2 class="scroll-trans">Recent <b><span class="underline">News</span></b></h2>
    <ul class="news_table scroll-trans">
    <?php
        $mysql_HOST = 'localhost';
        $mysql_DATABASE = 'unihubinc';
        $mysql_USERNAME = 'unihubinc';
        $mysql_PASSWORD = 'Unihub1018';

        $connect = new mysqli($mysql_HOST, $mysql_USERNAME, $mysql_PASSWORD, $mysql_DATABASE);
        $sql = " select * from g5_write_broadcast_eng where wr_is_comment = 0 order by wr_num desc limit 0, 3 ";   
        $connect->set_charset("utf8mb4");
        $result = mysqli_query($connect, $sql);
        for ($i=0; $row = mysqli_fetch_array($result); $i++) {
            // echo $row['wr_subject']; // 제목
            // echo $row['wr_content']; // 내용
            // echo $row['wr_1']; // 신문사 tag
            // echo $row['wr_2']; // 신문사 url
            // var_dump($row['wr_2'])
    ?>
     
        <li>
            <a href="<?php echo $row['wr_2'] ?>">
                <h3><?php echo $row['wr_subject'] ?></h3>
                <?php echo $row['wr_content'] ?>
                <p class="date"><?php echo $row['wr_datetime'] ?></p>
            </a>
        </li>
        <?php } ?>
    </ul>
    </div>
</div>

<script>
    const contactUs = () => {
        // window.location.href='/bbs/qawrite.php'
        window.location.href='/bbs/faq.php?la=en'
        localStorage.setItem("lang", "en")
    }
</script>

<?php 
include 'inc/footer.php'
?>  


