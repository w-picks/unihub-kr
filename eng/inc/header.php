<header id="hd" class="top">
    <h1 id="hd_h1">그누보드5</h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
});
</script>
<!-- } 팝업레이어 끝 -->
 

    <div id="hd_wrapper">
            
            <div id="gnb">
                <ul id="gnb_1dul">
                                    <li class="gnb_1dli">
                        <a href="/bbs/content.php?co_id=company" target="_self" class="gnb_1da">회사소개</a>
                                            </li>
                                    <li class="gnb_1dli">
                        <a href="/bbs/content.php?co_id=about_subsidiary" target="_self" class="gnb_1da">포트폴리오</a>
                                            </li>
                                    <li class="gnb_1dli">
                        <a href="/bbs/board.php?bo_table=notice" target="_self" class="gnb_1da">새소식</a>
                        <button type="button" class="btn_gnb_op" style="display:none;">하위분류</button><ul class="gnb_2dul">
                            <li class="gnb_2dli"><a href="/bbs/board.php?bo_table=notice" target="_self" class="gnb_2da"><span></span>공지사항</a></li>
                                                    <li class="gnb_2dli"><a href="/bbs/board.php?bo_table=broadcast" target="_self" class="gnb_2da"><span></span>보도자료</a></li>
                        </ul>
                    </li>
                                </ul>

            </div>
            <div id="logo">
                <a href="http://localhost:3030"><img src="http://localhost:3030/img/unihub_logo.png" alt="그누보드5" class="default_logo"><img src="http://localhost:3030/img/unihub_logo_b.png" alt="그누보드5" class="hover_logo"></a>
            </div>
        <div id="hd_btn">
            <button type="button" class="hd_menu_btn" style="display: none;"><span class="menu-icon"></span><span class="sound_only">전체메뉴</span></button>
            <!-- <button type="button" class="hd_sch_btn"><span class="search-icon"></span><span class="sound_only">검색열기</span></button> -->
            <div class="ol">
    <button type="button" class="prf_btn">마이페이지</button>  
     <ul id="ol_after_private">
        <!-- <li>
            <a href="http://localhost:3030/bbs/memo.php" target="_blank" class="win_memo">쪽지
                <strong>0</strong>
            </a>
        </li>
        <li>
            <a href="http://localhost:3030/bbs/point.php" target="_blank"  class="win_point">포인트
                <strong>0</strong>
            </a>
        </li>
        <li><a href="http://localhost:3030/bbs/scrap.php" target="_blank"  class="win_scrap">스크랩</a> </li> -->
        <li><a href="http://localhost:3030/bbs/member_confirm.php?url=register_form.php" title="정보수정">정보수정</a></li>
        <!-- ideahub 나의 투자 -->
        <li><a href="http://localhost:3030/bbs/board.php?bo_table=my_investment" title="나의 투자">나의 투자</a></li>
        <li><a href="http://localhost:3030/bbs/logout.php">로그아웃</a> </li>
        <li></li>
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
        </script>
        
    </div>

    <div id="al_menu">
        <div class="bg"></div>
        <div class="menu_wr">
            <ul id="menu">
                            <li class="menu_li">
                    <!-- <h2><a href="/bbs/content.php?co_id=company" target="_self" class="menu_a">회사소개</a></h2> -->
                    <h2>회사소개</h2>
                                    </li>
                            <li class="menu_li">
                    <!-- <h2><a href="/bbs/content.php?co_id=about_subsidiary" target="_self" class="menu_a">포트폴리오</a></h2> -->
                    <h2>포트폴리오</h2>
                                    </li>
                            <li class="menu_li">
                    <!-- <h2><a href="/bbs/board.php?bo_table=notice" target="_self" class="menu_a">새소식</a></h2> -->
                    <h2>새소식</h2>
                    <button type="button" class="btn_menu_op"><span class="sound_only">하위분류</span><i class="fa fa-chevron-down"></i></button><ul class="sub_menu">
                        <li class="sb_menu_li"><a href="/bbs/board.php?bo_table=notice" target="_self" class="sb_menu_a"><span></span>공지사항</a></li>
                                            <li class="sb_menu_li"><a href="/bbs/board.php?bo_table=broadcast" target="_self" class="sb_menu_a"><span></span>보도자료</a></li>
                    </ul>
                </li>
                        </ul>
            <button type="button" class="btn_close"><span class="sound_only">닫기</span></button>
            <div class="ol">
              
    <a href="http://localhost:3030/bbs/logout.php" class="btn_s logout">로그아웃</a>
      
</div>
        </div>
        <script>
        $(".menu_li h2").click(function(){
            $(this).siblings(".sub_menu").slideToggle(300);
            $(this).siblings(".btn_menu_op").toggleClass("on")
        });
        $("#al_menu .btn_close").click(function(){
            $("#al_menu").hide();
            $(".hd_menu_btn").show();
        });
        $(".hd_menu_btn").click(function(){
            $("#al_menu").show();
            $(this).hide();
        });

        if(window.innerWidth > 969){
            $(".hd_menu_btn").hide();
        }else{
            $(".hd_menu_btn").show();

        }
        
        $(window).on("resize", () => {
            if(window.innerWidth > 969){
                $(".hd_menu_btn").hide();
            }else{
                $(".hd_menu_btn").show();
            }
        })

        
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