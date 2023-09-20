<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Смесители Bliss");
$APPLICATION->SetTitle("Смесители Bliss");
?>

<div class="page_collection_detail">
    <div class="wrapper">
        <section class="collection_cascade">
            <h1>Смесители Bliss</h1>

            <div class="wrap">
                <? for ($i = 1; $i < 7; $i++) { ?>
                    <div class="collection_cascade__map">
                        <? if ($i !== 4) : ?>
                            <img src="<?= SITE_TEMPLATE_PATH . '/assets/images/collection_detail/' . $i . '.jpg' ?>" alt="image_map" loading="lazy" />

                            <a href="#" target="_blank" class="collection_cascade__map__item" style="top: 20%; left: 56%;">
                                <span class="map--label"></span>
                                <div class="collection_cascade__map__item--desc">
                                    <p>MN4083&nbsp;></p>
                                    <p>Смеситель для&nbsp;кухни</p>
                                </div>
                            </a>
                        <? endif; ?>

                        <? if ($i == 4) : ?>
                            <a href="#" class="gallery_show_more">Загрузить еще</a>
                        <? endif; ?>
                    </div>
                <? } ?>
            </div>
        </section>
    </div>

    <section class="collection_products">
        <ul class="tabs">
            <li class="active">Все</li>
            <li>Для&nbsp;раковины</li>
            <li>Для&nbsp;ванны</li>
            <li>Для&nbsp;кухни</li>
        </ul>

        <div class="products_grid">
            <? $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "products",
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
                    "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                    "DETAIL_URL" => "",
                    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_COMPARE" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_SORT_FIELD" => "sort",
                    "ELEMENT_SORT_FIELD2" => "id",
                    "ELEMENT_SORT_ORDER" => "asc",
                    "ELEMENT_SORT_ORDER2" => "desc",
                    "ENLARGE_PRODUCT" => "STRICT",
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_NOT_AVAILABLE" => "Y",
                    "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                    "IBLOCK_ID" => "2",
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
        </div>

        <!-- <div class="products_grid">
            <? //for ($i = 0; $i < 8; $i++) { 
            ?>
                <div class="product-item-container" data-entity="item">
                    <div class="product-item">
                        <a class="product-item-image-wrapper" href="/catalog/smesiteli-dlya-rakoviny/smesitel-dlya-rakoviny-mn1083-3/" title="Смеситель для раковины MN1083" data-entity="image-wrapper">
                            <span class="product-item-image-slider-slide-container slide" id="_pict_slider" style="display: none;" data-slider-interval="3000" data-slider-wrap="true">
                            </span>
                            <span class="product-item-image-original" id="_pict" style="background-image: url('/upload/iblock/50e/gz43eqici5q7pmllmd9a3p2l8csouyru.png'); ">
                            </span>
                            <span class="product-item-image-alternative" id="_secondpict" style="background-image: url('/upload/iblock/50e/gz43eqici5q7pmllmd9a3p2l8csouyru.png'); ">
                            </span>
                            <div class="product-item-image-slider-control-container" id="_pict_slider_indicator" style="display: none;">
                            </div>
                        </a>
                        <div class="product-item-title">
                            <a href="/catalog/smesiteli-dlya-rakoviny/smesitel-dlya-rakoviny-mn1083-3/" title="Смеситель для раковины MN1083">
                                Смеситель для раковины MN1083 </a>
                        </div>
                    </div>
                </div>
            <? //} 
            ?>
        </div> -->
    </section>

    <div class="wrapper">
        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "accessories",
            array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "MORE_PHOTO",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/cart/",
                "BROWSER_TITLE" => "UF_SHORTNAME",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPATIBLE_MODE" => "Y",
                "CONVERT_CURRENCY" => "N",
                "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:2:226\",\"DATA\":{\"logic\":\"Equal\",\"value\":5637}}]}",
                "DETAIL_URL" => "#ELEMENT_CODE#/",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "ENLARGE_PRODUCT" => "PROP",
                "ENLARGE_PROP" => "-",
                "FILTER_NAME" => "arrFilter",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "shop",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => array(),
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
                "OFFERS_FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", ""),
                "OFFERS_LIMIT" => "6",
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
                "PAGE_ELEMENT_COUNT" => "18",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array("BASE"),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "PRODUCT_DISPLAY_MODE" => "N",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "PRODUCT_SUBSCRIPTION" => "N",
                "PROPERTY_CODE_MOBILE" => array("STICKER", "BRAND", "MORE_PHOTO", "IN_SELECTION", "INTERIOR_PHOTO"),
                "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                "RCM_TYPE" => "personal",
                "SECTION_CODE" => "",
                "SECTION_CODE_PATH" => "",
                "SECTION_ID" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
                "SECTION_USER_FIELDS" => array("", ""),
                "SEF_MODE" => "Y",
                "SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
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
                "USE_PRODUCT_QUANTITY" => "N"
            )
        ); ?>

        <section class="other_collections">
            <h2>Другие коллекции</h2>

            <div class="collections__items">
                <? for ($i = 0; $i < 4; $i++) { ?>

                    <a href="/pure-life/collections/smesiteli-bliss.php">
                        <img src="/local/templates/maxonor/assets/images/product.png" alt="item">
                        <p class="title">Bliss</p>
                    </a>

                <? } ?>
            </div>
        </section>
    </div>
</div>








<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>