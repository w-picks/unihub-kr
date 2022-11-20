<?php include '../inc/header.php' ?>
<script src="/js/index_map.js"></script>
<section id="detail_main" class="company_main">
    <h1>About Us</h1>
</section>
<section id="intro_info">
    <h2 class="detail_h2 scroll-trans">University Technology Licensing Hub, <span>UNIHUB</span></h2>
    <p class="scroll-trans">UNIHUB provides access to valuable patents owned by universities.</p>
</section>
<section id="mission3">
    <article>
        <div>
            <h2 class="detail_h2 scroll-trans"><span class="underline">Missions</span> of <br>
            UNIHUB</h2>
        </div>
        <div>
            <ul>
                <li class="scroll-trans scroll-trans-delay-300">
                    <span class="num">1</span>
                    <p>UNIHUB supports member universities 
by licensing their patent portfolios.</p>
                    <img src="/img/mission3_1.png">
                </li>
                <li class="scroll-trans scroll-trans-delay-400">
                    <span class="num">2</span>
                    <p>UNIHUB provides a foundation 
for industrial development and new start-ups.
</p>
                    <img src="/img/mission3_2.png">
                </li>
                <li class="scroll-trans scroll-trans-delay-500">
                    <span class="num">3</span>
                    <p>Revenues from the licensing programs will support 
the universities’ ongoing research and innovation.
</p>
                    <img src="/img/mission3_3.png">
                </li>
            </ul>
        </div>
    </article>
</section>
<section id="unihub_ci">
    <h2 class="detail_h2 scroll-trans"><span class="underline">CI</span> of UNIHUB</h2>
    <div class="ci_img scroll-trans">
        <img src="/img/unihub_ci_1.png">
        <img src="/img/unihub_ci_2.png">
        <img src="/img/unihub_ci_3.png">
    </div>
    <div class="ci_detail">
        <ul>
            <li class="ci_d1 scroll-trans">
                <div class="step_box">
                    <span class="num">01</span>
                    <p>CI SIGNATURE</p>
                </div>
                <div class="ci_content">
                    <p><span>BLUE - </span>Professional, Stability, Trust, Honesty</p>
                    <p><span>NAVY - </span>Technology, Modern, Honesty</p>
                </div>
            </li>
            <li class="ci_d2 scroll-trans">
                <div class="step_box">
                    <span class="num">02</span>
                    <p>About CI</p>
                </div>
                <div class="ci_content">
                    <p>Based on the keywords "HUB" and "Technology“, the circular shape of the symbol represents the meaning of "sharing" and “wide-use" of patents. 
Company's process of purchasing and monetizing technologies, and distributing revenues are embodied in the overall logo.
</p>
                </div>
            </li>
            <li class="ci_d3 scroll-trans">
                <div class="step_box">
                    <span class="num">03</span>
                    <p>COLOR</p>
                </div>
                <div class="ci_content ci_color">
                    <div class="main_color">
                        <div class="color_chip">Main Color</div>
                        <p><span>SPOT</span>PANTONE® SOLID COATED 877 C</p>
                        <p><span>PROCESS</span>C45 / M34 / Y34 / K0</p>
                        <p><span>RGB WEB</span>R138 / G141 / B143</p>
                        <p><span>HEX</span>#28A8D8F</p>
                    </div>
                    <div class="sub_color">
                        <div class="color_chip">Sub Color</div>
                        <p><span>SPOT</span>PANTONE® SOLID COATED 877 C</p>
                        <p><span>PROCESS</span>C45 / M34 / Y34 / K0</p>
                        <p><span>RGB WEB</span>R138 / G141 / B143</p>
                        <p><span>HEX</span>#005193</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="map_container">
    <article>
        <div id="map"></div>
        <div class="map_content">
            <div>
                <h2 class="detail_h2 scroll-trans"><span class="underline">CONTACT</span></h2>
            </div>
            <div class="address scroll-trans scroll-trans-delay-300">
                <ul>
                    <li>
                        <b>Location</b>
                        <p>10F, 251, Gangnam-daero, Seocho-gu, Seoul, Republic of Korea</p>
                    </li>
                    <li>
                        <b>Tel</b>
                        <p>+82-70-7784-1643</p>
                    </li>
                    <li>
                        <b>Fax</b>
                        <p>+82-2-574-3838</p>
                    </li>
                    <li>
                        <b>E-MAIL</b>
                        <p>ideahub@ideahub.co.kr</p>
                    </li>
                </ul>
            </div>
        </div>
    </article>
</section>
<section id="contact_us">
    <div><a href="#">Contact us !</a></div>
</section>
<?php include '../inc/footer.php' ?>

<script defer src="<?php echo G5_JS_URL ?>/index_map.js"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALgx-VXp6qO4fZ2Z5WCCLy1HtkMibDVOE&callback=initMap"></script>