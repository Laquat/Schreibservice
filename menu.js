var myHeader = $('#header');
myHeader.data( 'position', myHeader.position() );
$(window).scroll(function(){
    var hPos = myHeader.data('position'), scroll = getScroll();
    if ( hPos.top < scroll.top ){
        myHeader.addClass('fixed');
    }
    else {
        myHeader.removeClass('fixed');
    }
});

function getScroll () {
    var b = document.body;
    var e = document.documentElement;
    return {
        left: parseFloat( window.pageXOffset || b.scrollLeft || e.scrollLeft ),
        top: parseFloat( window.pageYOffset || b.scrollTop || e.scrollTop )
    };
}