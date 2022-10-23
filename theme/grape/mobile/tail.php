<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div id="ft">
    <div class="ft_menu">
    <ul>
        <li>
            <a href="/">유니허브 소개</a>
        </li>
        <li>
            <a href="/">포트폴리오</a>
        </li>
        <li>
            <a href="/">새소식</a>
            <ul class="in_ft_menu">
                <li>
                    <a href="/">공지사항</a>
                </li>
                <li>
                    <a href="/">보도자료</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/">문의하기</a>
            <ul class="in_ft_menu">
                <li>
                    <a href="/">자주묻는질문</a>
                </li>
                <li>
                    <a href="/">1:1 문의</a>
                </li>
            </ul>
        </li>
    </ul>
    </div>
    <div class="ft_wr">
        <div class="footer_logo">
            <img src="<?php echo G5_IMG_URL ?>/unihub_logo.png">
        </div>
            <!-- <div id="ft_company">
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            </div> -->
            <!-- <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div> -->
        <ul class="ft_info">
            <li>주소 : 서울시 서초구 강남대로 251, 10층 (06735)</li>
            <li>Tel : 070-7784-1643</li>
            <li>Email : ideahub@ideahub.co.kr</li>
        </ul>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {
                
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>