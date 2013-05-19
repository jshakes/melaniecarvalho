/* Author: Jshakes

*/

$(function(){

    // portfolio hover
    $("html.no-touch #works article a").hover(function(){
       
       $(this).children(".overlay").stop(false, true).fadeIn(100);
    },
    function(){
    
       $(this).children(".overlay").stop(false, true).fadeOut(200);
    }).fancybox({
        type: 'ajax'
    });

    // End onready
});

$(window).load(function(){

    masonryInit();
});

masonryInit = function(){
    
    $('#works').masonry({
        // options
        itemSelector : '.work',
        columnWidth : 168,
        gutterWidth: 30
    }).css({visibility: 'visible'});
}