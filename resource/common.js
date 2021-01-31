/* top-menu-bar moving jQuery */
function scroll__move() {
    $(document).ready(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var section_height = $('.home-section').height();
            var section_skill = $('.skill-section > .section-title').height();
            var section_3_mobile = $('#section-3 > .mobile-view > .skill-box').height();

            //pc-view
            if (scroll > section_height - 10) {
                $('.top-menu-bar').css('margin-top', '0');
            } else {
                $('.top-menu-bar').css('margin-top', '-50px');
            }
            if (scroll > section_skill + 10) {
                $('#section-3>.skill-section>.skill-box>nav>ul>li>.graph').addClass('active');
            } else {
                return;
            }
            //mobile
            if (scroll > section_height + 10) {
                $('.mobile-top-menu-bar').css('top', '0');
            } else {
                $('.mobile-top-menu-bar').css('top', '-40px');
            }
            if (scroll > section_3_mobile + 10) {
                $('#section-3 > .mobile-view > .skill-box > nav > ul > li > .graph').addClass('active');
            } else {
                return;
            }
        })
    })
}
/* portfolio-work-list grid */

/* has-class */
function has_Class() {
    $('.mobile-top-menu-bar > .bars-btn').click(function () {
        var $btn = $('.mobile-top-menu-bar > .bars-btn');
        var $menu_bar = $('.mobile-top-menu-bar > nav');
        if ($btn.hasClass('active')) {
            $btn.removeClass('active');
            $menu_bar.removeClass('active');
        } else {
            $btn.addClass('active');
            $menu_bar.addClass('active');
        }
    });

    
    /* mobile-link-list */
    $('#section-4 > .mobile-view > .portfolio-work > ul > li').click(function(){
        
        var $link_list = $('#section-4 > .mobile-view > .portfolio-work > ul > li > div > .item-box > .link-list');
        
        $link_list.removeClass('active');
        $(this).find(' > div > .item-box > .link-list').addClass('active');

        mobile_tab_menu_list__arrange();
    });
    
};
/* scroll-guide-btn moving jQuery */
function guide_arrow() {
    setInterval(function () {
        $('#section-1>.home-section>.scroll-guide').animate({
            bottom: 55 + "px"
        });
        $('#section-1>.home-section>.scroll-guide').animate({
            bottom: 50 + "px"
        }, 400, );
        $('#section-1>.mobile-view>.scroll-guide').animate({
            bottom: 55 + "px"
        });
        $('#section-1>.mobile-view>.scroll-guide').animate({
            bottom: 50 + "px"
        }, 400, );
    });
};


function scroll_move(no) {
    var offset = $('#section-' + no).offset();
    var $btn = $('.mobile-top-menu-bar > .bars-btn');
    var $menu_bar = $('.mobile-top-menu-bar > nav');
    $('html').animate({
        scrollTop: offset.top
    }, 450);
    $btn.removeClass('active');
    $menu_bar.removeClass('active');
};

