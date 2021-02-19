function hasClass__init() {
    $('#header .bars-btn').click(function () {
        var $menuBox_1 = $('#header > .menu-box-1');
        var $header = $('#header');

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $menuBox_1.removeClass('active');
            $header.removeClass('active');
        } else {
            $(this).addClass('active');
            $menuBox_1.addClass('active');
            $header.addClass('active');
        }
    });
    $('.extraction-list ul li .popup-img').click(function () {
        var $popup_win = $('.extraction-list .popup-list .popup-win');
        var index = $(this).parent().index();

        $popup_win.removeClass('active');
        $popup_win.eq(index).addClass('active');

    });
    $('.extraction-list .popup-list > .popup-win > .con >.popup-win-header > .close-btn').click(function(){
        $(this).closest('li').removeClass('active');
    });
}
/* scroll-guide-btn moving */
function guide_arrow() {
    $(document).ready(function(){
        $('#section-1 .guide-arrow .btn img').animate({
            top: 58 + '%'
        },400, function(){
            $('#section-1 .guide-arrow .btn img').animate({
                top:50 + '%'
        },400 ,guide_arrow);
        })
    })
};
// scroll_Move
function scroll_move(no) {
    var offset = $('#section-' + no).offset();
    var $menu_btn = $('.bars-btn');
    var $menu_box = $('.menu-box-1');
    $('html').animate({
        scrollTop: offset.top
    }, 450);
    $menu_btn.removeClass('active');
    $menu_box.removeClass('active');
};
// section-4에 아이템 개수정렬
function Coffee_item() {
        var $Item = $('#section-4 .section-4_con .menu-box-3 ul li:last-child');
        var $Item_index = $('#section-4 .section-4_con .menu-box-3 ul li').length;
        var $String = $Item_index.toString()[1];
    
        if ($Item_index.toString().length == 2||$String == [1 && 5 && 9]) {
            $Item.after(
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>'
                );
        } else if ($Item_index.toString().length == 2||$String == [3 && 7]) {
            $Item.after(
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>' +
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>' +
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>'
            );
        } else if ($Item_index.toString().length == 2||$String == [4 && 8]) {
            $Item.after(
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>' +
                '<li class="dummy">' +
                    '<div></div>' +
                '</li>'
            );
        } else {
            return;
        }
    
        // if ($Item_index.toString().length == 2 ){
        //     if ($String == [3 && 7]) {
        //         $Item.after('<li>test1</li><li>test1</li><li>test1</li>');
        //     } else if ($String == [4 && 8]) {
        //         $Item.after('<li>test1</li><li>test1</li>');
        //     } else if ($String == [1 && 5 && 9]) {
        //         $Item.after('<li>test1</li>');
        //     } else if ($String == [0 && 2 && 6]) {
        //         return;
        //     };
        // } else {
        //     if ($String == [3&&7]) {
        //         $Item.after('<li>test1</li><li>test1</li><li>test1</li>');
        //     } else if ($String == [4&&8]) {
        //         $Item.after('<li>test1</li><li>test1</li>');
        //     } else if ($String == [1&&5&&9]) {
        //         $Item.after('<li>test1</li>');
        //     } else if ($String == [0&&2&&6]) {
        //         return;
        //     }
        // };
}


$(function () {
    hasClass__init();
    guide_arrow();
    Coffee_item();
});