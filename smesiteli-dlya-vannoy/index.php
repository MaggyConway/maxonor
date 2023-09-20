<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Смесители для ванной");

if (CModule::IncludeModule("iblock")):
    $section_code = "smesiteli-dlya-vannoy";
    $current_section = [];

    $resSectList = CIBlockSection::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_TYPE" => "shop", "IBLOCK_ID" => $_ENV['CATALOG_ID'], "CODE" => $section_code),
        false,
        array("ID", "NAME", "CODE", "UF_SHORTNAME", "LEFT_MARGIN", "RIGHT_MARGIN", "DEPTH_LEVEL", "DETAIL_PICTURE", "DESCRIPTION", "UF_GALLERY_ELEMENT"),
        false,
    );
    
    while ($arSectList = $resSectList->GetNext()) {
        $current_section[] = $arSectList;
    }

    $subs = [];

    $arFilter = array('IBLOCK_TYPE' => 'shop', 'IBLOCK_ID' => $_ENV['CATALOG_ID'], 'LEFT_MARGIN' => $current_section[0]["LEFT_MARGIN"], 'RIGHT_MARGIN' => $current_section[0]["RIGHT_MARGIN"]);
   
    $rsSections = CIBlockSection::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter, false, ["ID", "IBLOCK_ID", 'UF_GALLERY_ELEMENT']);
    
    while ($arSection = $rsSections->Fetch()) {
        // echo htmlspecialcharsbx('ID : ' . $arSection['ID'] . ' ' . $arSection['NAME']) . ' LEFT_MARGIN: ' . $arSection['LEFT_MARGIN'] . ' RIGHT_MARGIN: ' . $arSection['RIGHT_MARGIN'] . '<br>';
        $subs[] = $arSection;
    }

    unset($subs[0]);

    $current_section = $current_section[0];

    // echo '<pre>';
    // var_dump($current_section);
    // echo '</pre>';
?>
    <div class="page_pure_life page_category">
        <section class="page_hero" style="background: url(<?=CFile::GetPath($current_section["DETAIL_PICTURE"]);?>) no-repeat center center;">
            <div class="page_hero--inner">
                <h1 class="page_hero__title"><?$APPLICATION->ShowTitle()?></h1>
            </div>
        </section>

        <div class="wrapper">
            <? if (!empty($current_section['DESCRIPTION'])) { ?>
                <section class="page_description">
                    <div class="page_description--inner">
                        <?=$current_section['DESCRIPTION'];?>
                    </div>
                </section>
            <?}?>

            
            <?
            foreach ($subs as $key => $sect):
                $res = CIBlockSection::GetByID($sect['ID']);
                if ($ar_res = $res->GetNext()):?>
                <section class="category_type">
                    <h2><?= $ar_res['NAME'] ?></h2>
                    <p><?= $ar_res['DESCRIPTION'] ?></p>
                    <?if (isset($sect['UF_GALLERY_ELEMENT']) && is_array($sect['UF_GALLERY_ELEMENT']) && count($sect['UF_GALLERY_ELEMENT']) > 0):?>
                        <div class="wrap">
                        <?
                        $GLOBALS['arrFilterPodborkiBySec' . $sect['ID']] = [
                            'IBLOCK_ID' => $_ENV['GALLERY_ID'],
                            '=ID' => $sect['UF_GALLERY_ELEMENT']
                        ];
                        
                        $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "detail_collection_slider",
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
                                "FIELD_CODE" => array("PREVIEW_PICTURE", ""),
                                "FILTER_NAME" => 'arrFilterPodborkiBySec' . $sect['ID'],
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => $_ENV['GALLERY_ID'],
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
                                "PROPERTY_CODE" => array("", "PRODUCT", ""),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "ID",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>
                        </div>
                    <?endif;?>
                    <a href="<?= $ar_res['SECTION_PAGE_URL'] ?>" class="page_description__link-more">Смотреть всё<span></span></a>
                </section>
                <?endif;?>
            <? endforeach; ?>
        </div>
    </div>

<?
endif;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>