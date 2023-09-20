$(document).ready(function() {
    if (location.pathname == '/pure-life/collections/') {
        let collection_rows = ($('.collections__items > a').length - 12) / 4 + 6;
        collection_rows = Math.ceil(collection_rows);
        // collection_items = $('.collections__items > a').length;

        // let num = ((collection_items - 16) / 4);

        // while (num >= 4) {
        // 	num -= 4;
        // }

        // let pos = Math.ceil(num) + 1;

        // console.log(pos);


        $('.collections__items > a').each(function(id, el) {
            let txt = $(el).find('p.title').text();
            if (txt.includes('Вне серии')) {
                $(el).css({
                    'grid-row-end': collection_rows,
                    'grid-column-end': '-1',
                });
            }
        });
    }

    // показ светлой шапки, если нет hero-секции
    if ($('.hero').length == 0 && $('.page_hero').length == 0) {
        $('.header').addClass('header--light');
    }

    // функционал показа скрытого текста
    $('.readmore__link').on('click', function(e) {
        $(this).parent().find('.readmore__desc').addClass('show');
        $(this).parent().css({ 'max-height': '100%' });
        $(this).hide();
    });

    // показ панельки поиска
    $('#search_toggle').on('click', function(e) {
        $('body').toggleClass('search--opened').toggleClass('ov_hidden');
        $(this).toggleClass('active');
        $('.header__search').toggleClass('opened');
    });

    // показ панельки поиска
    $('#search_toggle-mobile').on('click', function(e) {
        $('body').toggleClass('search--opened').toggleClass('ov_hidden');
        $(this).toggleClass('active');
        $('.header__search').toggleClass('opened');
    });

    // показ модалки "заказать звонок"
    $('.header__links--request, .page_service_centers__links--request').on('click', function(e) {
        e.preventDefault();
        $('.request_call').show();
        $('.request_call--modal').addClass('show');
    });

    // скрытие модалки "заказать звонок"
    $('.request_call--bg, .request_call--modal > .cross').on(
        'click',
        function(e) {
            $('.request_call--modal').removeClass('show');
            $('.request_call').hide();
        }
    );

    // базовая анимация кликабельности любых таб
    $('.tabs > li').on('click', function(e) {
        let tab = $(this);
        tab.parent().find('li').removeClass('active');
        tab.addClass('active');

        // if(tab.attr('data-code') == "aksessuary") {}
    });

    // slider with tabs on homepage
    $('.shop_sections .tabs > li').on('click', function(e) {
        let tab = $(this);
        let code = tab.attr('data-code');

        $('.shop_sections__slider').removeClass('show');
        $('.shop_sections__slider[data-code="' + code + '"]')
            .addClass('show')
            .slick('setPosition');
    });

    // кнопка "вверх"
    $().UItoTop({ easingType: 'easeOutQuart' });

    $('a[href^="#"]').on('click', function(e) {
        let src = $(this).attr("href");

        let destination = $(src).offset().top - 50 + 'px';

        if (src == '#section_reg') {
            destination = $(src).offset().top + 'px';
        }

        $('html, body').animate({
            scrollTop: destination,
        }, {
            duration: 1000,
            easing: 'swing',
        });
        return false;
    });

    $('a[href="#product_card_props"]').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50 + 'px',
        }, {
            duration: 1000,
            easing: 'swing',
        });
        return false;
    });

    $('.tech_cascade__map .map--label').hover(
        function(e) {
            $(this).next().show();
            $(this).next().fadeTo(200, 1);
        },
        function(e) {
            $(this).next().fadeOut(200, 0);
            setTimeout(() => {
                $(this).next().hide();
            }, 200);
        }
    );

    // layout fixes
    if ($(window).width() < 801) {
        $('.color_selection--inner').css({
            height: $('.color_selection--inner:first').find('img').height(),
        });
    }

    if ($(window).width() < 601) {
        // if (location.pathname == '/') {
        $('.hero__slider__item').each(function(id, el) {
            // $(el).css({
            // 	background:
            // 		'url(' +
            // 		$(el).attr("data-mini-image") +
            // 		') no-repeat center center;',
            // });

            let mini_image = $(el).attr('data-mini-image');

            $(el).attr(
                'style',
                'background: url(' + mini_image + ') no-repeat center center;'
            );
        });
        // }

        // $('.page_tech > .page_hero').css({
        // 	background:
        // 		'url(' +
        // 		$('.page_tech > .page_hero').attr('data-mini-image') +
        // 		') no-repeat center center;',
        // });

        let tech_mini_image = $('.page_tech > .page_hero').attr(
            'data-mini-image'
        );
        $('.page_tech > .page_hero').attr(
            'style',
            'background: url(' + tech_mini_image + ') no-repeat center center;'
        );

        $('.page_hero.advantages').attr(
            'style',
            'background: url(/preimushchestva-produktsii/mini_hero_image.jpg) no-repeat center center;'
        );

        $('.page_hero.our').attr(
            'style',
            'background: url(/nashi-tsennosti/mini_hero_image.jpg) no-repeat center center;'
        );

        // console.log();
    }

    if ($(window).width() < 481) {
        $('.technologies__item').each(function(id, el) {
            $(el).find('img:first').hide();
            $(el).find('img:last').show();
        });
    }

    if ($(window).width() > 480) {
        let cascadeHeight = 0;
        setTimeout(function() {
            $('.page_tech.smart .tech_cascade > .wrap > .tech_cascade__map').each(
                function(id, el) {
                    cascadeHeight += $(el).height();
                }
            );
            cascadeHeight = cascadeHeight / 2 + 37 * 3;
            $('.page_tech.smart .tech_cascade > .wrap').css(
                'max-height',
                cascadeHeight
            );
        }, 500);
    } else {
        $('.page_tech.smart .tech_cascade > .wrap').css('max-height', 'unset');
    }

    // $(window).resize(function (e) {

    // });

    // $('.page_tech.smart .tech_cascade > .wrap').css('max-height',
    // 	$(this).find('.tech_cascade__map').height() + 'px'
    // );

    // mobile filter
    if ($(window).width() < 701) {
        let filterClone = $('.catalog_section > .bx-filter').clone();
        $('.mobile_filter_panel').append(filterClone);
        $('.catalog_section > .bx-filter').hide();
    }

    $('.mobile_filter_open_btn').on('click', function(e) {
        $('.mobile_filter_panel').addClass('show');
        $('.mobile_filter_panel--bg').show();
    });

    $('.mobile_filter_panel--close, .mobile_filter_panel--bg').on(
        'click',
        function(e) {
            $('.mobile_filter_panel').removeClass('show');
            $('.mobile_filter_panel--bg').hide();
        }
    );

    // 'soon' stickers
    $('.tabs > li[data-code="aksessuary"]').addClass('soon');
    // $('.production__gallery__map[data-code="aksessuary"]').addClass('soon');


    // const bath = $(".main_menu__sidebar--block img[alt='Cенсорные']");

    $(".main_menu__sidebar--block a:contains('Смесители для раковины')").hover(
        function(e) {
            $(this)
                .next('.subcontent')
                .find('img')
                .each(function(id, el) {
                    // console.log( $(el).attr('alt') );
                    if ($(el).attr('alt') === 'Cенсорные') {
                        $(el).parent().addClass('soon');
                    }
                });
        }
    );

    if ($(window).width() < 1049) {
        $('a[data-lightbox="production__gallery"]').each(function(id, el) {
            if ($(el).parent().hasClass('soon')) {
                $(el).attr('href', 'javascript:void(0);');
                $(el).removeAttr('data-lightbox');
            } else {
                let tagLink = $(el).next('.production__gallery__tag').attr('href');
                $(el).attr('href', tagLink).attr('target', '_blank');
                $(el).removeAttr('data-lightbox');
            }
        });
    }
});