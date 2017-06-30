jQuery(document).ready(function ($) {
	//Скрытие ненужных элементов
	if($('.postdate').html().split('| ')[1] ){
		$('.postdate').html($('.postdate').html().split('| ')[1]);
	}else{
		$('.postdate').hide();
	}

	$("a[href*='#']").bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 500);
		e.preventDefault();
		return false;
	});


	$('.prev_article a').html('<i class="fa fa-arrow-circle-left"></i>'+$('.prev_article a').text());
	$('.next_article a').html($('.next_article a').text()+'<i class="fa fa-arrow-circle-right"></i>');

	$('.postmeta').hide();
	$('.nocomments').hide();

	$('#posts').remove();
	
	$('img[title=\'LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня\']').width('0').height('0');
	$('img[alt=\'Яндекс.Метрика\']').width('0').height('0');

});