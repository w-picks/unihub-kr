<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');

?>

<div id="wrapper">
    <section id="main_vid">
        <article>
            <h2>세계 최초의<br>특허 투자 플랫폼</h2>
            <p>누구나 기술에 투자할 수 있는 기회,<br>아이디어허브를 통해 특허권에 투자하세요.</p>
        </article>
    </section>
    <section id="section1">
        <article>
            <h2>아이디어허브는<br><span>IP 수익화 플랫폼</span><br>입니다.</h2>
            <p>특허를 발굴하고 개인/기관 투자를 통해<br>특허에서 발생되는 수익을 공유하는 플랫폼.<br>아이디어허브를 통해 글로벌 수익화를 실현하세요.</p>
        </article>
    </section>
    <section id="section2">
        <div class="project_slide_content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="slide-name">모집중인 프로젝트</p>
                    <h3>Medical Device</h3>
                    <p class="caption">RF(고주파)를 이용한 의료기기 관련 특허</p>
                    <ul>
                        <li>
                            <p>예상수익률</p>
                            <div><span>연 40%</span><br>이상</div>
                        </li>
                        <li>
                            <p>모집금액</p>
                            <div><span>5</span>억원</div>
                        </li>
                        <li>
                            <p>모집기간</p>
                            <div><span>11.30</span>까지</div>
                        </li>
                    </ul>
                    <button>투자하기<svg width="19" height="7" viewBox="0 0 19 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6H17L12.678 1" stroke="white" stroke-width="1.5"/></svg>
                    </button>
                </div>
                <div class="swiper-slide">
                    <p class="slide-name">모집중인 프로젝트</p>
                    <h3>Medical Device</h3>
                    <p class="caption">RF(고주파)를 이용한 의료기기 관련 특허</p>
                    <ul>
                        <li>
                            <p>예상수익률</p>
                            <div><span>연 40%</span><br>이상</div>
                        </li>
                        <li>
                            <p>모집금액</p>
                            <div><span>5</span>억원</div>
                        </li>
                        <li>
                            <p>모집기간</p>
                            <div><span>11.30</span>까지</div>
                        </li>
                    </ul>
                    <button>투자하기<svg width="19" height="7" viewBox="0 0 19 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6H17L12.678 1" stroke="white" stroke-width="1.5"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="project_slide_bg swiper">
            <div class="swiper_wrapper">
                <div class="swiper-slide">
                    <div class="slide_content_bg"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- 보도자료 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/review', 'broadcast', 5, 20);
?>

<script>
    const swiper = new Swiper('.project_slide_content', {});
</script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>

