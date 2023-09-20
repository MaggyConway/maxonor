<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$mini_image = CFile::GetPath($arResult['PROPERTIES']['MINI_IMAGE_2']['VALUE']);

// if ($arResult['PROPERTIES']['SOON']['VALUE_XML_ID'] == 'Y') {
// 	$soon = ' soon';
// } else {
// 	$soon = '';
// }
?>

<div class="page_tech<?=' '.$arResult['PROPERTIES']['PAGE_TYPE']['VALUE']?>">
	<section class="page_hero" style="background: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>) no-repeat center center;"  data-mini-image="<?=$mini_image?>">
		<div class="page_hero--inner dark-50<?//=$soon?>">
			<h1 class="page_hero__title"><?=$arResult['NAME'];?></h1>
		</div>
	</section>

	<div class="wrapper">

	<?
		// echo '<pre>';
		// var_dump($arResult['PROPERTIES']['GALLERY']['VALUE']);
		// echo '</pre>';

		global $arrFilterTechCascade;

		$arrFilterTechCascade = [
			'IBLOCK_ID' => 9,
			'=ID' => $arResult['PROPERTIES']['GALLERY']['VALUE']
		];
	?>

		<?=$arResult['DETAIL_TEXT'];?>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"tech_cascade",
			Array(
				"PAGE_TYPE" => $arResult['PROPERTIES']['PAGE_TYPE']['VALUE'],
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
				"FILTER_NAME" => "arrFilterTechCascade",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "9",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "",
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
				"PROPERTY_CODE" => array("", "PRODUCT", ""),
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



	<div class="tech_catalog">
		<div class="wrapper">
			
				<div class="catalog_head">
					<h2><?=($arResult['PROPERTIES']['PAGE_TYPE']['VALUE'] == 'termo') ? 'Душевые системы с&nbsp;термостатом' : $arResult['NAME'];?></h2>
	
					<?
					// $APPLICATION->IncludeFile(
					// 	SITE_DIR . "/include/sorting_panel.php",
					// 	array(),
					// 	array(
					// 		"MODE" => "html"
					// 	)
					// );
					?>
				</div>
			
			
			<div class="catalog_section">
				<?
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.smart.filter",
					"main",
					Array(
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CONVERT_CURRENCY" => "N",
						"DISPLAY_ELEMENT_COUNT" => "Y",
						"FILTER_NAME" => "arrFilter",
						"FILTER_VIEW_MODE" => "vertical",
						"HIDE_NOT_AVAILABLE" => "N",
						"IBLOCK_ID" => "19",
						"IBLOCK_TYPE" => "shop",
						"PAGER_PARAMS_NAME" => "arrPager",
						"POPUP_POSITION" => "left",
						"PREFILTER_NAME" => "",
						"PRICE_CODE" => array("BASE"),
						"SAVE_IN_SESSION" => "N",
						"SECTION_CODE" => "",
						"SECTION_CODE_PATH" => "",
						"SECTION_DESCRIPTION" => "-",
						"SECTION_ID" => "",
						"SECTION_TITLE" => "-",
						"SEF_MODE" => "Y",
						"SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/#SMART_FILTER_PATH#/apply/",
						"SMART_FILTER_PATH" => "",
						"TEMPLATE_THEME" => "",
						"XML_EXPORT" => "N"
					)
				);
				?>
				<div class="ajax_content" style="width: 100%;">
					<?
	
					// echo '<pre>';
					// var_dump($arResult['PROPERTIES']['PAGE_TYPE']['VALUE']);
					// echo '</pre>';
	
	
					switch ($arResult['PROPERTIES']['PAGE_TYPE']['VALUE']) {
						case 'smart':
	
							$APPLICATION->IncludeComponent(
								"bitrix:catalog.section",
								"tech",
								Array(
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
									"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:19:874\",\"DATA\":{\"logic\":\"Equal\",\"value\":4}}]}",
									"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
									"DISABLE_INIT_JS_IN_COMPONENT" => "N",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_COMPARE" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_SORT_FIELD" => "show_counter",
									"ELEMENT_SORT_ORDER" => "desc",
									"ELEMENT_SORT_FIELD2" => "RAND",
									"ELEMENT_SORT_ORDER2" => "ASC",
									"ENLARGE_PRODUCT" => "PROP",
									"ENLARGE_PROP" => "-",
									"FILTER_NAME" => "",
									"HIDE_NOT_AVAILABLE" => "Y",
									"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
									"IBLOCK_ID" => "19",
									"IBLOCK_TYPE" => "shop",
									"INCLUDE_SUBSECTIONS" => "Y",
									"LABEL_PROP" => array(),
									"LABEL_PROP_MOBILE" => "",
									"LABEL_PROP_POSITION" => "top-left",
									"LAZY_LOAD" => "Y",
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
									"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"",),
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
									"PAGE_ELEMENT_COUNT" => "9",
									"PARTIAL_PRODUCT_PROPERTIES" => "N",
									"PRICE_CODE" => array("BASE"),
									"PRICE_VAT_INCLUDE" => "Y",
									"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									"PRODUCT_DISPLAY_MODE" => "N",
									"PRODUCT_ID_VARIABLE" => "id",
									"PRODUCT_PROPERTIES" => array("OFFERS"),
									"PRODUCT_PROPS_VARIABLE" => "prop",
									"PRODUCT_QUANTITY_VARIABLE" => "quantity",
									"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
									"PRODUCT_SUBSCRIPTION" => "N",
									"PROPERTY_CODE" => array("CDN_IMAGES_LIST",""),
									"PROPERTY_CODE_MOBILE" => array("CDN_IMAGES_LIST"),
									"RCM_PROD_ID" => "",
									"RCM_TYPE" => "personal",
									"SECTION_CODE" => "",
									"SECTION_CODE_PATH" => "",
									"SECTION_ID" => "",
									"SECTION_ID_VARIABLE" => "SECTION_CODE_PATH",
									"SECTION_URL" => "/catalog/#SECTION_CODE#/",
									"SECTION_USER_FIELDS" => array("UF_SHORTNAME","UF_GALLERY_ELEMENT","UF_MINI_IMAGE",""),
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
									"USE_PRODUCT_QUANTITY" => "N"
								)
							);
							
	
							break;
	
						case 'termo':
	
							$APPLICATION->IncludeComponent(
								"bitrix:catalog.section",
								"tech",
								Array(
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
									"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:19:874\",\"DATA\":{\"logic\":\"Equal\",\"value\":5}}]}",
									"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
									"DISABLE_INIT_JS_IN_COMPONENT" => "N",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_COMPARE" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_SORT_FIELD" => "show_counter",
									"ELEMENT_SORT_ORDER" => "desc",
									"ELEMENT_SORT_FIELD2" => "RAND",
									"ELEMENT_SORT_ORDER2" => "ASC",
									"ENLARGE_PRODUCT" => "PROP",
									"ENLARGE_PROP" => "-",
									"FILTER_NAME" => "arrFilterTechProductionTermo",
									"HIDE_NOT_AVAILABLE" => "Y",
									"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
									"IBLOCK_ID" => "19",
									"IBLOCK_TYPE" => "shop",
									"INCLUDE_SUBSECTIONS" => "Y",
									"LABEL_PROP" => array(),
									"LABEL_PROP_MOBILE" => "",
									"LABEL_PROP_POSITION" => "top-left",
									"LAZY_LOAD" => "Y",
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
									"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"",),
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
									"PAGE_ELEMENT_COUNT" => "9",
									"PARTIAL_PRODUCT_PROPERTIES" => "N",
									"PRICE_CODE" => array("BASE"),
									"PRICE_VAT_INCLUDE" => "Y",
									"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									"PRODUCT_DISPLAY_MODE" => "N",
									"PRODUCT_ID_VARIABLE" => "id",
									"PRODUCT_PROPERTIES" => array("OFFERS"),
									"PRODUCT_PROPS_VARIABLE" => "prop",
									"PRODUCT_QUANTITY_VARIABLE" => "quantity",
									"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
									"PRODUCT_SUBSCRIPTION" => "N",
									"PROPERTY_CODE" => array("CDN_IMAGES_LIST", ""),
									"PROPERTY_CODE_MOBILE" => array("CDN_IMAGES_LIST"),
									"RCM_PROD_ID" => "",
									"RCM_TYPE" => "personal",
									"SECTION_CODE" => "",
									"SECTION_CODE_PATH" => "",
									"SECTION_ID" => "",
									"SECTION_ID_VARIABLE" => "SECTION_CODE_PATH",
									"SECTION_URL" => "/catalog/#SECTION_CODE#/",
									"SECTION_USER_FIELDS" => array("UF_SHORTNAME", "UF_GALLERY_ELEMENT", "UF_MINI_IMAGE", ""),
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
									"USE_PRODUCT_QUANTITY" => "N"
								)
							);
							
	
							break;
	
						case 'sensor':
	
							$APPLICATION->IncludeComponent(
								"bitrix:catalog.section",
								"tech",
								Array(
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
									"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:19:874\",\"DATA\":{\"logic\":\"Equal\",\"value\":6}}]}",
									"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
									"DISABLE_INIT_JS_IN_COMPONENT" => "N",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_COMPARE" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_SORT_FIELD" => "show_counter",
									"ELEMENT_SORT_ORDER" => "desc",
									"ELEMENT_SORT_FIELD2" => "RAND",
									"ELEMENT_SORT_ORDER2" => "ASC",
									"ENLARGE_PRODUCT" => "PROP",
									"ENLARGE_PROP" => "-",
									"FILTER_NAME" => "arrFilterTechProductionSensor",
									"HIDE_NOT_AVAILABLE" => "Y",
									"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
									"IBLOCK_ID" => "19",
									"IBLOCK_TYPE" => "shop",
									"INCLUDE_SUBSECTIONS" => "Y",
									"LABEL_PROP" => array(),
									"LABEL_PROP_MOBILE" => "",
									"LABEL_PROP_POSITION" => "top-left",
									"LAZY_LOAD" => "Y",
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
									"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"",),
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
									"PAGE_ELEMENT_COUNT" => "9",
									"PARTIAL_PRODUCT_PROPERTIES" => "N",
									"PRICE_CODE" => array("BASE"),
									"PRICE_VAT_INCLUDE" => "Y",
									"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									"PRODUCT_DISPLAY_MODE" => "N",
									"PRODUCT_ID_VARIABLE" => "id",
									"PRODUCT_PROPERTIES" => array("OFFERS"),
									"PRODUCT_PROPS_VARIABLE" => "prop",
									"PRODUCT_QUANTITY_VARIABLE" => "quantity",
									"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
									"PRODUCT_SUBSCRIPTION" => "N",
									"PROPERTY_CODE" => array("CDN_IMAGES_LIST", ""),
									"PROPERTY_CODE_MOBILE" => array("CDN_IMAGES_LIST"),
									"RCM_PROD_ID" => "",
									"RCM_TYPE" => "personal",
									"SECTION_CODE" => "",
									"SECTION_CODE_PATH" => "",
									"SECTION_ID" => "",
									"SECTION_ID_VARIABLE" => "SECTION_CODE_PATH",
									"SECTION_URL" => "/catalog/#SECTION_CODE#/",
									"SECTION_USER_FIELDS" => array("UF_SHORTNAME", "UF_GALLERY_ELEMENT", "UF_MINI_IMAGE", ""),
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
									"USE_PRODUCT_QUANTITY" => "N"
								)
							);
							
	
							break;
	
						case 'built_in':
	
							$APPLICATION->IncludeComponent(
								"bitrix:catalog.section",
								"tech",
								Array(
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
									"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:19:874\",\"DATA\":{\"logic\":\"Equal\",\"value\":7}}]}",
									"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
									"DISABLE_INIT_JS_IN_COMPONENT" => "N",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_COMPARE" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_SORT_FIELD" => "show_counter",
									"ELEMENT_SORT_ORDER" => "desc",
									"ELEMENT_SORT_FIELD2" => "RAND",
									"ELEMENT_SORT_ORDER2" => "ASC",
									"ENLARGE_PRODUCT" => "PROP",
									"ENLARGE_PROP" => "-",
									"FILTER_NAME" => "arrFilterTechProductionVstroen",
									"HIDE_NOT_AVAILABLE" => "Y",
									"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
									"IBLOCK_ID" => "19",
									"IBLOCK_TYPE" => "shop",
									"INCLUDE_SUBSECTIONS" => "Y",
									"LABEL_PROP" => array(),
									"LABEL_PROP_MOBILE" => "",
									"LABEL_PROP_POSITION" => "top-left",
									"LAZY_LOAD" => "Y",
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
									"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"",),
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
									"PAGE_ELEMENT_COUNT" => "9",
									"PARTIAL_PRODUCT_PROPERTIES" => "N",
									"PRICE_CODE" => array("BASE"),
									"PRICE_VAT_INCLUDE" => "Y",
									"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									"PRODUCT_DISPLAY_MODE" => "N",
									"PRODUCT_ID_VARIABLE" => "id",
									"PRODUCT_PROPERTIES" => array("OFFERS"),
									"PRODUCT_PROPS_VARIABLE" => "prop",
									"PRODUCT_QUANTITY_VARIABLE" => "quantity",
									"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
									"PRODUCT_SUBSCRIPTION" => "N",
									"PROPERTY_CODE" => array("CDN_IMAGES_LIST", ""),
									"PROPERTY_CODE_MOBILE" => array("CDN_IMAGES_LIST"),
									"RCM_PROD_ID" => "",
									"RCM_TYPE" => "personal",
									"SECTION_CODE" => "",
									"SECTION_CODE_PATH" => "",
									"SECTION_ID" => "",
									"SECTION_ID_VARIABLE" => "SECTION_CODE_PATH",
									"SECTION_URL" => "/catalog/#SECTION_CODE#/",
									"SECTION_USER_FIELDS" => array("UF_SHORTNAME", "UF_GALLERY_ELEMENT", "UF_MINI_IMAGE", ""),
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
									"USE_PRODUCT_QUANTITY" => "N"
								)
							);
							
	
							break;
	
						default:
							break;
					}
					?>
	
	
					<!-- <div class="catalog_section soon">
						<p>Товары скоро появятся</p>
						<a class="link-next" href="/catalog">Перейти в каталог</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>