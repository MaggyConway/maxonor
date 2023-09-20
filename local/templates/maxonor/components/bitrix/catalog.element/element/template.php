<!-- КАРТОЧКА ТОВАРА, ВЕРСТКА-->

<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */


$this->setFrameMode(true);
//$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES'])) {
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId . '_dsc_pict',
	'STICKER_ID' => $mainId . '_sticker',
	'BIG_SLIDER_ID' => $mainId . '_big_slider',
	'BIG_IMG_CONT_ID' => $mainId . '_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId . '_slider_cont',
	'OLD_PRICE_ID' => $mainId . '_old_price',
	'PRICE_ID' => $mainId . '_price',
	'DISCOUNT_PRICE_ID' => $mainId . '_price_discount',
	'PRICE_TOTAL' => $mainId . '_price_total',
	'SLIDER_CONT_OF_ID' => $mainId . '_slider_cont_',
	'QUANTITY_ID' => $mainId . '_quantity',
	'QUANTITY_DOWN_ID' => $mainId . '_quant_down',
	'QUANTITY_UP_ID' => $mainId . '_quant_up',
	'QUANTITY_MEASURE' => $mainId . '_quant_measure',
	'QUANTITY_LIMIT' => $mainId . '_quant_limit',
	'BUY_LINK' => $mainId . '_buy_link',
	'ADD_BASKET_LINK' => $mainId . '_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId . '_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId . '_not_avail',
	'COMPARE_LINK' => $mainId . '_compare_link',
	'TREE_ID' => $mainId . '_skudiv',
	'DISPLAY_PROP_DIV' => $mainId . '_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId . '_main_sku_prop',
	'OFFER_GROUP' => $mainId . '_set_group_',
	'BASKET_PROP_DIV' => $mainId . '_basket_prop',
	'SUBSCRIBE_LINK' => $mainId . '_subscribe',
	'TABS_ID' => $mainId . '_tabs',
	'TAB_CONTAINERS_ID' => $mainId . '_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId . '_small_card_panel',
	'TABS_PANEL_ID' => $mainId . '_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob' . preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers) {
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer) {
		if ($offer['MORE_PHOTO_COUNT'] > 1) {
			$showSliderControls = true;
			break;
		}
	}
} else {
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
	}
}

global $USER;


$cdnImagesList = $arResult['PROPERTIES']['CDN_IMAGES_LIST']['VALUE'];
$articul = $arResult['PROPERTIES']['SANINVEST_ARTICUL']['VALUE'];

if (\Bitrix\Main\Loader::includeModule('silab.sitecore')) {
	$images = \Silab\SiteCore\Repositories\ProductRepository::ConvertImagePath($cdnImagesList, $articul);
}

// $image = array_shift($images);

// echo "<pre>";
// var_dump($images);
// echo "</pre>";
?>

