$('.hero__slider').slick({
	infinite: true,
	arrows: true,
	dots: false,
	autoplay: false,
	speed: 2000,
	slidesToShow: 1,
	slidesToScroll: 1,
});

$('.new-goods__slider, .page_collection_detail .collections__items').slick({
	infinite: true,
	arrows: true,
	dots: false,
	autoplay: false,
	speed: 800,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1049,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 701,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 481,
			settings: {
				slidesToShow: 1,
			},
		},
	],
});

$('.shop_sections__slider').slick({
	infinite: true,
	arrows: true,
	dots: false,
	autoplay: true,
	autoplaySpeed: 3500,
	speed: 800,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1049,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 751,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 601,
			settings: {
				slidesToShow: 1,
			},
		},
	],
});