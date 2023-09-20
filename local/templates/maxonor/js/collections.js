$(document).ready(function () {
	const initType = $(
		'.collections .tabs > li.active, .page_collections .tabs > li.active'
	).attr('data-type');
	$('.collections .tabs > li.active')
		.parent()
		.next('.collections__items')
		.find('a')
		.each(function (id, el) {
			if ($(el).attr('data-item-type') !== initType) {
				$(el).hide();
			}
		});

	$('.collections .tabs > li, .page_collections .tabs > li').on(
		'click',
		function (e) {
			let tab = $(this);
			let type = tab.attr('data-type');

			let collections = tab.parent().next('.collections__items').find('a');
			collections.each(function (id, el) {
				$(el).show();
				if ($(el).attr('data-item-type') !== type) {
					$(el).hide();
				}
			});
		}
	);

	// const initSection = $('.collection_products > .tabs > li.active').attr('data-code');
	// $('.collection_products > .products_grid > .product-item-container').each(function (id, el) {
	//     if($(el).attr('data-code') !== initSection) {
	//         $(el).hide();
	//     }
	// });

	$('.collection_products > .tabs > li').on('click', function (e) {
		let tab = $(this);
		let section = tab.attr('data-code');
        let products = tab
				.parent()
				.next('.products_grid')
				.find('.product-item-container');

		if ($(this).attr('data-code') == 'all') {
			products.show();
		} else {
            products.show();
			products.each(function (id, el) {
				if ($(el).attr('data-code') !== section) {
					$(el).hide();
				}
			});
		}
	});
});
