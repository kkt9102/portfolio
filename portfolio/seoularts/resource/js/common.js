// hasClass
function hasClass__init(){
    $('#search_home .search').click(function(){
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    })
}

$(function(){
    hasClass__init();
})