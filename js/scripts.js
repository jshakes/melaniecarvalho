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
        type: 'ajax'
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
        for(var i = 0; i < 3; i++){
         
            if($(".work").length > work_counter){
                var work = $(".work")[work_counter++];
                $(this).after(work.outerHTML);
                $(work).remove();
            }
        }
    });
    
    $('.bricks').masonry({
        // options
        itemSelector : '.brick',
        columnWidth: 168,
        gutterWidth: 30
    }).css({visibility: 'visible'});
}