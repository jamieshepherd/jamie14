// If stays this simple could probably move away from jquery, do we need jquery for rest of site?
$(function(){
    var state = 'hidden';
    // When show menu button is clicked, show or hide menu depending on state
    $('#showMenu').click(function(){
        if(state=='hidden'){
            state='visible';
            $('menu').css({
                top: '2px',
                display: 'block'
            });
            $('#viewport').css({
                opacity: '0.3',
                cursor: 'default'
            });
        } else {
            state='hidden';
            $('menu').css({
                display: 'none'
            });
            $('#viewport').css({
                opacity: '1',
                cursor: 'auto'
            });
        }
    });
    // If viewport is clicked and menu is open
    $('#viewport').click(function(){
        if(state!='hidden'){
            state='hidden';
            $('menu').css({
                display: 'none'
            });
            $('#viewport').css({
                opacity: '1',
                cursor: 'auto'
            });
        }
    });
    // If the window is resized > 800px, hide menu
    $( window ).resize(function() {
        if($(this).width()>800){
            state='hidden';
            $('menu').css({
                display: 'none'
            });
            $('#viewport').css({
                opacity: '1',
                cursor: 'auto'
            });
        }
    });
    // For closing notification boxes / site messages
    $('.close-button').click(function() {
        $(this).parent().fadeOut(200);
    });
});
