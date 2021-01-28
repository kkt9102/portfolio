function tap__menu(){
    $('.tap-menu > .tap-menu-box > .box-btn > ul > li').click(function(){
        var $click = $(this);
        var index = $click.index();
        var $active = $('.tap-menu > .tap-menu-box > .box-btn > ul').find('> .active');
        var $active_tap_box = $('.tap-menu > .tap-menu-box > .tap-contact-box').find('> .active');
        var $active_contacnt_box = $('.tap-menu > .tap-menu-box > .tap-contact-box > nav');


        var $notice_box = $('.tap-menu > .tap-menu-box > .tap-contact-box > .notice-box');
        var $news_release_box = $('.tap-menu > .tap-menu-box > .tap-contact-box > .news-release-box');
        var $event_schedule_box = $('.tap-menu > .tap-menu-box > .tap-contact-box > .event-schedule-box');

        

        $active.removeClass('active');
        $click.addClass('active');
        $active_tap_box.removeClass('active');
        $active_contacnt_box.eq(index).addClass('active');

    })
}





$(function(){
    tap__menu();
})