jQuery(function($) {
	//Скрытие ненужных элементов
	if($('.postdate').html().split('| ')[1] ){
		$('.postdate').html($('.postdate').html().split('| ')[1]);
	}else{
		$('.postdate').hide();
	}

	$('.prev_article a').html('<i class="fa fa-arrow-circle-left"></i>'+$('.prev_article a').text());
	$('.next_article a').html($('.next_article a').text()+'<i class="fa fa-arrow-circle-right"></i>');

	$('.postmeta').hide();
	$('.nocomments').hide();

	$('#posts').remove();
	
	$('img[title=\'LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня\']').width('0').height('0');
	$('img[alt=\'Яндекс.Метрика\']').width('0').height('0');

	$('#nav li').hover(function(){
		$(this).find('.sub-menu').slideDown('400');
	}, function(){
		$(this).find('.sub-menu').slideUp('400');
	});
});