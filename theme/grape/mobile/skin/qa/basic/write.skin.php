<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>
<section id="bo_w" class="direct_inquiry">
<section id="detail_main" class="faq">
    <h1>문의하기</h1>
</section>
<ul class="faq_tab detail_tab">
    <li class=""><a href="<?php echo G5_BBS_URL ?>/faq.php?la=kr">자주 묻는 질문</a></li>
    <li class="on"><a href="<?php echo G5_BBS_URL ?>/bbs/qawrite.php?la=kr">1:1 문의</a></li>
</ul>
    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="qa_id" value="<?php echo $qa_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="token" value="<?php echo $token ?>">
    <?php
    $option = '';
    $option_hidden = '';
    $option = '';

    if ($is_dhtml_editor) {
        $option_hidden .= '<input type="hidden" name="qa_html" value="1">';
    } else {
        $option .= "\n".'<input type="checkbox" id="qa_html" name="qa_html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="qa_html">html</label>';
    }

    echo $option_hidden;
    ?>
<h1>궁금한 점/의견을 남겨주시면<br>빠른 시일 내에 이메일로 답변 드리겠습니다.</h1>
    <div class="form_01">
        <ul>
            <!-- <?php if ($category_option) { ?>
            <li>
                <label for="qa_category" class="sound_only">분류<strong>필수</strong></label>
                <select name="qa_category" id="qa_category" required class="required" >
                    <option value="">선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </li>
            <?php } ?> -->

            <?php if ($option) { ?>
            <!-- <li>
                <span class="sound_only">옵션</span>
                <?php echo $option; ?>
            </li> -->
            <?php } ?>

 
            <!-- 
                ideahub 1:1문의하기
                필드 추가
             -->
             <li class="name_li">
                <label for="qa_1" class="sound_only">이름</label>
                <input type="text" name="qa_1" value="<?php echo get_text($write['qa_1']); ?>" id="qa_1" required class="frm_input required" maxlength="100" placeholder="이름을 입력하세요.">
            </li>
            <?php if ($is_email) { ?>
            <li class="email_li">
                <label for="qa_email" class="sound_only">이메일</label>
                <input type="email" name="qa_email" value="" id="qa_email" <?php echo $req_email; ?> class="<?php echo $req_email.' '; ?>frm_input full_input email required" maxlength="100" placeholder="이메일을 입력하세요. (문의에 대한 답변을 이메일로)" required>
                <!-- <input type="checkbox" name="qa_email_recv" value="1" id="qa_email_recv" <?php if($write['qa_email_recv']) echo 'checked="checked"'; ?>> -->
                <!-- <label for="qa_email_recv">답변받기</label> -->
            </li>
            <?php } ?>

            <?php if ($is_hp) { ?>
            <li class="hp_li">
                <label for="qa_hp" class="sound_only">휴대폰 번호</label>
                <input type="text" name="qa_hp" value="<?php echo get_text($write['qa_hp']); ?>" id="qa_hp" <?php echo $req_hp; ?> class="<?php echo $req_hp.' '; ?>frm_input full_input required" size="30" placeholder="휴대폰 번호를 입력하세요. (숫자만)" required>
                <?php if($qaconfig['qa_use_sms']) { ?>
                <input type="checkbox" name="qa_sms_recv" value="1" <?php if($write['qa_sms_recv']) echo 'checked="checked"'; ?>> 답변등록 SMS알림 수신
                <?php } ?>
            </li>
            <?php } ?>

            <li class="subject_li">
                <label for="qa_subject" class="sound_only">제목</label>
                <input type="text" name="qa_subject" value="<?php echo get_text($write['qa_subject']); ?>" id="qa_subject" required class="frm_input required" maxlength="255" placeholder="제목을 입력하세요. (최대 30자 이내)">
            </li>

            <li class="qa_content_li">
               <label for="qa_content" class="sound_only">문의 내용</label>
                <!-- <div class="wr_content">
                    <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                </div> -->
                <textarea placeholder="내용을 입력하세요. (최소 10자 이상)" required class="required"></textarea>
            </li>

            <li class="bo_w_flie">
                <label>파일 첨부하기</label>
                <div class="file_wr">
                    <input type="text"  readonly placeholder="최대 10MB"/>
                    <!-- <span class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">파일 #1</span></span> -->
                    <label for="file_upload" class="file_btn">파일 업로드</label>
                    <input type="file" name="bf_file[1]" title="파일첨부 1 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능" class="frm_file" id="file_upload">
                    <?php if($w == 'u' && $write['qa_file1']) { ?>
                    <!-- <input type="checkbox" id="bf_file_del1" name="bf_file_del[1]" value="1"> <label for="bf_file_del1"><?php echo $write['qa_source1']; ?> 파일 삭제</label> -->
                    <?php } ?>
                </div>
            </li>

            <!-- <li class="bo_w_flie">
                <div class="file_wr">
                    <span class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">파일 #2</span></span>
                    <input type="file" name="bf_file[2]" title="파일첨부 2 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능" class="frm_file">
                    <?php if($w == 'u' && $write['qa_file2']) { ?>
                    <input type="checkbox" id="bf_file_del2" name="bf_file_del[2]" value="1"> <label for="bf_file_del2"><?php echo $write['qa_source2']; ?> 파일 삭제</label>
                    <?php } ?>
                </div>
            </li> -->
            <li class="all_chk_option">
                <input type="checkbox" id="all_chk"/>
                <label for="all_chk" class="all_chk_label">개인정보 수집 이용에 동의</label>
                <div>
                <span>목적 문의</span> : 답변<span>제공 항목</span> : 이름,이메일 및 휴대폰번호<br class="br_mo"><span>보유기간</span> : 제출 후 30일
                </div>
            </li>

        </ul>
    </div>

    <div class="write_div">
        <!-- <a href="<?php echo $list_href; ?>" class="btn btn_b01">목록</a> -->
        <button type="submit" value="제출하기" id="btn_submit" accesskey="s" class="btn btn_submit">제출하기</button>
    </div>
    </form>

    <script>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "2";
            else
                obj.value = "1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.qa_subject.value,
                "content": f.qa_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.qa_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_qa_content) != "undefined")
                ed_qa_content.returnFalse();
            else
                f.qa_content.focus();
            return false;
        }

        <?php if ($is_hp) { ?>
        var hp = f.qa_hp.value.replace(/[0-9\-]/g, "");
        if(hp.length > 0) {
            alert("휴대폰번호는 숫자, - 으로만 입력해 주십시오.");
            return false;
        }
        <?php } ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }

    //input filename custom
    $("#file_upload").on("change", ()=>{
        let fileval = $("#file_upload").val();
        $(".file_wr input[type='text']").val(fileval);
    })

    if(localStorage.getItem("lang") == "en"){
    $("#detail_main.faq h1").html("Contact")
    $(".faq_tab li").eq(0).find("a").html("FAQs")
    $(".faq_tab li").eq(0).find("a").attr('href', '<?php echo G5_BBS_URL ?>/faq.php?la=en')
    $(".faq_tab li").eq(1).html("Q&A")
    $(".faq_tab li").eq(1).find("a").attr('href', '<?php echo G5_BBS_URL ?>/qawrite.php?la=en')
    $(".direct_inquiry #fwrite h1").html("If you leave any questions/comments,<br>I will reply to you via email as soon as possible")
    $(".name_li label").html("Name")
    $(".name_li input").attr('placeholder','First and last name')
    $(".email_li label").html("Email")
    $(".email_li input").attr('placeholder','')
    $(".hp_li label").html("Phone")
    $(".hp_li input").attr('placeholder','')
    $(".subject_li label").html("Title")
    $(".subject_li input").attr('placeholder','Up to 30 characters.')
    $(".qa_content_li label").html("Content")
    $(".qa_content_li textarea").attr('placeholder','At least 10 characters.')
    $(".bo_w_flie label").html("Attachment")
    $(".bo_w_flie input").attr('placeholder','Up to 10MB')
    $(".all_chk_option label").html("Agree to collect and use personal information")
    $(".all_chk_option div").html("<span>Purpose inquiry</span> : Provide answers <span>Item</span> : Name, email, and mobile phone number <span>Holding period</span> : 30 days after submission")
    $("#btn_submit").html("Submit")
    console.log("eee");
    // $(".gnb_1dli").eq(0).html('<a href="/eng/about" target="_self" class="gnb_1da">About</a>')
    $("#gnb").html(`
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

    `)

    $("#hd_btn .ol").html(`
    <button class="contact_us" style="margin-left:16px;" onclick="window.location.href='/bbs/faq.php?la=en'">Contact</button> 
    <a href="/" style="border-right:1px solid #8496ba; height:10px; line-height:10px;">kr</a>
    <a href="/eng" style="height:10px; line-height:10px;">en</a>

    `)

    $("head link").eq(0).after('<link rel="stylesheet" href="/eng/css/common.css">');
}

    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->