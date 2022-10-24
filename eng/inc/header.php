<link rel="stylesheet" href="/theme/grape/css/mobile.css" />
<link rel="stylesheet" href="/theme/grape/mobile/skin/outlogin/basic/style.css" />
<link rel="stylesheet" href="/js/swiper/swiper.min.css" />
<link rel="stylesheet" href="/eng/css/common.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="/js/swiper/swiper.min.js"></script>
<script src="/js/main_common.js"></script>

<header id="hd" class="top">

<div id="hd_wrapper">
            
            <div id="gnb">
                <ul id="gnb_1dul">
                                    <li class="gnb_1dli">
                        <a href="/eng/about" target="_self" class="gnb_1da">About</a>
                                            </li>
                                    <li class="gnb_1dli">
                        <a href="/eng/portfolio" target="_self" class="gnb_1da">Portfolio</a>
                                            </li>
                                    <li class="gnb_1dli">
                        <a href="/bbs/board.php?bo_table=broadcast_eng" target="_self" class="gnb_1da">News</a>
                        
                    </li>
                                </ul>

            </div>
            <div id="logo">
                <a href="<?php G5_URL ?>/eng"><div class="logo_div"></div></a>
            </div>
        <div id="hd_btn">
            <button type="button" class="hd_menu_btn" style="display: none;"><span class="menu-icon"></span><span class="sound_only">전체메뉴</span></button>
            <!-- <button type="button" class="hd_sch_btn"><span class="search-icon"></span><span class="sound_only">검색열기</span></button> -->
            <div class="ol">
    <!-- <button type="button" class="prf_btn">마이페이지</button>   -->
     <ul id="ol_after_private">
        <!-- <li>
            <a href="http://localhost:3030/bbs/memo.php" target="_blank" class="win_memo">쪽지
                <strong>0</strong>
            </a>
        </li>
        <li>
            <a href="http://localhost:3030/bbs/point.php" target="_blank"  class="win_point">포인트
                <strong>100</strong>
            </a>
        </li>
        <li><a href="http://localhost:3030/bbs/scrap.php" target="_blank"  class="win_scrap">스크랩</a> </li> -->
        <!-- <li><a href="http://localhost:3030/bbs/member_confirm.php?url=register_form.php" title="정보수정">정보수정</a></li> -->
        <!-- ideahub 나의 투자 -->
        <!-- <li><a href="http://localhost:3030/bbs/board.php?bo_table=my_investment" title="나의 투자">나의 투자</a></li> -->
        <!-- <li><a href="http://localhost:3030/bbs/logout.php">로그아웃</a> </li> -->
        <!-- <li><a href="http://localhost:3030/adm" class="admin">관리자</a></li> -->
    </ul>
    <button class="contact_us" style="margin-left:16px;" onclick="window.location.href='http://localhost:3030/bbs/faq.php'">문의하기</button>
</div>

<script>


$(".prf_btn").on("click", function() {
    $("#ol_after_private").toggle();
});

$(document).mouseup(function (e){
    var container = $("#ol_after_private");
    if( container.has(e.target).length === 0)
    container.hide();
});

</script>

        </div>
        <div id="hd_sch">
            <div class="sch_wr">
                <h2 class="sound_only">사이트 내 전체검색</h2>
                <form name="fsearchbox" action="http://localhost:3030/bbs/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" placeholder="검색어(필수)" required="" maxlength="20">
                <button type="submit" value="검색" id="sch_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>
                <button type="button" class="btn_close"><i class="fa fa-times-circle"></i><span class="sound_only">검색</span></button>
            </div>
        </div>

        

     
      <script>
        $(function () {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function() {
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
            });


            $(".btn_gnb_op").click(function(){
                $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);
                
            });

            $(".hd_closer").on("click", function() {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });

            $(".hd_sch_btn").on("click", function() {
                $("#hd_sch").show();
            });

            $("#hd_sch .btn_close").on("click", function() {
                $("#hd_sch").hide();
            });


        });

        $("header").on("mouseenter", function(){
            if(window.innerWidth > 969){
                $(this).addClass("on");
            }
        })
        $("header").on("mouseleave",function(){
            let scr = $(window).scrollTop();
            if(window.innerWidth > 969 && scr <= 10){
                $(this).removeClass("on");
            }
        })
        $(window).on("scroll",function(){
            let scr = $(this).scrollTop();
            if(scr > 10){
                $("header").addClass("on");
            }else{
                $("header").removeClass("on");
            }
        })
        </script>
        
    </div>
</header>