function guide_btn() {
    var offset_2 = $('#section-2').offset();
    $('#section-1>.home-section>.scroll-guide').click(function () {
        $('html').animate({
            scrollTop: offset_2.top
        }, 450);
    });
    $('#section-1>.mobile-view>.scroll-guide').click(function () {
        $('html').animate({
            scrollTop: offset_2.top
        }, 450);
    });
}
/* 
//portfolio-work popup
function portfolio_Item_Popup() {
   $('#section-4>.portfolio-section>.portfolio-work>ul>li>.img').click(function(){
       $(this).parent().find('> .popup').addClass('active');
       $('.popup-background').addClass('active');
   });
    $('#section-4>.portfolio-section>.portfolio-work>ul>li>.popup>.close-btn').click(function(){
        $(this).parent().removeClass('active');
        $('.popup-background').removeClass('active');
    });
}
*/
/* portfolio-work popup*/
function portfolio_Item_Popup() {
    $('#section-4>.portfolio-section>.portfolio-work>ul>li>.clone>.img').click(function () {
        var $popup = $(this).parent().find('>.popup');
        $popup.addClass('active');
        $('.popup-background').addClass('active');
    });
    $('.clone>.popup>.close-btn').click(function () {
        var $popup = $('#section-4>.portfolio-section>.portfolio-work>ul>li>.clone>.popup');
        $popup.removeClass('active');
        $('.popup-background').removeClass('active');
    });
}
/* tab-menu */
function tab_menu() {
    $('#section-4>.portfolio-section>.portfolio-work>ul>li>.origin').each(function (index, el) {
        var $origin = $(el);
        var $cell = $origin.parent();
        var $clone = $origin.clone();

        $clone.removeClass('origin').addClass('clone');
        $cell.append($clone);
    });
    $('#section-4>.portfolio-section>.portfolio-work>ul>li').addClass('active');
    $('#section-4> .portfolio-section > .tab-menu > ul > .all').click(function () {
        var $active_list = $('#section-4 > .portfolio-section > .portfolio-work > ul > li');
        var $active_btn = $('#section-4> .portfolio-section > .tab-menu > ul').find('> .active');

        $active_list.addClass('active');
        $active_btn.removeClass('active');
        $(this).addClass('active');

        tab_menu_list__arrange();
    });
    $('#section-4> .portfolio-section > .tab-menu > ul > .rede').click(function () {
        var $active_list = $('#section-4 > .portfolio-section > .portfolio-work > ul> li');
        var $active_btn = $('#section-4> .portfolio-section > .tab-menu > ul').find('> .active');
        var $rede = $('#section-4 > .portfolio-section > .portfolio-work > ul').find('> .rede');

        $active_list.removeClass('active');
        $rede.addClass('active');
        $active_btn.removeClass('active');
        $(this).addClass('active');

        tab_menu_list__arrange();
    });
    $('#section-4> .portfolio-section > .tab-menu > ul >.res').click(function () {
        var $active_list = $('#section-4 > .portfolio-section > .portfolio-work > ul> li');
        var $active_btn = $('#section-4> .portfolio-section > .tab-menu > ul').find('> .active');
        var $res = $('#section-4 > .portfolio-section > .portfolio-work > ul').find('> .res');

        $active_list.removeClass('active');
        $res.addClass('active');
        $active_btn.removeClass('active');
        $(this).addClass('active');

        tab_menu_list__arrange();
    });
};

function tab_menu_list__arrange() {
    $('#section-4>.portfolio-section>.portfolio-work>ul>li>.clone').each(function (index, el) {
        var $clone = $(el);
        var $cell = $clone.parent();
        var $origin = $clone.prev();

        var width = $origin.width();
        var top = $origin.position().top;
        var left = $origin.position().left;


        $clone.stop().animate({
            width: width + "px",
            left: left + "px",
            top: top + "px",


        }, 300);
    });
}
$(window).resize(tab_menu_list__arrange,mobile_tab_menu_list__arrange);

window.onload = function () {
    $(window).ready(tab_menu_list__arrange,mobile_tab_menu_list__arrange);
}
/* mobile-view */
function mobile_tab_menu() {

    $('#section-4 > .mobile-view > .portfolio-work > ul > li >.mobile-origin').each(function (index, el) {
        var $origin = $(el);
        var $cell = $origin.parent();
        var $clone = $origin.clone();

        $clone.removeClass('mobile-origin').addClass('clone');
        $cell.append($clone);
    });
    $active_web = $('#section-4 > .mobile-view > .tab-menu-btn > ul > .web');
    $active_mobile = $('#section-4 > .mobile-view > .tab-menu-btn > ul > .mobile');
    $web = $('#section-4 > .mobile-view > .portfolio-work > ul > .web');
    $mobile = $('#section-4 > .mobile-view > .portfolio-work > ul > .mobile');
    $('#section-4 > .mobile-view > .tab-menu-btn > ul > .web').click(function () {
        $mobile.removeClass('active');
        $web.addClass('active');
        $active_mobile.removeClass('active');
        $(this).addClass('active');

        mobile_tab_menu_list__arrange();
    });
    $('#section-4 > .mobile-view > .tab-menu-btn > ul > .mobile').click(function () {
        $web.removeClass('active');
        $mobile.addClass('active');
        $active_web.removeClass('active');
        $(this).addClass('active');

        mobile_tab_menu_list__arrange();
    });

}
function mobile_tab_menu_list__arrange() {
    $('#section-4 > .mobile-view > .portfolio-work > ul > li>.clone').each(function (index, el) {
        var $clone = $(el);
        var $cell = $clone.parent();
        var $origin = $clone.prev();

        var width = $origin.width();
        var top = $origin.position().top;
        var left = $origin.position().left;


        $clone.stop().animate({
            width: width + "px",
            left: left + "px",
            top: top + "px",


        }, 300);
    });
}
/* 이메일보내기 */

