console.clear();

/*
setTimeout(function() {
  $(window).scrollTop(0);
}, 500);
*/
/* 관련사이트 btm-menu 커스텀 */

function site_btn() {
  $('.family-site').click(function () {

    if ($('.family-site').hasClass('active')) {
      $('.family-site').removeClass('active');
    } else {
      $('.family-site').addClass('active');
    }
  })
}
/* top-bar 스크롤 메뉴효과 커스텀 */

function main_scroll() {
  $(document).ready(function () {
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll > 1) {
        $('.top-bar').addClass('no-bar');

      } else {
        $('.top-bar').removeClass('no-bar');
      }
    })
  })
}

/* 메인동영상 text animation 커스텀 */

setTimeout(function animation_1() {
  $('.animation-1>.logo-img').css('margin-top', '0').css('opacity', '1');
}, 1000);
setTimeout(function animation_1() {
  $('.animation-1>.logo-img').css('margin-top', '-50px').css('opacity', '0');
}, 6000);

setTimeout(function animation_2() {
  $('.animation-2>.logo-img').css('margin-top', '0').css('opacity', '1');
}, 8000);
setTimeout(function animation_2() {
  $('.animation-2>.logo-img').css('margin-top', '-50px').css('opacity', '0');
}, 13000);

setTimeout(function animation_3() {
  $('.animation-3>.logo-img').css('margin-top', '0').css('opacity', '1');
}, 15000);
setTimeout(function animation_3() {
  $('.animation-3>.logo-img').css('margin-top', '-50px').css('opacity', '0');
}, 20000);

setTimeout(function animation_4() {
  $('.animation-4>.logo-img').css('margin-top', '0').css('opacity', '1');
}, 22000);
setTimeout(function animation_4() {
  $('.animation-4>.logo-img').css('margin-top', '-50px').css('opacity', '0');
}, 27000);

setTimeout(function animation_5() {
  $('.animation-5>.logo-img').css('margin-top', '0').css('opacity', '1');
}, 29000);
setTimeout(function animation_5() {
  $('.animation-5>.logo-img').css('margin-top', '-50px').css('opacity', '0');
}, 34000);

setTimeout(function animation_6() {
  $('.animation-6').css('opacity', '1');
}, 34000);
setTimeout(function animation_6() {
  $('.animation-6').css('opacity', '0');
}, 36500);

setTimeout(function animation_7() {
  $('.animation-7').css('opacity', '1');
}, 36500);
setTimeout(function animation_7() {
  $('.animation-7').css('opacity', '0');
}, 39000);




setInterval(function a() {
  setTimeout(function animation_1() {
    $('.animation-1>.logo-img').css('margin-top', '0').css('opacity', '1');
  }, 1000);
  setTimeout(function animation_1() {
    $('.animation-1>.logo-img').css('margin-top', '-50px').css('opacity', '0');
  }, 6000);

  setTimeout(function animation_2() {
    $('.animation-2>.logo-img').css('margin-top', '0').css('opacity', '1');
  }, 8000);
  setTimeout(function animation_2() {
    $('.animation-2>.logo-img').css('margin-top', '-50px').css('opacity', '0');
  }, 13000);

  setTimeout(function animation_3() {
    $('.animation-3>.logo-img').css('margin-top', '0').css('opacity', '1');
  }, 15000);
  setTimeout(function animation_3() {
    $('.animation-3>.logo-img').css('margin-top', '-50px').css('opacity', '0');
  }, 20000);

  setTimeout(function animation_4() {
    $('.animation-4>.logo-img').css('margin-top', '0').css('opacity', '1');
  }, 22000);
  setTimeout(function animation_4() {
    $('.animation-4>.logo-img').css('margin-top', '-50px').css('opacity', '0');
  }, 27000);

  setTimeout(function animation_5() {
    $('.animation-5>.logo-img').css('margin-top', '0').css('opacity', '1');
  }, 29000);
  setTimeout(function animation_5() {
    $('.animation-5>.logo-img').css('margin-top', '-50px').css('opacity', '0');
  }, 34000);

  setTimeout(function animation_6() {
    $('.animation-6').css('opacity', '1');
  }, 34000);
  setTimeout(function animation_6() {
    $('.animation-6').css('opacity', '0');
  }, 36500);

  setTimeout(function animation_7() {
    $('.animation-7').css('opacity', '1');
  }, 36500);
  setTimeout(function animation_7() {
    $('.animation-7').css('opacity', '0');
  }, 39000);
}, 39500);

function alerted(){
	$('.alerted > .alert-box > .close-btn > .close-text').click(function(){
		$('.alerted').removeClass('active');
	})
}



$(function () {
  site_btn();
  main_scroll();
  alerted();
})