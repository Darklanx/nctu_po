'use strict';
// 建置中
$(function () {
    $("#nav6").click(e => {
        window.open('http://personnel.nctu.edu.tw/time_clock.php','_blank');
    })
})

$(function () {
    $("#nav7").click(e => {
        window.open('http://personnel.nctu.edu.tw/faq.php','_blank');
    })
})

$(function () {
    $(".pic1 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/condition.php','_blank');
    })
})

$(function () {
    $(".pic2 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/foreign.php','_blank');
    })
})

$(function () {
    $(".pic3 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/pluralism.php','_blank');
    })
})

$(function () {
    $(".pic4 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/adjunct_assistant.html','_blank');
    })
})

$(function () {
    $(".pic5 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/promotion.html','_blank');
    })
})

$(function () {
    $(".pic6 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/retire.php','_blank');
    })
})

$(function () {
    $(".pic7 .buttom-icon").click(e => {
        window.open('http://personnel.nctu.edu.tw/ac.php','_blank');
    })
})

var bgmask = 0;
// nav hover 展開2個直角梯形
var navOffClickable = 0; // 用來檢查是否該關閉nav
$(document).ready(function () {
    $('div.top').hover(function () {
        var _this = this;
        $(this).click(function () {
            //clock
            if (_this.id == 'top_6') {
                return;
            }
            $(_this).find('div[class^="navbox"]').show();
            $(_this).addClass("hover");
            $(".left-side-bar-bg").hide();
            if (bgmask == 1) {
                $(".right-bg").hide();
            }
        });
    }, function () {
        navOffClickable = 1;
    });
    $("*").click(() => {
        if (!navOffClickable)
            return;
        //留言板預設行
        $("#navboxrw7_1").css('display', 'inline-block');
        $(".msg-board-question, .msg-board-answer").css('display', 'none');
        $("[class*=question]").css('color', '#f4a22c');
        if (commentHighlight) {
            commentHighlight.css('color', '#f4a22c');
        }
        //
        $("div.top").find('div[class^="navbox"]').hide();
        $("div.top").removeClass("hover");
        $(".left-side-bar-bg").show();
        if (bgmask == 1) {
            $(".right-bg").show();
        }
        navOffClickable = 0;
    })

    $("#navboxw7_11").click(function () {
        window.open('http://personnel.nctu.edu.tw/guestbook.php', '_blank');
    });
});

// nav click 展開2個直角梯形
/*
$(document).ready(function () {
    $('div.top').click(function () {
        // 點擊別的不會衝突 
        sibling = $(this).siblings(".click1")
        if (sibling) {
            sibling.find('div[class^="navbox"]').hide();//div classname started with navbox
            sibling.removeClass("click1");
            sibling.find('div[id^="nav"]').removeClass("click1");
        }
        // 點擊show&hide
        if ($(this).hasClass("click1")) {
            $(this).find('div[class^="navbox"]').hide();
            $(this).removeClass("click1");
            $(this).find('div[id^="nav"]').removeClass("click1");
        } else {

            $(this).find('div[class^="navbox"]').show();
            $(this).addClass("click1");
            $(this).find('div[id^="nav"]').addClass("click1");
        }
    });
});
*/

//left-side-bar
$(function () {
    $(".left-side-bar-element").hover(function () {
        $(this).css('cursor', 'pointer');
    });

    var highlight = void 0;
    $(".left-side-bar-element").click(function () {
        bgmask = 1;
        if (highlight) {
            highlight.css('color', '#f4a22c');
        }

        highlight = $(this);
        $("#close-button").css("display", 'block');
        $(this).css("color", "#FFFFFF");
        $(".right-bg").css("display", "inline");
        //顯示 {重要訊息} 內容
        if (this.id == "important-msgs") {
            $(".important-msgs").css("display", 'block');
        } else {
            $(".important-msgs").css("display", 'none');
        }
        //顯示 {業務訊息} 內容
        if (this.id == "business-msgs") {
            $(".business-msgs").css("display", 'block');
        } else {
            $(".business-msgs").css("display", 'none');
        }
        //顯示 {法規訊息} 內容
        if (this.id == "legislation-msgs") {
            $(".legislation-msgs").css("display", 'block');
        } else {
            $(".legislation-msgs").css("display", 'none');
        }
        //顯示 {友校訊息} 內容
        if (this.id == "friendSchools-msgs") {
            $(".friendSchools-msgs").css("display", 'block');
        } else {
            $(".friendSchools-msgs").css("display", 'none');
        }
        if (this.id == "calendar-msgs") {
            $("#msg-calender").css("display", 'block');
        } else {
            $("#msg-calender").css("display", 'none');
        }
        if (this.id == "insurance-msgs") {
            $(".insurance-msgs").css("display", 'block');
        } else {
            $(".insurance-msgs").css("display", 'none');
        }
    });

    $("#close-button").click(function () {
        highlight.css('color', '#f4a22c');
        $(".right-bg").css("display", "none");
        $("#close-button").css("display", 'none');
        bgmask = 0;
    });

    //行事曆
});

