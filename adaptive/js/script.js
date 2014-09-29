//Кнопка вверх
 $(function(){
	$(window).scroll(function()	{
		if($(this).scrollTop()>100) $('a#move_up').fadeIn();
		else $('a#move_up').fadeOut(400);
	});
	$('a#move_up').click(function(){
		$('body,html').animate({scrollTop: 0}, 450);
		return false;
	});
});
// Спойлер
$(document).ready(function(){
    $('.btn-inverse').click(function(){
        $(this).parent().children('div.splCont').toggle('normal');
        return false;
    });
});
//Липкое меню
	$(document).ready(function(){
        var HeaderTop = $('.header').offset().top;
		
        $(window).scroll(function(){
                if( $(window).scrollTop() > HeaderTop ) {
                        $('.header').css({position: 'fixed', top: '0px'});
                } else {
                        $('.header').css({position: 'static'});
                }
        });
	});