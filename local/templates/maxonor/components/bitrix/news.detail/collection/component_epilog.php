<?
// echo '<pre>';
// var_dump($arResult);
// echo '</pre>';

use Bitrix\Iblock\BizprocType\ECrm;

$arIds = [];

$res = CIBlockElement::GetList(
    ["SORT" => "ASC"], 
    [
        'IBLOCK_ID' => 19,
        'ACTIVE' => 'Y',
        'PROPERTY_COLLECTION_ELEMENT_ID' => $arResult['ID']
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
    global $arrFilterDetailCollectionProducts1;

    $arrFilterDetailCollectionProducts1 = [
        'IBLOCK_ID' => 19,
        'PROPERTY_COLLECTION_ELEMENT_ID' => $arResult['ID']
    ];

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
            "CACHE_GROUPS" => "N",
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
            "FILTER_NAME" => "arrFilterDetailCollectionProducts1",
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
            "OFFERS_LIMIT" => "9999",
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
            "PAGE_ELEMENT_COUNT" => "9999",
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
    ); 
}
?>

<div class="wrapper">
    <? 
    // global $arrFilterDetailCollectionAccessories;

    // $arrFilterDetailCollectionAccessories = [
    //     '=IBLOCK_SECTION_ID' => [
    //         '151', // Аксессуары для ванной
    //         '157', //Аксессуары для туалета
    //     ]
    // ];

    // $APPLICATION->IncludeComponent(
    //     "bitrix:catalog.section",
    //     "accessories",
    //     array(
    //         "ACTION_VARIABLE" => "action",
    //         "ADD_PICT_PROP" => "MORE_PHOTO",
    //         "ADD_PROPERTIES_TO_BASKET" => "Y",
    //         "ADD_SECTIONS_CHAIN" => "Y",
    //         "ADD_TO_BASKET_ACTION" => "ADD",
    //         "AJAX_MODE" => "N",
    //         "AJAX_OPTION_ADDITIONAL" => "",
    //         "AJAX_OPTION_HISTORY" => "N",
    //         "AJAX_OPTION_JUMP" => "N",
    //         "AJAX_OPTION_STYLE" => "Y",
    //         "BACKGROUND_IMAGE" => "-",
    //         "BASKET_URL" => "/cart/",
    //         "BROWSER_TITLE" => "UF_SHORTNAME",
    //         "CACHE_FILTER" => "Y",
    //         "CACHE_GROUPS" => "Y",
    //         "CACHE_TIME" => "36000000",
    //         "CACHE_TYPE" => "A",
    //         "COMPATIBLE_MODE" => "Y",
    //         "CONVERT_CURRENCY" => "N",
    //         "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:2:226\",\"DATA\":{\"logic\":\"Equal\",\"value\":5637}}]}",
    //         "DETAIL_URL" => "#ELEMENT_CODE#/",
    //         "PROPERTY_CODE" => array("TYPE","GALLERY_ELEMENT",""),
    //         "DISABLE_INIT_JS_IN_COMPONENT" => "N",
    //         "DISPLAY_BOTTOM_PAGER" => "N",
    //         "DISPLAY_COMPARE" => "N",
    //         "DISPLAY_TOP_PAGER" => "N",
    //         "ELEMENT_SORT_FIELD" => "sort",
    //         "ELEMENT_SORT_FIELD2" => "id",
    //         "ELEMENT_SORT_ORDER" => "asc",
    //         "ELEMENT_SORT_ORDER2" => "desc",
    //         "ENLARGE_PRODUCT" => "PROP",
    //         "ENLARGE_PROP" => "-",
    //         "FILTER_NAME" => "arrFilterDetailCollectionAccessories",
    //         "HIDE_NOT_AVAILABLE" => "N",
    //         "HIDE_NOT_AVAILABLE_OFFERS" => "N",
    //         "IBLOCK_ID" => "19",
    //         "IBLOCK_TYPE" => "shop",
    //         "INCLUDE_SUBSECTIONS" => "Y",
    //         "LABEL_PROP" => array(),
    //         "LAZY_LOAD" => "N",
    //         "LINE_ELEMENT_COUNT" => "3",
    //         "LOAD_ON_SCROLL" => "N",
    //         "MESSAGE_404" => "",
    //         "MESS_BTN_ADD_TO_BASKET" => "В корзину",
    //         "MESS_BTN_BUY" => "Купить",
    //         "MESS_BTN_DETAIL" => "Подробнее",
    //         "MESS_BTN_LAZY_LOAD" => "Показать ещё",
    //         "MESS_BTN_SUBSCRIBE" => "Подписаться",
    //         "MESS_NOT_AVAILABLE" => "Нет в наличии",
    //         "META_DESCRIPTION" => "-",
    //         "META_KEYWORDS" => "-",
    //         "OFFERS_FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", ""),
    //         "OFFERS_LIMIT" => "6",
    //         "OFFERS_SORT_FIELD" => "sort",
    //         "OFFERS_SORT_FIELD2" => "id",
    //         "OFFERS_SORT_ORDER" => "asc",
    //         "OFFERS_SORT_ORDER2" => "desc",
    //         "PAGER_BASE_LINK_ENABLE" => "N",
    //         "PAGER_DESC_NUMBERING" => "N",
    //         "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    //         "PAGER_SHOW_ALL" => "N",
    //         "PAGER_SHOW_ALWAYS" => "N",
    //         "PAGER_TEMPLATE" => ".default",
    //         "PAGER_TITLE" => "",
    //         "PAGE_ELEMENT_COUNT" => "6",
    //         "PARTIAL_PRODUCT_PROPERTIES" => "N",
    //         "PRICE_CODE" => array("BASE"),
    //         "PRICE_VAT_INCLUDE" => "Y",
    //         "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
    //         "PRODUCT_DISPLAY_MODE" => "N",
    //         "PRODUCT_ID_VARIABLE" => "id",
    //         "PRODUCT_PROPS_VARIABLE" => "prop",
    //         "PRODUCT_QUANTITY_VARIABLE" => "quantity",
    //         "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
    //         "PRODUCT_SUBSCRIPTION" => "N",
    //         "PROPERTY_CODE_MOBILE" => array("STICKER", "BRAND", "MORE_PHOTO", "IN_SELECTION", "INTERIOR_PHOTO"),
    //         "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
    //         "RCM_TYPE" => "personal",
    //         "SECTION_CODE" => "",
    //         "SECTION_CODE_PATH" => "",
    //         "SECTION_ID" => "",
    //         "SECTION_ID_VARIABLE" => "SECTION_ID",
    //         "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
    //         "SECTION_USER_FIELDS" => array("", ""),
    //         "SEF_MODE" => "Y",
    //         "SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
    //         "SET_BROWSER_TITLE" => "Y",
    //         "SET_LAST_MODIFIED" => "N",
    //         "SET_META_DESCRIPTION" => "Y",
    //         "SET_META_KEYWORDS" => "Y",
    //         "SET_STATUS_404" => "N",
    //         "SET_TITLE" => "Y",
    //         "SHOW_404" => "N",
    //         "SHOW_ALL_WO_SECTION" => "Y",
    //         "SHOW_CLOSE_POPUP" => "N",
    //         "SHOW_DISCOUNT_PERCENT" => "N",
    //         "SHOW_FROM_SECTION" => "N",
    //         "SHOW_MAX_QUANTITY" => "N",
    //         "SHOW_OLD_PRICE" => "N",
    //         "SHOW_PRICE_COUNT" => "1",
    //         "SHOW_SLIDER" => "N",
    //         "SLIDER_INTERVAL" => "3000",
    //         "SLIDER_PROGRESS" => "N",
    //         "TEMPLATE_THEME" => "blue",
    //         "USE_ENHANCED_ECOMMERCE" => "N",
    //         "USE_MAIN_ELEMENT_SECTION" => "N",
    //         "USE_PRICE_COUNT" => "N",
    //         "USE_PRODUCT_QUANTITY" => "N"
    //     )
    // ); 
    ?>

    <section class="other_collections">
        <h2>Другие коллекции</h2>

        <?
        $collections = [];
        $arSelect = array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");
        $arFilter = array("IBLOCK_TYPE" => 'shop', "IBLOCK_ID" => $_ENV['COLLECTIONS_ID'], 'PROPERTY_COLLECTION' => $arResult["ID"]);
        $res = CIBlockElement::GetList(array("ID" => "DESC"), $arFilter, false, /*array("nPageSize"=>4),*/ false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $collections[] = $ob->GetFields();
        }

        // echo '<pre>';
        // var_dump($collections);
        // echo '</pre>';
        ?>

        <div class="collections__items">
            <?
            foreach ($collections as $i => $el) {
                if ($el['ID'] == $arResult['ID'] || $el['PREVIEW_PICTURE'] == NULL) {
                    unset($el);
                } else {
                    $img = CFile::GetPath($el['PREVIEW_PICTURE']);   ?>

                    <a href="<?= $el['DETAIL_PAGE_URL'] ?>">
                        <img src="<?= $img; ?>" alt="<?= $el['NAME'] ?>">
                        <p class="title"><?= $el['NAME'] ?></p>
                    </a>
            <?  }
            }?>
        </div>
    </section>
</div>
</div>