var commentHighlight = void 0;
//留言板
$(function () {
    var highlight = void 0;
    $(".navbox7-left").hover(function () {
        $(this).css('cursor', 'pointer');
    });
    function comments_hide() {
        $('.msg-board-question').hide();
        $('[class*=answer]').hide();
    }
    $(".navbox7-left").click(function () {
        $("#navboxrw7_1").css('display', 'none');
        if (commentHighlight) {
            commentHighlight.css('color', '#f4a22c');
        }
        comments_hide();
        switch (this.id) {
            //出國申請
            case 'navboxw7_1':
                $('.msg-board-question.abroad').css('display', 'block');
                break;
            //全時工讀生
            case 'navboxw7_2':
                $('.msg-board-question.part-time').css('display', 'block');
                break;
            //其他問題
            case 'navboxw7_3':
                $('.msg-board-question.other-questions').css('display', 'block');
                break;
            //研發替代役
            case 'navboxw7_4':
                $('.msg-board-question.AMS').css('display', 'block');
                break;
            //約用人員
            case 'navboxw7_5':
                $('.msg-board-question.personnel').css('display', 'block');
                break;
            //差勤
            case 'navboxw7_6':
                $('.msg-board-question.errand').css('display', 'block');
                break;
            //專兼任計畫人員
            case 'navboxw7_7':
                $('.msg-board-question.specialist').css('display', 'block');
                break;
            //專兼任教師
            case 'navboxw7_8':
                $('.msg-board-question.teachers').css('display', 'block');
                break;
            //博士後研究員
            case 'navboxw7_9':
                $('.msg-board-question.postdoctoral').css('display', 'block');
                break;
            //離職問題
            case 'navboxw7_10':
                $('.msg-board-question.resignation').css('display', 'block');
                break;
            default:
            //alert(this.id);
        }

        commentHighlight = $(this);
        $(this).css("color", "#FFFFFF");
    });

    // question clicked => show answer
    //var x = $(e.target).attr('class').toString().match(/g1m\d+_\d+/);
    //return this.id == x;
    var QA_types = ["abroad", "part-time", "other-questions", "AMS", "personnel", "errand", "specialist", "teachers", "postdoctoral", "resignation"];
    $("[class*=question]").click(function (e) {
        if ($(e.target).attr('class').toString().match(/answer/)) return;
        $(".msg-board-answer").hide();
        $(".msg-board-question ").css('color', '#f4a22c');
        $(e.target).css('color', '#FFFFFF');
        target_class = $(e.target).attr('class').toString();
        for (i = 0; i < QA_types.length; i++) {
            if (target_class.includes(QA_types[i])) {
                type = QA_types[i];
                break;
            }
        }
        var id = target_class.match(/question\d+/)[0].replace("question", "");

        var answer_class = "answer" + id;
        $("." + answer_class + "." + type).show();
    });
});

//class mouse-hover change cursor
// $(function () {
//     $(".mouse-hover").hover(function () {
//         $(this).css('cursor', 'pointer');
//     });
// });

