function scroll__menu(){
    $(document).ready(function(){
        $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            var scroll_menu = $('.scroll-menu');
            var scroll_top_move = $('.scroll-move-top-btn');
            var top_move_position = $('.bottom-site-map>.menu-box-5').position().top;
            if (scrollTop > 250) {
                scroll_menu.css('height', '70px');
                scroll_top_move.css('opacity','1');
            } else {
                scroll_menu.css('height', '0');
                scroll_top_move.css('opacity','0');
            }
            if (scrollTop > top_move_position) {
                alert('hi');
            }
        })
    });
};
function has__class(){
    $('.footer > .menu-box-7 > ul > .site-map-btn').click(function(){
        var site_map = $('.page-all-menu');
        var site_map_btn = $(this);
        var height = site_map.height();
        if (site_map.hasClass('active')){
            site_map.removeClass('active');
            site_map_btn.removeClass('active');
        }
        else {
            site_map.addClass('active');
            site_map_btn.addClass('active');
        }
    });
};
function top_move() {
    $('.scroll-move-top-btn').click(function () {
      $('html,body').scrollTop('0');
    });
  }
function alerted(){
	$('.alerted > .alert-box > .close-btn > .close-text').click(function(){
		$('.alerted').removeClass('active');
	})
}

$(function () {
    scroll__menu();
    has__class();
    top_move();
    alerted();
});