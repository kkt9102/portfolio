
function history_btn(){
    $('.history-section > .seoul-art-history > .history-year > li > ul').each(function (index, el) {
        $(this).parent().data('origin-height', $(this).height());
        $(this).css('height', 0);
      });
    $('.history-section > .seoul-art-history > .history-year  > li').click(function(){
        var originHeight = $(this).data('origin-height');
        
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find(' > ul').css('height', 0)
        }
        else {
            $(this).addClass('active');
            $(this).find('> ul').css('height', originHeight );
        }
        
    });
}

/*
function click_drop_menu() {

    $('.history-section > .seoul-art-history > .history-year > li > ul').each(function (index, el) {
        $(this).data('origin-height', $(this).height());
        $(this).css('height', 0);
      });
    
      $('.history-section > .seoul-art-history > .history-year > li').click(function () {
        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active');
        var originHeight = $(this).data('origin-height');
        $('.history-section > .seoul-art-history > .history-year > li > ul').css('height', originHeight );
      });
    
      $('.history-section > .seoul-art-history > .history-year > li > ul').click(function () {
        $('.history-section > .seoul-art-history > .history-year > li > ul').css('height', 0);
      });
      
      
}
*/




$(function(){
    history_btn();
})