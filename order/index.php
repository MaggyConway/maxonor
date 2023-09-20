<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("заказ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.checkout",
	"",
	Array(
		"URL_PATH_TO_DETAIL_PRODUCT" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>