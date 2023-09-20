$(document).ready(function () {
	$('.main_menu_toggle').on('click', function (e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.main_menu').toggleClass('show');
		$('body').toggleClass('ov_hidden');
		$('body').toggleClass('menu--opened');
		
		if($(window).width() > 600) {
			$('.breadcrumbs').toggle();
		}

		$('.header--light').toggleClass('menu_opened');
	});

	$('.main_menu__sidebar .submenu > li > a').mouseenter(function (e) {
		console.log($(this)[0]);

		let subtitle = $(this).text().trim();
		let subtitleEl = $('<p class="subcontent__title">' + subtitle + '</p>');

		// console.log(subcontent);

		if($(this).hasClass('main_menu-soon')) {
			let subcontent = $('<p>Товары скоро появятся</p>');
			$('.main_menu__overview')
				.html(' ')
				.append(subtitleEl)
				.append(subcontent);
				
		} else if ($(this).hasClass('parent')) {
			let subcontent = $(this).next('.subcontent').clone();
			
			$('.main_menu__overview')
				.html(' ')
				.append(subtitleEl)
				.append(subcontent);
		} else {
			// let subpopular = $(this).next('.subpopular').clone();
			let section_info = $(this).next('.section_overview').clone();
			// console.log(subpopular);
			$('.main_menu__overview')
				.html(' ')
				.append(subtitleEl)
				.append(section_info);
		}

		
		// $('.main_menu__overview').html(`
		//     <div class="pop_section">
		//         <p>Популярные товары</p>
		//         <ul class="pop_section__items">
		//             <li><a href="#">
		//                 <img src="/local/templates/maxonor/assets/images/product.png" alt="item" />
		//                 <p class="title">MN1083</p>
		//                 <p>Смеситель для&nbsp;раковины</p>
		//             </a></li>

		//             <li><a href="#">
		//                 <img src="/local/templates/maxonor/assets/images/product.png" alt="item" />
		//                 <p class="title">MN1083</p>
		//                 <p>Смеситель для&nbsp;раковины</p>
		//             </a></li>

		//             <li><a href="#">
		//                 <img src="/local/templates/maxonor/assets/images/product.png" alt="item" />
		//                 <p class="title">MN1083</p>
		//                 <p>Смеситель для&nbsp;раковины</p>
		//             </a></li>
		//         </ul>
		//         <a href="#" class="show_all">Смотреть все</a>
		//     </div>
		//     `);


	});
});
