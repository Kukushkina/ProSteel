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