//法令類別
$(function () {
    var personnel = null; //用來判斷現在點選哪個人員
    var S = null; // 用來判斷現在點選哪個類別

    $("#prev-page").click(function (e) {
        $('decree-main-container').show();
        $("#decree-left-flexbox").hide();
        $("#decree-right-details-container").hide();
        $(".decree-item").css("color", "#F4A22C");
        $("#decree-category").hide();
        S = null;
        personnel = null;
    });
    function showDetails() {
        //顯示細項
        if (personnel === null || S === null) {
            return;
        }
        $(".decree-details").hide();
        $("." + personnel + "." + S).show();
        $("#decree-left-flexbox").css('display', 'flex');
        //$("#decree-right-flexbox").css('display', 'flex');
        $("#decree-right-details-container").css('display', 'flex');
        //第二層法條顯示
        $('decree-main-container').hide();
        $('.main' + S.substr(1)).show();
    }

    $(".personnels").click(function (e) {
        $(".personnels").css('color', '#F4A22C');
        var personnel_type = event.target.id;
        $(event.target).css('color', 'white');
        if (personnel_type < 1 || personnel_type > 3) {
            return;
        }
        personnel = personnel_type;
        $("#decree-category").show();
        showDetails();
    });

    $(".decree-main").click(function (e) {
        var sType = event.target.id;
        var re = /S{1}/;
        if (re.test(sType)) S = sType; else return;
        $(".decree-main").css('color', '#F4A22C');
        $(event.target).css('color', 'white');
        showDetails();
    });

    //法條點選後 右邊decree-right顯示
    $(".decree-detail-articles").click(function (e) {
        $(".decree-detail-articles").css('color', '#F4A22C');
        $(event.target).css('color', 'white');
        var all_classes = $(event.target).attr("class");
        var clicked_postid = all_classes.match(/post_\w+/)[0];
        //console.log(clicked_postid);
        $('.decree-right-item-container').hide();
        $('.decree-right-item-container' + ('.' + clicked_postid)).first().show();
    });
});

//關於本室右邊選項click
$(function () {
    $("div[id^='navboxw1_2_']").click(function (e) {
        //$("#navboxw1").hide();
        //$("#navboxw1_2").hide();
    });
});

// 本室介紹下各頁面
$(function () {
    function change_css(DOMstring, css) {
        $(DOMstring).css(css);
    }
    function intro_hide_others() {
        $("#intro_page").hide();
        $("#vision_page").hide();
        $("#intro_position").hide();
        $("#jobs_page").hide();
    }
    var new_css = { "position": "fixed", "top": "40%" }; // 移動簡介選單
    $("#navboxw1_2_1").click(function () {
        intro_hide_others();
        $("#intro_page").show();
        change_css("#navboxw1_2", new_css);
    });
    $("#navboxw1_2_4").click(function () {
        intro_hide_others();
        $("#vision_page").show();
        change_css("#navboxw1_2", new_css);
    });
    $("#navboxw1_2_2").click(function () {
        intro_hide_others();
        $("#intro_position").show();
        change_css("#navboxw1_2", new_css);
    });
    $("#navboxw1_2_3").click(function () {
        intro_hide_others();
        $("#jobs_page").show();
        change_css("#navboxw1_2", new_css);
    });
});

//簡介區的圓圈
$(document).ready(function () {
    $('div.h1').hover(function () {
        $('.cb1').show();
    }, function () {
        $('.cb1').hide();
    });
});

$(document).ready(function () {
    $('div.h2').hover(function () {
        $('.cb2').show();
    }, function () {
        $('.cb2').hide();
    });
});

$(document).ready(function () {
    $('div.h3').hover(function () {
        $('.core-value-context').show();
        $('.cb3').show();
        $('.circle3-1').show();
        $(".cb3-title").show();
    }, function () {
        $('.core-value-context').hide();
        $('.cb3').hide();
        $('.circle3-1').hide();
        $(".cb3-title").hide();
    });
});

$(document).ready(function () {
    $('div.h4').hover(function () {
        $('.cb4').show();
    }, function () {
        $('.cb4').hide();
    });
});

