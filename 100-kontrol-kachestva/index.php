<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("100% контроль качества");
?>

<section class="page_hero" style="background: url(/local/templates/maxonor/assets/images/qr.jpg) no-repeat center center;">
    <div class="page_hero--inner dark-50">
        <h1 class="page_hero__title">100%<br>контроль<br>качества</h1>
    </div>
</section>

<div class="wrapper">
    <section class="page_description">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/100_desc.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>
    </section>

    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "videos",
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
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array("", ""),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "8",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "2",
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
            "PROPERTY_CODE" => array("", "VIDEOFILE", ""),
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
</div>

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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>