<div class="product_card" id="<?= $itemIds['ID'] ?>">

	<?/* if ($arResult["PROPERTIES"]["SALE"]["VALUE"] == "Y") { ?>

		<div class="item_sale_sticker">SALE</div>

	<? }*/ ?>

	<div class="product_card_flex">

		<div class="product-item-detail-slider-container" id="<?= $itemIds['BIG_SLIDER_ID'] ?>">
			<span class="product-item-detail-slider-close" data-entity="close-popup"></span>
			<div class="product-item-detail-slider-block
						<?= ($arParams['IMAGE_RESOLUTION'] === '1by1' ? 'product-item-detail-slider-block-square' : '') ?>" data-entity="images-slider-block">
				<span class="product-item-detail-slider-left" data-entity="slider-control-left" style="display: none;"></span>
				<span class="product-item-detail-slider-right" data-entity="slider-control-right" style="display: none;"></span>
				<div class="product-item-label-text <?= $labelPositionClass ?>" id="<?= $itemIds['STICKER_ID'] ?>" <?= (!$arResult['LABEL'] ? 'style="display: none;"' : '') ?>>
					<?php
					if ($arResult['LABEL'] && !empty($arResult['LABEL_ARRAY_VALUE'])) {
						foreach ($arResult['LABEL_ARRAY_VALUE'] as $code => $value) {
					?>
							<div<?= (!isset($arParams['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '') ?>>
								<span title="<?= $value ?>"><?= $value ?></span>
				</div>
		<?php
						}
					}
		?>
			</div>
			<div class="product-item-detail-slider-images-container" data-entity="images-container">
				<?php
				if (!empty($images)) {
					foreach ($images as $key => $photo) {
				?>
						<div class="product-item-detail-slider-image<?= ($key == 0 ? ' active' : '') ?>" data-entity="image" data-id="<?= $key ?>">
							<img src="<?= $photo ?>" alt="<?= $alt ?>" title="<?= $title ?>" <?= ($key == 0 ? ' itemprop="image"' : '') ?>>
						</div>
					<?php
					}
				} else {?>
					<div class="product-item-detail-slider-image<?= ($key == 0 ? ' active' : '') ?>" data-entity="image" data-id="<?= $key ?>">
						<img src="<?= SITE_TEMPLATE_PATH.'/assets/images/no-image.png' ?>" alt="<?= $alt ?>" title="<?= $title ?>" <?= ($key == 0 ? ' itemprop="image"' : '') ?>>
					</div>
				<?}

				if ($arParams['SLIDER_PROGRESS'] === 'Y') {
					?>
					<div class="product-item-detail-slider-progress-bar" data-entity="slider-progress-bar" style="width: 0;"></div>
				<?php
				}
				?>
			</div>
		</div>
		<?php
		if ($showSliderControls) {
			if ($haveOffers) {
				foreach ($arResult['OFFERS'] as $keyOffer => $offer) {
					if (!isset($offer['MORE_PHOTO_COUNT']) || $offer['MORE_PHOTO_COUNT'] <= 0)
						continue;

					$strVisible = $arResult['OFFERS_SELECTED'] == $keyOffer ? '' : 'none';
		?>
					<div class="product-item-detail-slider-controls-block" id="<?= $itemIds['SLIDER_CONT_OF_ID'] . $offer['ID'] ?>" style="display: <?= $strVisible ?>;">
						<?php
						foreach ($images as $keyPhoto => $photo) {
						?>
							<div class="product-item-detail-slider-controls-image<?= ($keyPhoto == 0 ? ' active' : '') ?>" data-entity="slider-control" data-value="<?= $offer['ID'] . '_' . $keyPhoto ?>">
								<img src="<?= $photo ?>">
							</div>
						<?php
						}
						?>
					</div>
				<?php
				}
			} else {
				?>
				<div class="product-item-detail-slider-controls-block" id="<?= $itemIds['SLIDER_CONT_ID'] ?>">
					<?php
					if (!empty($images)) {
						foreach ($images as $key => $photo) {
					?>
							<div class="product-item-detail-slider-controls-image<?= ($key == 0 ? ' active' : '') ?>" data-entity="slider-control" data-value="<?= $key ?>">
								<img src="<?= $photo ?>">
							</div>
					<?php
						}
					}
					?>
				</div>
		<?php
			}
		}
		?>
	</div>






	<div class="product_card_detail">

		<h1 class="name"><?= $arResult["NAME"] ?></h1>

		<!-- <div class="reference"><span>Артикул:</span>&nbsp;<? //= $arResult["PROPERTIES"]["REFERENCE"]["VALUE"] 
																?></div> -->
<?/*
		<div class="product-item-detail-pay-block">
			<? foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName) {
				switch ($blockName) {

					case 'price': ?>

						<?
						$priceValue = $price['PRICE'] ?? CCatalogProduct::GetOptimalPrice($actualItem['ID'], 1)['DISCOUNT_PRICE'];
						
						if (!empty($priceValue)):?>
						<div class="prises">
							<div class="current_price">
								<div id="<?= $itemIds['PRICE_ID'] ?>">
									<?= number_format($priceValue, 2, '.', ' ') . ' ₽' ?>
								</div>
							</div>
						</div>
						<?endif;?>
			<?
						
						break;
				}
			} ?>
		</div>
*/?>
		<?php
		foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName) {
			switch ($blockName) {
				case 'sku':
					if ($haveOffers && !empty($arResult['OFFERS_PROP'])) { ?>
						<div id="<?= $itemIds['TREE_ID'] ?>">
							<?php
							foreach ($arResult['SKU_PROPS'] as $skuProperty) {
								if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))
									continue;

								$propertyId = $skuProperty['ID'];
								$skuProps[] = array(
									'ID' => $propertyId,
									'SHOW_MODE' => $skuProperty['SHOW_MODE'],
									'VALUES' => $skuProperty['VALUES'],
									'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
								);
							?>
								<div class="product-item-detail-info-container" data-entity="sku-line-block">
									<div class="product-item-detail-info-container-title"><?= htmlspecialcharsEx($skuProperty['NAME']) ?></div>
									<div class="product-item-scu-container">
										<div class="product-item-scu-block">
											<div class="product-item-scu-list">
												<ul class="product-item-scu-item-list">
													<?php
													foreach ($skuProperty['VALUES'] as &$value) {
														$value['NAME'] = htmlspecialcharsbx($value['NAME']);

														if ($skuProperty['SHOW_MODE'] === 'PICT') {
													?>
															<li class="product-item-scu-item-color-container" title="<?= $value['NAME'] ?>" data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>" data-onevalue="<?= $value['ID'] ?>">
																<div class="product-item-scu-item-color-block">
																	<div class="product-item-scu-item-color" title="<?= $value['NAME'] ?>" style="background-image: url('<?= $value['PICT']['SRC'] ?>');">
																	</div>
																</div>
															</li>
														<?php
														} else {
														?>
															<li class="product-item-scu-item-text-container" title="<?= $value['NAME'] ?>" data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>" data-onevalue="<?= $value['ID'] ?>">
																<div class="product-item-scu-item-text-block">
																	<div class="product-item-scu-item-text"><?= $value['NAME'] ?></div>
																</div>
															</li>
													<?php
														}
													}
													?>
												</ul>
												<div style="clear: both;"></div>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
		<?php
					}
					break;
			}
		}
		?>

		<!-- <div class="detail_block">
			<p>Цвет:</p>

			<ul>
				<li><a href="#"><img src="/local/templates/maxonor/assets/images/color1.svg" alt="color" /></a></li>
				<li><a href="#"><img src="/local/templates/maxonor/assets/images/color2.svg" alt="color" /></a></li>
				<li><a href="#"><img src="/local/templates/maxonor/assets/images/color3.svg" alt="color" /></a></li>
			</ul>
		</div> -->

		<?
		// $APPLICATION->IncludeComponent(
		// 	"silab:market",
		// 	"",
		// 	array(
		// 		'SANINVEST_ARTICUL' => $arResult['PROPERTIES']['SANINVEST_ARTICUL']['VALUE']
		// 	)
		// );
		?>

		<a href="#product_card_props" class="page_description__link-more">Характеристики<span></span></a>
	</div>

</div><!--  end of .producs_card_flex -->

<?
// echo '<pre>';
// var_dump($arResult['DISPLAY_PROPERTIES']);
// echo '</pre>';

if (!empty($arResult['DISPLAY_PROPERTIES'])) { ?>
	<section id="product_card_props">
		<h2>Характеристики:</h2>
		<ul>
			<?php
			foreach ($arResult['DISPLAY_PROPERTIES'] as $property) { ?>
				<li><span><?= $property['NAME'] ?>:</span>

					<?= (is_array($property['DISPLAY_VALUE'])
						? implode(' / ', $property['DISPLAY_VALUE'])
						: $property['DISPLAY_VALUE']) ?></li>
			<? }
			unset($property); ?>
		</ul>
	</section>
<? } ?>


<? 
// global $arrFilterElementDetailAccessories;

// $arrFilterElementDetailAccessories = [
// 	'=IBLOCK_SECTION_ID' => [
// 		'151', // Аксессуары для ванной
// 		'157', //Аксессуары для туалета
// 	]
// ];

// $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.section",
// 	"accessories",
// 	array(
// 		"ACTION_VARIABLE" => "action",
// 		"ADD_PICT_PROP" => "MORE_PHOTO",
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",
// 		"ADD_SECTIONS_CHAIN" => "Y",
// 		"ADD_TO_BASKET_ACTION" => "ADD",
// 		"AJAX_MODE" => "N",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"BACKGROUND_IMAGE" => "-",
// 		"BASKET_URL" => "/cart/",
// 		"BROWSER_TITLE" => "UF_SHORTNAME",
// 		"CACHE_FILTER" => "Y",
// 		"CACHE_GROUPS" => "Y",
// 		"CACHE_TIME" => "36000000",
// 		"CACHE_TYPE" => "A",
// 		"COMPATIBLE_MODE" => "Y",
// 		"CONVERT_CURRENCY" => "N",
// 		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:2:226\",\"DATA\":{\"logic\":\"Equal\",\"value\":5637}}]}",
// 		"DETAIL_URL" => "#ELEMENT_CODE#/",
// 		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"DISPLAY_COMPARE" => "N",
// 		"DISPLAY_TOP_PAGER" => "N",
// 		"ELEMENT_SORT_FIELD" => "sort",
// 		"ELEMENT_SORT_FIELD2" => "id",
// 		"ELEMENT_SORT_ORDER" => "asc",
// 		"ELEMENT_SORT_ORDER2" => "desc",
// 		"ENLARGE_PRODUCT" => "PROP",
// 		"ENLARGE_PROP" => "-",
// 		"FILTER_NAME" => "arrFilterElementDetailAccessories",
// 		"HIDE_NOT_AVAILABLE" => "N",
// 		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
// 		"IBLOCK_ID" => "19",
// 		"IBLOCK_TYPE" => "shop",
// 		"INCLUDE_SUBSECTIONS" => "Y",
// 		"LABEL_PROP" => array(),
// 		"LAZY_LOAD" => "N",
// 		"LINE_ELEMENT_COUNT" => "3",
// 		"LOAD_ON_SCROLL" => "N",
// 		"MESSAGE_404" => "",
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
// 		"MESS_BTN_BUY" => "Купить",
// 		"MESS_BTN_DETAIL" => "Подробнее",
// 		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",
// 		"META_DESCRIPTION" => "-",
// 		"META_KEYWORDS" => "-",
// 		"OFFERS_FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", ""),
// 		"OFFERS_LIMIT" => "6",
// 		"OFFERS_SORT_FIELD" => "sort",
// 		"OFFERS_SORT_FIELD2" => "id",
// 		"OFFERS_SORT_ORDER" => "asc",
// 		"OFFERS_SORT_ORDER2" => "desc",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "N",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_TEMPLATE" => ".default",
// 		"PAGER_TITLE" => "",
// 		"PAGE_ELEMENT_COUNT" => "6",
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",
// 		"PRICE_CODE" => array("BASE"),
// 		"PRICE_VAT_INCLUDE" => "Y",
// 		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
// 		"PRODUCT_DISPLAY_MODE" => "N",
// 		"PRODUCT_ID_VARIABLE" => "id",
// 		"PRODUCT_PROPS_VARIABLE" => "prop",
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
// 		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
// 		"PRODUCT_SUBSCRIPTION" => "N",
// 		"PROPERTY_CODE_MOBILE" => array("STICKER", "BRAND", "MORE_PHOTO", "IN_SELECTION", "INTERIOR_PHOTO"),
// 		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
// 		"RCM_TYPE" => "personal",
// 		"SECTION_CODE" => "",
// 		"SECTION_CODE_PATH" => "",
// 		"SECTION_ID" => "",
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",
// 		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
// 		"SECTION_USER_FIELDS" => array("", ""),
// 		"SEF_MODE" => "Y",
// 		"SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
// 		"SET_BROWSER_TITLE" => "Y",
// 		"SET_LAST_MODIFIED" => "N",
// 		"SET_META_DESCRIPTION" => "Y",
// 		"SET_META_KEYWORDS" => "Y",
// 		"SET_STATUS_404" => "N",
// 		"SET_TITLE" => "Y",
// 		"SHOW_404" => "N",
// 		"SHOW_ALL_WO_SECTION" => "Y",
// 		"SHOW_CLOSE_POPUP" => "N",
// 		"SHOW_DISCOUNT_PERCENT" => "N",
// 		"SHOW_FROM_SECTION" => "N",
// 		"SHOW_MAX_QUANTITY" => "N",
// 		"SHOW_OLD_PRICE" => "N",
// 		"SHOW_PRICE_COUNT" => "1",
// 		"SHOW_SLIDER" => "N",
// 		"SLIDER_INTERVAL" => "3000",
// 		"SLIDER_PROGRESS" => "N",
// 		"TEMPLATE_THEME" => "blue",
// 		"USE_ENHANCED_ECOMMERCE" => "N",
// 		"USE_MAIN_ELEMENT_SECTION" => "N",
// 		"USE_PRICE_COUNT" => "N",
// 		"USE_PRODUCT_QUANTITY" => "N"
// 	)
// );

?>



<?

$current_collection_id = $arResult['PROPERTIES']['COLLECTION_ELEMENT_ID']["VALUE"];

// echo "<pre>";
// var_dump($arResult["DISPLAY_PROPERTIES"]["COLLECTION"]["LINK_ELEMENT_VALUE"][$current_collection_id]["NAME"]);
// echo "</pre>";
?>
</div><!-- end of product_card -->
<section class="page_collection_detail page_element_detail" style="padding-bottom: 160px; margin-bottom: 0;">
	<?

	$currentCollection = CIBlockElement::GetById($current_collection_id)->fetch();

	$current_collection_name = $currentCollection['NAME'];
	$current_collection_page = str_replace("#ELEMENT_CODE#", $currentCollection['CODE'], $currentCollection['DETAIL_PAGE_URL']);

	$arIds = [];

	$res = CIBlockElement::GetList(
		["SORT" => "ASC"], 
		[
			'IBLOCK_ID' => 19,
			'PROPERTY_COLLECTION_ELEMENT_ID' => $current_collection_id,
			'!ID' => $arResult['ID'],
		], 
		false, 
		false, 
		['ID']
	);

	while ($res_elems = $res->GetNext()) 
	{
		$arIds[] = $res_elems['ID'];
	}

	if (is_array($arIds) && count($arIds) > 0)
	{
		global $arrFilterDetailCollectionProducts;

		$arrFilterDetailCollectionProducts = [
			'=ID' => $arIds
		];
		?>
		<h2>Еще из&nbsp;серии <?= $current_collection_name ?></h2>
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"detail_collection_products",
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
				"CACHE_TYPE" => "N",
				"COMPATIBLE_MODE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"CUSTOM_FILTER" => "",
				"DETAIL_URL" => "",
				"PROPERTY_CODE" => array("TYPE","GALLERY_ELEMENT",""),
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILTER_NAME" => "arrFilterDetailCollectionProducts",
				"HIDE_NOT_AVAILABLE" => "N",
				"HIDE_NOT_AVAILABLE_OFFERS" => "N",
				"IBLOCK_ID" => "19",
				"IBLOCK_TYPE" => "shop",
				"INCLUDE_SUBSECTIONS" => "Y",
				"LABEL_PROP" => array(),
				"LAZY_LOAD" => "N",
				"LINE_ELEMENT_COUNT" => "3",
				"LOAD_ON_SCROLL" => "Y",
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
				"OFFERS_LIMIT" => "9",
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
				"PAGE_ELEMENT_COUNT" => "8",
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
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "Y",
				"RCM_PROD_ID" => "",
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "",
				"SECTION_CODE_PATH" => "",
				"SECTION_ID" => "",
				"SECTION_ID_VARIABLE" => "",
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "UF_SHORTNAME",
					2 => "",
				),
				"SEF_MODE" => "Y",
				"SEF_RULE" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SHOW_ALL_WO_SECTION" => "Y",
				"SHOW_CLOSE_POPUP" => "N",
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
				"COMPONENT_TEMPLATE" => "products"
			),
			false
		); ?>
		<a href="<?=$current_collection_page?>" class="page_description__link-more">Смотреть коллекцию <?=$current_collection_name?><span></span></a>
		<?
	}?>