//本室位置
$(function () {
    //本室位置 slider bar control
    $("#school_map_circle").click(function (e) {
        $(".position_page").hide();
        $(".position_page.pp1").show();
        $(".position-circle").removeClass('solid-circle');
        $(e.target).addClass('solid-circle');
    });
    $("#google_map_circle").click(function (e) {
        $(".position_page").hide();
        $(".position_page.pp2").show();
        $(".position-circle").removeClass('solid-circle');
        $(e.target).addClass('solid-circle');
    });
    $("#transport_circle").click(function (e) {
        $(".position_page").hide();
        $(".position_page.pp3").show();
        $(".position-circle").removeClass('solid-circle');
        $(e.target).addClass('solid-circle');
    });
    //  圖片放大
    $("#big-map").click(function (e) {
        $("#myModal").show();
        $("#img01").show();
    });
    $("#second-floor").click(function (e) {
        $("#myModal").show();
        $("#img02").show();
    });

    $("#myModal").add(".close").click(function (e) {
        $("#myModal").hide();
        $(".modal-content").hide();
    });

    // 本室位置 聯外交通資訊
    $("#head-north").click(function (e) {
        $(".pp3-right-context").hide();
        $("#head-north-context").show();
        $(".transport-title").css("color", "#f4a22c");
        $(e.target).css("color", "white");
    });
    $("#head-south").click(function (e) {
        $(".pp3-right-context").hide();
        $("#head-south-context").show();
        $(".transport-title").css("color", "#f4a22c");
        $(e.target).css("color", "white");
    });
    $("#HSR").click(function (e) {
        $(".pp3-right-context").hide();
        $("#HSR-context").show();
        $(".transport-title").css("color", "#f4a22c");
        $(e.target).css("color", "white");
    });
    $("#TRA").click(function (e) {
        $(".pp3-right-context").hide();
        $("#TRA-context").show();
        $(".transport-title").css("color", "#f4a22c");
        $(e.target).css("color", "white");
    });
    $("#caoch").click(function (e) {
        $(".pp3-right-context").hide();
        $("#caoch-context").show();
        $(".transport-title").css("color", "#f4a22c");
        $(e.target).css("color", "white");
    });
});
//人員職掌
$(function () {
    $(".staff-circle").click(function (e) {
        $(".staff-circle").removeClass("solid-circle");
        $(e.target).addClass("solid-circle");
        $('.staff-info-container').hide();
        switch (e.target.id) {
            case "director_circle":
                $("#staff-director-page").show();
                $("#staff-group-1").hide();
                $("#staff-group-2").hide();
                $("#staff-group-3").hide();
                break;

            case "first_group_circle":
                $("#staff-director-page").hide();
                $("#staff-group-1").show();
                $("#staff-group-2").hide();
                $("#staff-group-3").hide();
                $("#g1m0_0").show();
                break;
            case "second_group_circle":
                $("#staff-director-page").hide();
                $("#staff-group-1").hide();
                $("#staff-group-2").show();
                $("#staff-group-3").hide();
                $("#g2m0_0").show();
                break;
            case "third_group_circle":
                $("#staff-director-page").hide();
                $("#staff-group-1").hide();
                $("#staff-group-2").hide();
                $("#staff-group-3").show();
                break;
        }
    });
    //人士執掌資訊
    // group 1
    $("[class*=g1m]").click(function (e) {
        $('.staff-info-container').hide();
        $('.staff-info-container').filter(function () {
            var x = $(e.target).attr('class').toString().match(/g1m\d+_\d+/);
            return this.id == x;
        }).show();
    });
    // group 2
    $("[class*=g2m]").click(function (e) {
        $('.staff-info-container').hide();
        $('.staff-info-container').filter(function () {
            var x = $(e.target).attr('class').toString().match(/g2m\d+_\d+/);
            return this.id == x;
        }).show();
    });

    // 人員執掌一覽
    $(".staff-job-overview-item-container").mouseenter(function () {
        $(this).addClass('active');
    });
    $(".staff-job-overview-item-container").mouseleave(function () {
        $(this).removeClass('active');
    });

    // 換頁
    $(".staff-job-overview-dot").click(function (e) {
        // hide others
        $(".staff-job-overview-item-container").hide();
        $(".staff-job-overview-container").hide();

        // get which page
        var page = $(e.target).attr('class').toString().match(/page\d+/)[0];
        var group = $(e.target).attr('class').toString().match(/group\d+/)[0];

        // show selected
        $(".staff-job-overview-container." + group).css("display", "flex");
        $(".staff-job-overview-item-container." + page).show();

        // dot fade
        $(".staff-job-overview-dot-name,.staff-job-overview-dot").addClass('_fade');

        $(".staff-job-overview-dot." + page).removeClass('_fade');
        $(".staff-job-overview-dot-name." + page).removeClass('_fade');
    });

});