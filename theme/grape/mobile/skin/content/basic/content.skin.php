<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);

?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <!-- <div id="ctt_con">
        <?php echo $str; ?>
    </div> -->

    <div id="ctt_con">
        <?php 
            if($g5['title'] == "회사소개") {
                include_once(G5_THEME_MOBILE_PATH.'/skin/content/company/company.php');
            } else if($g5['title'] == "연혁") {
                include_once(G5_THEME_MOBILE_PATH.'/skin/content/company/about_history.php');
            } else if($g5['title'] == "자회사 소개") {
                include_once(G5_THEME_MOBILE_PATH.'/skin/content/company/about_subsidiary.php');
            } else if($g5['title'] == "위치") {
                include_once(G5_THEME_MOBILE_PATH.'/skin/content/company/about_location.php');
            }
        ?>
    </div>

</article>