function sendEmailFormSubmit(form) {
    if (form.receiverName.value.length == 0) {
        alert('폼안에 receiverName 의 value 를 입력해주세요.');
        return false;
    }

    if (form.receiverEmail.value.length == 0) {
        alert('폼안에 receiverEmail 의 value 를 입력해주세요.');
        return false;
    }

    form.senderName.value = form.senderName.value.trim();

    if (form.senderName.value.length == 0) {
        alert('보내는 분의 이름을 입력해주세요.');
        form.senderName.focus();
        return false;
    }

    form.senderEmail.value = form.senderEmail.value.trim();

    if (form.senderEmail.value.length == 0) {
        alert('보내는 분의 이메일을 입력해주세요.');
        form.senderEmail.focus();
        return false;
    }

    form.body.value = form.body.value.trim();

    if (form.body.value.length == 0) {
        alert('내용을 입력해주세요.');
        form.body.focus();
        return false;
    }

    var senderName = form.senderName.value;
    var senderEmail = form.senderEmail.value;
    var title = '[이력서 보고 연락 드립니다]';
    var body = nl2br(form.body.value);
    var receiverName = form.receiverName.value;
    var receiverEmail = form.receiverEmail.value;

    var url = 'https://email.oa.gg/doSendEmail2.php?senderName=' + senderName + '&senderEmail=' + senderEmail + '&receiverName=' + receiverName + '&receiverEmail=' + receiverEmail + '&title=' + title + '&body=' + body;

    //console.log("URL : " + url);

    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    head.appendChild(script);
}

function nl2br(str) {
    return str.replace(/\n/g, "<br />");
}

function Email__callback(data) {
    if (data.resultCode.substr(0, 2) == 'S-') {
        document.sendEmailForm.reset();
    }

    alert(data.msg);
}


/* graph */
/* 
function graph() {
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var scrollPosition = $('.skill-section').height();

        if (scrollTop = scrollPosition - 10) {
            draw(70, '#html> .item-box', '#000');
            draw(70, '#css> .item-box', '#000');
            draw(30, '#javascript> .item-box', '#000');
            draw(30, '#jquery> .item-box', '#000');
            draw(70, '#photoshop> .item-box', '#000');
            draw(70, '#illustrator> .item-box', '#000');
            draw(70, '#lightroom> .item-box', '#000');
        }
        else {
            return;
        }
    });


    function draw(max, classname, colorname) {
        var i = 1;
        var func1 = setInterval(function () {
            if (i < max) {
                color1(i, classname, colorname);
                i++;
            } else {
                clearInterval(func1);
            }
        }, 10);
    }

    function color1(i, classname, colorname) {
        $(classname).css({
            "background": "conic-gradient(" + colorname + " 0% " + i + "%, #ffffff " + i + "% 100%)"
        });
    }
}
*/

$(function () {
    scroll__move();
    guide_arrow();
    guide_btn();
    has_Class();
    tab_menu_list__arrange();
    tab_menu();
    mobile_tab_menu();
    mobile_tab_menu_list__arrange();
    portfolio_Item_Popup();
})