</section>


<meta itemprop="name" content="<?= $name ?>" />
<meta itemprop="category" content="<?= $arResult['CATEGORY_PATH'] ?>" />

<? if ($haveOffers) {

	$offerIds = array();
	$offerCodes = array();

	$useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

	foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer) {

		$offerIds[] = (int)$jsOffer['ID'];
		$offerCodes[] = $jsOffer['CODE'];

		$fullOffer = $arResult['OFFERS'][$ind];
		$measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

		$strAllProps = '';
		$strMainProps = '';
		$strPriceRangesRatio = '';
		$strPriceRanges = '';

		if ($arResult['SHOW_OFFERS_PROPS']) {

			if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {

				foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property) {

					$current = '<dt>' . $property['NAME'] . '</dt><dd>' . (is_array($property['VALUE'])
						? implode(' / ', $property['VALUE'])
						: $property['VALUE']
					) . '</dd>';
					$strAllProps .= $current;

					if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']])) {
						$strMainProps .= $current;
					}
				}

				unset($current);
			}
		}

		if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1) {

			$strPriceRangesRatio = '(' . Loc::getMessage(
				'CT_BCE_CATALOG_RATIO_PRICE',
				array('#RATIO#' => ($useRatio
					? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
					: '1'
				) . ' ' . $measureName)
			) . ')';

			foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range) {
				if ($range['HASH'] !== 'ZERO-INF') {
					$itemPrice = false;

					foreach ($jsOffer['ITEM_PRICES'] as $itemPrice) {
						if ($itemPrice['QUANTITY_HASH'] === $range['HASH']) {
							break;
						}
					}

					if ($itemPrice) {

						$strPriceRanges .= '<dt>' . Loc::getMessage(
							'CT_BCE_CATALOG_RANGE_FROM',
							array('#FROM#' => $range['SORT_FROM'] . ' ' . $measureName)
						) . ' ';

						if (is_infinite($range['SORT_TO'])) {
							$strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
						} else {
							$strPriceRanges .= Loc::getMessage(
								'CT_BCE_CATALOG_RANGE_TO',
								array('#TO#' => $range['SORT_TO'] . ' ' . $measureName)
							);
						}

						$strPriceRanges .= '</dt><dd>' . ($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']) . '</dd>';
					}
				}
			}
			unset($range, $itemPrice);
		}

		$jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
		$jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
		$jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
		$jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;
	}

	$templateData['OFFER_IDS'] = $offerIds;
	$templateData['OFFER_CODES'] = $offerCodes;
	unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

	$jsParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => true,
			'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
			'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
			'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
			'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
			'OFFER_GROUP' => $arResult['OFFER_GROUP'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
			'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
			'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
			'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
			'USE_STICKERS' => true,
			'USE_SUBSCRIBE' => $showSubscribe,
			'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
			'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
			'ALT' => $alt,
			'TITLE' => $title,
			'MAGNIFIER_ZOOM_PERCENT' => 200,
			'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
			'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
			'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
				? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
				: null
		),
		'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
		'VISUAL' => $itemIds,
		'DEFAULT_PICTURE' => array(
			'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
			'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
		),
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'ACTIVE' => $arResult['ACTIVE'],
			'NAME' => $arResult['~NAME'],
			'CATEGORY' => $arResult['CATEGORY_PATH']
		),
		'BASKET' => array(
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'BASKET_URL' => $arParams['BASKET_URL'],
			'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		),
		'OFFERS' => $arResult['JS_OFFERS'],
		'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
		'TREE_PROPS' => $skuProps
	);
} else {
	$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);

	if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !$emptyProductProperties) { ?>

		<div id="<?= $itemIds['BASKET_PROP_DIV'] ?>" style="display: none;">

			<? if (!empty($arResult['PRODUCT_PROPERTIES_FILL'])) {

				foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propId => $propInfo) { ?>
					<input type="hidden" name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]" value="<?= htmlspecialcharsbx($propInfo['ID']) ?>">

				<? unset($arResult['PRODUCT_PROPERTIES'][$propId]);
				}
			}

			$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
			if (!$emptyProductProperties) { ?>
				<table>
					<? foreach ($arResult['PRODUCT_PROPERTIES'] as $propId => $propInfo) { ?>
						<tr>
							<td><?= $arResult['PROPERTIES'][$propId]['NAME'] ?></td>
							<td>
								<? if (
									$arResult['PROPERTIES'][$propId]['PROPERTY_TYPE'] === 'L'
									&& $arResult['PROPERTIES'][$propId]['LIST_TYPE'] === 'C'
								) {
									foreach ($propInfo['VALUES'] as $valueId => $value) { ?>
										<label>
											<input type="radio" name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]" value="<?= $valueId ?>" <?= ($valueId == $propInfo['SELECTED'] ? '"checked"' : '') ?>>
											<?= $value ?>
										</label>
										<br>

									<? }
								} else { ?>

									<select name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]">
										<?
										foreach ($propInfo['VALUES'] as $valueId => $value) { ?>
											<option value="<?= $valueId ?>" <?= ($valueId == $propInfo['SELECTED'] ? '"selected"' : '') ?>>
												<?= $value ?>
											</option>
										<? } ?>
									</select>
								<? } ?>
							</td>
						</tr>
					<? } ?>
				</table>
			<? } ?>
		</div>
