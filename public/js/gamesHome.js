/**
 * Created by mjames on 11/01/2016.
 */
$(document).ready(function() {
    $('.game').mouseenter(function(){
        $(this).animate({
            opacity: 1,
        }, "slow");
    });
    $('.game').mouseleave(function(){
        $(this).animate({
            opacity: 0.75
        }, "slow");
    });
});