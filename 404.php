<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<section class="page_404">
	<div class="wrapper">
		<h1>Страница не&nbsp;найдена</h1>

		<a href="/" class="page_description__link-more">На&nbsp;главную<span></span></a>

		<!-- <img src="<?//= SITE_TEMPLATE_PATH . '/assets/images/404_frame.svg' ?>" alt="404" /> -->
	</div>
</section>

<?

// $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
// 	"LEVEL"	=>	"3",
// 	"COL_NUM"	=>	"2",
// 	"SHOW_DESCRIPTION"	=>	"Y",
// 	"SET_TITLE"	=>	"Y",
// 	"CACHE_TIME"	=>	"36000000"
// 	)
// );

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>