<? }

	$jsParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => !empty($arResult['ITEM_PRICES']),
			'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
			'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
			'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
			'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
			'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
			'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
			'USE_STICKERS' => true,
			'USE_SUBSCRIBE' => $showSubscribe,
			'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
			'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
			'ALT' => $alt,
			'TITLE' => $title,
			'MAGNIFIER_ZOOM_PERCENT' => 200,
			'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
			'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
			'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
				? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
				: null
		),
		'VISUAL' => $itemIds,
		'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'ACTIVE' => $arResult['ACTIVE'],
			'PICT' => reset($arResult['MORE_PHOTO']),
			'NAME' => $arResult['~NAME'],
			'SUBSCRIPTION' => true,
			'ITEM_PRICE_MODE' => $arResult['ITEM_PRICE_MODE'],
			'ITEM_PRICES' => $arResult['ITEM_PRICES'],
			'ITEM_PRICE_SELECTED' => $arResult['ITEM_PRICE_SELECTED'],
			'ITEM_QUANTITY_RANGES' => $arResult['ITEM_QUANTITY_RANGES'],
			'ITEM_QUANTITY_RANGE_SELECTED' => $arResult['ITEM_QUANTITY_RANGE_SELECTED'],
			'ITEM_MEASURE_RATIOS' => $arResult['ITEM_MEASURE_RATIOS'],
			'ITEM_MEASURE_RATIO_SELECTED' => $arResult['ITEM_MEASURE_RATIO_SELECTED'],
			'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
			'SLIDER' => $arResult['MORE_PHOTO'],
			'CAN_BUY' => $arResult['CAN_BUY'],
			'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
			'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
			'MAX_QUANTITY' => $arResult['PRODUCT']['QUANTITY'],
			'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
			'CATEGORY' => $arResult['CATEGORY_PATH']
		),
		'BASKET' => array(
			'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
			'EMPTY_PROPS' => $emptyProductProperties,
			'BASKET_URL' => $arParams['BASKET_URL'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		)
	);
	unset($emptyProductProperties);
} ?>

<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?= GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2') ?>',
		TITLE_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR') ?>',
		TITLE_BASKET_PROPS: '<?= GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS') ?>',
		BASKET_UNKNOWN_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR') ?>',
		BTN_SEND_PROPS: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS') ?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT') ?>',
		BTN_MESSAGE_CLOSE: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE') ?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP') ?>',
		TITLE_SUCCESSFUL: '<?= GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK') ?>',
		COMPARE_MESSAGE_OK: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK') ?>',
		COMPARE_UNKNOWN_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR') ?>',
		COMPARE_TITLE: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE') ?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT') ?>',
		PRODUCT_GIFT_LABEL: '<?= GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL') ?>',
		PRICE_TOTAL_PREFIX: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX') ?>',
		RELATIVE_QUANTITY_MANY: '<?= CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY']) ?>',
		RELATIVE_QUANTITY_FEW: '<?= CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW']) ?>',
		SITE_ID: '<?= CUtil::JSEscape($component->getSiteId()) ?>'
	});

	var <?= $obName ?> = new JCCatalogElement(<?= CUtil::PhpToJSObject($jsParams, false, true) ?>);
</script>

<? unset($actualItem, $itemIds, $jsParams);
