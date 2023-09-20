$(document).ready(function () {

	const step = 6;
	let counter = 6;

	$('.production__gallery').each(function(i,el) {

		$(el).find('.production__gallery__map').addClass('approved');
	
		for (let i = 0; i < counter; i++) {
			$(el).find('.production__gallery__map').eq(i).addClass('show');
		}
	});

	// в мобильной версии нужно будет сделать подгрузку по +2 - то есть if($(window).width < 768 { step = 2 })
	$('.production .tabs > li').on('click', function (e) {
		let tab = $(this);

		counter = 6;
		$('.empty').remove();
		$('.production__gallery__map').removeClass('show');
		$('.production__gallery__map').removeClass('approved');
		$('.gallery_show_more').hide();
		
		$('.production__gallery__map').each(function (index, el) {
			if ($(el).attr('data-code') === tab.attr('data-code')) {
				$(el).addClass('approved');

				// console.log( el );
			}
		});

		if (tab.attr('data-code') == 'all') {
			$('.production__gallery__map').addClass('approved');
		}

		let visibleItems = $('.production__gallery__map.approved');
		for (let i = 0; i < counter; i++) {
			visibleItems.eq(i).addClass('show');
		}

		if(visibleItems.length > counter) {
			$('.gallery_show_more').show();
		}

		if (visibleItems.length === 0) {
			tab.parent()
				.parent()
				.append($('<p class="empty">Здесь пока нет товаров...</p>'));
		}
	});

	$('.collection_products .tabs > li').on('click', function (e) {
		let tab = $(this);
		
		$('.product-item-container').removeClass('show-by-collection');
		$('.products_grid').show();

		$('.product-item-container').each(function (index, el) {
			if ($(el).attr('data-code') === tab.attr('data-code')) {
				$(el).addClass('show-by-collection');
			}
		});

		if (tab.attr('data-code') == 'all') {
			$('.product-item-container').addClass('show-by-collection');
		}
	});



	$('.gallery_show_more').on('click', function (e) {
		e.preventDefault();

		counter += step;

		let visibleItems = $('.production__gallery__map.approved');
		for (let i = 0; i < counter; i++) {
			visibleItems.eq(i).addClass('show');
		}

		// если всего элементов меньше чем counter, если показаны все элементы - линку скрыть
		if(visibleItems.length < counter) {
			$('.gallery_show_more').hide();
		}
	});



	// $('.production__gallery__map').on('click', function (e) {
	// 	if (!$(e.target).hasClass('map--label')) {
	// 		e.preventDefault();
	// 	}
	// });
});