jQuery(function($) {
	//Скрытие ненужных элементов
	if($('.postdate').html().split('| ')[1] ){
		$('.postdate').html($('.postdate').html().split('| ')[1]);
	}else{
		$('.postdate').hide();
	}

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