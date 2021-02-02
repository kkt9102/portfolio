function academic_schedule(){
    //academic-schedule-view-box
    $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month > .prev-btn').click(function(){
        
        var $active_month = $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month').find(' > .text.active');
        var $active_schedule = $('.academic-schedule-section > .academic-schedule-section-box >.academic-schedule-view-box').find(' >.active');
        var $prev = $active_month.prev('.text');
        var $prev_schedule = $active_schedule.prev();
        

        if ( $prev.length == 0 ) {
            $prev = $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month').find(' > .month-12');
        }
        else {
            $prev;
        }
        if ( $prev_schedule.length == 0 ) {
            $prev_schedule = $('.academic-schedule-section > .academic-schedule-section-box >.academic-schedule-view-box').find(' > .month-12');
        }
        else {
            $prev_schedule;
        }
            $active_month.removeClass('active');
            $prev.addClass('active');
            $active_schedule.removeClass('active');
            $prev_schedule.addClass('active');
      
    })
    $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month > .next-btn').click(function(){
        var $active_month = $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month').find(' > .text.active');
        var $active_schedule = $('.academic-schedule-section > .academic-schedule-section-box >.academic-schedule-view-box').find(' >.active');
        var $next = $active_month.next('.text');
        var $next_schedul = $active_schedule.next();

        if ( $next.length == 0 ) {
            $next = $('.academic-schedule-section > .academic-schedule-section-box > .date-box > .month').find(' > .month-01');
        }
        else {
            $next;
        }
        if ( $next_schedul.length == 0 ) {
            $next_schedul = $('.academic-schedule-section > .academic-schedule-section-box >.academic-schedule-view-box').find(' > .month-01');
        }
        else {
            $next_schedul;
        }
        $active_month.removeClass('active');
        $next.addClass('active');
        $active_schedule.removeClass('active');
        $next_schedul.addClass('active');
    })
}


$(function(){
    academic_schedule(); 
})