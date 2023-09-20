<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<section class="hero">
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"main_slider",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("MORE", "LINK_NAME", "MINI_IMAGE"),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	); ?>
</section>

<section class="shop_sections">
	<div class="wrapper">
		<? $APPLICATION->IncludeFile(
			SITE_DIR . "/include/home_pure_life_desc.php",
			array(),
			array(
				"MODE" => "html"
			)
		); ?>

		<?
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"slider_with_tabs",
			Array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "N",
				"COUNT_ELEMENTS" => "N",
				"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
				"FILTER_NAME" => "",
				"IBLOCK_ID" => $_ENV['CATALOG_ID'],
				"IBLOCK_TYPE" => "shop",
				"SECTION_CODE" => "",
				"SECTION_FIELDS" => array("CODE", "NAME", "PICTURE", ""),
				"SECTION_ID" => "",
				"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
				"SECTION_USER_FIELDS" => array("UF_SHORTNAME", ""),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "2",
				"VIEW_MODE" => "LIST"
			)
		);
		?>
	</div>
</section>

<?/*
<section class="catalog-sections">
	<div class="wrapper">
		<? $APPLICATION->IncludeFile(
			SITE_DIR . "/include/home_pure_life_desc.php",
			array(),
			array(
				"MODE" => "html"
			)
		); ?>

		<ul class="catalog-sections__list">
			<li>
				<a href="/catalog/bathroom/smesiteli-dlya-rakoviny/">
					<img src="/local/templates/maxonor/assets/images/home_catalog_sections/1.jpg" alt="Смесители для раковины" />
					<span>Смесители для&nbsp;раковины</span>
				</a>
			</li>
			<li>
				<a href="/catalog/bathroom/smesiteli-dlya-vannoy/">
					<img src="/local/templates/maxonor/assets/images/home_catalog_sections/4.jpg" alt="Смесители для раковины" />
					<span>Смесители для&nbsp;ванной</span>
				</a>
			</li>
			<li>
				<a href="/catalog/kitchen/">
					<img src="/local/templates/maxonor/assets/images/home_catalog_sections/2.jpg" alt="Смесители для раковины" />
					<span>Смесители для&nbsp;кухни</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<img src="/local/templates/maxonor/assets/images/home_catalog_sections/5.jpg" alt="Смесители для раковины" />
					<span class="sections__list-soon">Аксессуары</span>
				</a>
			</li>
			<li>
				<a href="/catalog/bathroom/dushevye-sistemy/" >
					<img src="/local/templates/maxonor/assets/images/home_catalog_sections/3.jpg" alt="Смесители для раковины" />
					<span>Души</span>
				</a>
			</li>
			<!-- <li>
				<a href="/catalog/">В&nbsp;каталог</a>
			</li> -->
		</ul>
	</div>
</section>
*/?>


<div class="page_pure_life">

	<!-- <section class="page_hero" style="background: url(bg.jpg) no-repeat center center;">
        <div class="page_hero--inner">
            <?
			// $APPLICATION->IncludeFile(
			//     SITE_DIR . "/include/pure_life/slide.php",
			//     array(),
			//     array(
			//         "MODE" => "html"
			//     )
			// ); 
			?>
        </div>
    </section> -->

	<!-- <div class="wrapper">
        <section class="page_description">
            <div class="page_description--inner">
                <?
				// $APPLICATION->IncludeFile(
				//     SITE_DIR . "/include/pure_life/desc.php",
				//     array(),
				//     array(
				//         "MODE" => "html"
				//     )
				// ); 
				?>
            </div>
        </section>
    </div> -->

	<?
	global $arrFilterProduction;

	$arrFilterProduction = [
		'IBLOCK_SECTION_ID' => [44,45,46,47,48,49]
	];
	 
	$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"production", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "arrFilterProduction",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "200",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PRODUCT",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "RAND",
		"SORT_BY2" => "RAND",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "production"
	),
	false
); ?>


	<section class="collections">
		<div class="wrapper">
			<h2>Коллекции</h2>

			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"section_collections",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "/pure-life/collections/#ELEMENT_CODE#/",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "18",
					"IBLOCK_TYPE" => "shop",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "8",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("TYPE", ""),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "RAND",
					"SORT_BY2" => "RAND",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				)
			); ?>

			<a href="/pure-life/collections/" class="page_description__link-more">Смотреть&nbsp;все<span></span></a>
		</div>
	</section>


	<div class="wrapper">
		<section class="color_selection">
			<h2>Нотка индивидуальности в&nbsp;дизайне интерьера</h2>

			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"color_selection",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "N",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("PREVIEW_PICTURE", "DETAIL_PICTURE", ""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "10",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "3",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("", ""),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				)
			); ?>
		</section>


		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"tech_list",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/tech/#ELEMENT_CODE#/",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "6",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "4",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("", "MINI_IMAGE_1", "SOON"),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N"
			)
		);?>
	</div>
</div>

<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"new_goods", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/cart/",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"OR\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:19:708\",\"DATA\":{\"logic\":\"Equal\",\"value\":6066}}]}",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "RAND",
		"ELEMENT_SORT_FIELD2" => "RAND",
		"ELEMENT_SORT_ORDER" => "ASC",
		"ELEMENT_SORT_ORDER2" => "ASC",
		"ENLARGE_PRODUCT" => "PROP",
		"ENLARGE_PROP" => "-",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "shop",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
		),
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DETAIL_PICTURE",
			5 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PAGE_ELEMENT_COUNT" => "50",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE_MOBILE" => "",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_CODE_PATH" => $_REQUEST["SECTION_CODE_PATH"],
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_CODE",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SHORTNAME",
			1 => "UF_GALLERY_ELEMENT",
			2 => "UF_MINI_IMAGE",
			3 => "",
		),
		"SEF_MODE" => "Y",
		"SEF_RULE" => "/catalog/#SECTION_CODE#/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "new_goods",
		"PROPERTY_CODE" => array(
			0 => "CDN_IMAGES_LIST",
			1 => "OFFERS",
			2 => "",
		),
		"PRODUCT_PROPERTIES" => array(
		)
	),
	false
); ?>

<section class="company">
	<div class="wrapper">
		<a href="/nashi-tsennosti/" class="company__item">
			<div class="wrap">
				<img src="<?= SITE_TEMPLATE_PATH . '/assets/images/our_values_bg.jpg' ?>" class="wrap_image" alt="our_values_bg.jpg" />
				<img src="/local/templates/maxonor/assets/images/dark_header/logo.svg" class="company_logo" alt="company_logo" />
			</div>
			<p class="item--title">Наши ценности</p>
		</a>
		<a href="/preimushchestva-produktsii/" class="company__item">
			<div class="wrap">
				<img src="<?= SITE_TEMPLATE_PATH . '/assets/images/production_advantages_bg.jpg' ?>" class="wrap_image" alt="production_advantages_bg.jpg" />
			</div>
			<p class="item--title">Преимущества продукции</p>
		</a>
	</div>
</section>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>