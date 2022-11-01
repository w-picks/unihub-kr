<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$faq_skin_url.'/style.css">', 0);

?>

<!-- FAQ 시작 { -->
<?php
// 상단 HTML
echo '<div class="bo_top_img">'.conv_content($fm['fm_mobile_head_html'], 1).'</div>';
?>


<?php
if( count($faq_master_list) ){
?>

<!-- <nav id="bo_cate">
    <h2>자주하시는질문 분류</h2>
    <ul id="bo_cate_ul">
        <?php
        foreach( $faq_master_list as $v ){
            $category_msg = '';
            $category_option = '';
            if($v['fm_id'] == $fm_id){ // 현재 선택된 카테고리라면
                $category_option = ' id="bo_cate_on"';
                $category_msg = '<span class="sound_only">열린 분류 </span>';
            }
        ?>
        <li><a href="<?php echo $category_href;?>?fm_id=<?php echo $v['fm_id']?>" <?php echo $category_option;?> ><?php echo $category_msg.$v['fm_subject'];?></a></li>
        <?php
        }
        ?>
    </ul>
</nav> -->
<?php } ?>

<section id="detail_main" class="faq">
    <h1>문의하기</h1>
</section>
<div id="faq_wrapper">
<!-- <div class="faq_tit">
<h1><?php echo $category_msg.$v['fm_subject'];?></h1>
<a href="<?php echo G5_BBS_URL ?>/qawrite.php" class="direct_btn">1:1 문의<img src="<?php echo G5_IMG_URL ?>/ico_direct_faq.svg"></a>
</div> -->
<ul class="faq_tab detail_tab">
    <li class="on">자주 묻는 질문</li>
    <li class=""><a href="<?php echo G5_BBS_URL ?>/qawrite.php">1:1 문의</a></li>
</ul>


<div id="faq_wrap" class="faq_<?php echo $fm_id; ?>">
 
    <div id="bo_sch">
        <form name="faq_search_form" method="get">
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            <!-- <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
            <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
            <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
            <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option> -->
        </select>
        <input type="hidden" name="fm_id" value="<?php echo $fm_id;?>">
        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
        <div class="input_wrap">
        <input type="text" name="stx" value="<?php echo $stx;?>" required id="stx" class="frm_input sch_input" size="15" maxlength="15" placeholder="검색어를 입력해주세요.">
        <button type="submit" value="검색" class="btn_submit sch_btn"><img src="<?php echo G5_IMG_URL ?>/ico_search.svg"><span class="sound_only">검색</span></button>
    </div>
        </form>
    </div>
   <?php // FAQ 내용
    if( count($faq_list) ){
    ?>
    <section id="faq_con">
        <h2><?php echo $g5['title']; ?> 목록</h2>
        <ol>
            <?php
            foreach($faq_list as $key=>$v){
                if(empty($v))
                    continue;
            ?>
            <li>
            <a href="#none" onclick="return faq_open(this);" class="on">
            <h3>Q. <?php echo conv_content($v['fa_subject'], 1); ?></h3>
                <img src="<?php echo G5_IMG_URL ?>/ico_faq_arrow.svg"></a>
                <div class="con_inner">
                    
                    <?php echo conv_content($v['fa_content'], 1); ?>
                    <!-- <div class="con_closer"><button type="button" class="closer_btn">닫기</button></div> -->
                </div>
            </li>
            <?php
            }
            ?>
        </ol>
    </section>
    <?php

    } else {
        if($stx){
            echo '<p class="empty_list">검색된 게시물이 없습니다.</p>';
        } else {
            echo '<div class="empty_table">등록된 FAQ가 없습니다.';
            if($is_admin)
                echo '<br><a href="'.G5_ADMIN_URL.'/faqmasterlist.php">FAQ를 새로 등록하시려면 FAQ관리</a> 메뉴를 이용하십시오.';
            echo '</div>';
        }
    }
    ?>
</div>

</div>

<?php echo get_paging($page_rows, $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>

<?php
// 하단 HTML
echo '<div id="faq_thtml">'.conv_content($fm['fm_mobile_tail_html'], 1).'</div>';
?>


<!-- } FAQ 끝 -->

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<script>
$(function() {
    $(".con_inner").hide();
    $(".closer_btn").on("click", function() {
        $(this).closest(".con_inner").slideToggle();
    });
});

$("#faq_con ol li > a").on("click", function(){
    $(this).toggleClass("on").parent().siblings().find("a").addClass("on")
    $(this).siblings(".con_inner").slideToggle().parent().siblings().find(".con_inner").slideUp();
})

function faq_open(el)
{
    // var $con = $(el).closest("li").find(".con_inner");


    // if($con.is(":visible")) {
    //     $con.slideUp();
    //     $(el).addClass("on");
    //     console.log(true)
    //     // $("#faq_con li a img").css({transform:"rotate(180deg)"})
    //     console.log(el)
    // } else {
    //     console.log(false)
    //     $(el).removeClass("on");
    //     $("#faq_con .con_inner:visible").slideUp();

    //     $con.slideDown(
    //         function() {
    //             // 이미지 리사이즈
    //             $con.viewimageresize2();
    //         }
    //     );
    // }

    // return false;
}


//영문
if(localStorage.getItem("lang") == "en"){
    $("#detail_main.faq h1").html("Contact")
    $(".faq_tab li").eq(0).html("FAQs")
    $(".faq_tab li").eq(1).find("a").html("Q&A")
    $(".empty_table").html("No FAQs registered.<br>To register a new FAQ, use the Manage FAQs menu.")
    $(".frm_input.sch_input").attr("placeholder", "Please enter a search term.")
    $("#sfl option").eq(0).html("title")
}
</script>