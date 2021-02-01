console.clear();

/*
setTimeout(function() {
  $(window).scrollTop(0);
}, 500);
*/
function alerted(){
	$('.alerted > .alert-box > .close-btn > .close-text').click(function(){
		$('.alerted').removeClass('active');
	})
}

function slider() {
	$('.slider').slick({
		slide: 'div', //슬라이드 되어야 할 태그 ex) div, li 
		infinite: true, //무한 반복 옵션	 
		slidesToShow: 3, // 한 화면에 보여질 컨텐츠 개수
		slidesToScroll: 1, //스크롤 한번에 움직일 컨텐츠 개수
		speed: 100, // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
		arrows: true, // 옆으로 이동하는 화살표 표시 여부
		dots: false, // 스크롤바 아래 점으로 페이지네이션 여부
		autoplay: false, // 자동 스크롤 사용 여부
		autoplaySpeed: 10000, // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
		pauseOnHover: true, // 슬라이드 이동	시 마우스 호버하면 슬라이더 멈추게 설정
		vertical: false, // 세로 방향 슬라이드 옵션
		prevArrow: '.prev', // 이전 화살표 모양 설정
		nextArrow: '.next', // 다음 화살표 모양 설정
		dotsClass: "slick-dots", //아래 나오는 페이지네이션(점) css class 지정
		draggable: true, //드래그 가능 여부 
	});
};

function mobile(){
	$('.mobile-menu > .mobile-btn').click(function(){
	  if ($(this).hasClass('active')){
		$(this).removeClass('active');
		$('.mobile-menu-box').removeClass('active');
		$('body').removeClass('active');
	  }
	  else {
		$(this).addClass('active');
		$('.mobile-menu-box').addClass('active');
		$('body').addClass('active');
	  }
	  
	})
  }

  function main_scroll() {
	$(document).ready(function () {
	  $(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 1) {
		  $('.top-menu-bar').addClass('no-bar');
  
		} else {
		  $('.top-menu-bar').removeClass('no-bar');
		}
		if (scroll > 400) {
			$('.top-menu-bar').removeClass('no-bar');
			$('.top-menu-bar').addClass('bar');

	
		  } else {
			$('.top-menu-bar').removeClass('bar');
		  }
	  })
	})
  }


$(function(){
	alerted();
	slider();
	mobile();
	main_scroll();
});