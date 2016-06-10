jQuery(document).ready(function($) {
	"use strict";

/*=== one page navigation ====*/
    $('#nav-list').onePageNav({
            currentClass: 'active'
    });

/*=== smooth in-page link scroll  ====*/
    $('a').click(function(){
        var $this = $(this);
        var amount = $($this.attr('href')).offset().top;
        $('html, body').animate({
            scrollTop: amount
        }, 1000);
        return false;
    });

});