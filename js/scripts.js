/* Author: Jshakes

*/

$(function(){

    // portfolio hover
    $(".hover-title a").hover(function(){
       
       $(this).children(".overlay").stop(false, true).fadeIn(100);
    },
    function(){
    
       $(this).children(".overlay").stop(false, true).fadeOut(200);
    })

    $(".fancybox a").fancybox({
        type: 'ajax',
        nextEffect: 'fade',
        prevEffect: 'fade',
        nextSpeed: 600,
        prevSpeed: 600
    });
    // End onready
});

$(window).load(function(){

    masonryInit();
});

masonryInit = function(){

    // shuffle

    var work_counter = 0;
    $(".term").each(function(i){
        //take an uncategorised painting on every third category and stick it in
        for(var i = 0; i < 2; i++){
         
            if($(".work").length > work_counter){
                var work = $(".work")[work_counter++];
                $(this).before(work.outerHTML);
                $(work).remove();
            }
        }
    });
    
    $('.bricks').masonry({
        // options
        itemSelector : '.brick',
        gutterWidth: 30
    }).css({visibility: 'visible'});
}