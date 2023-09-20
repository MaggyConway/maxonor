<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.section", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SHOW_ACCOUNT_PAGE" => "Y",
		"SHOW_ORDER_PAGE" => "Y",
		"SHOW_PRIVATE_PAGE" => "Y",
		"SHOW_PROFILE_PAGE" => "Y",
		"SHOW_SUBSCRIBE_PAGE" => "Y",
		"SHOW_CONTACT_PAGE" => "Y",
		"SHOW_BASKET_PAGE" => "Y",
		"CUSTOM_PAGES" => "",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_CONTACT" => "/about/contacts/",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_CATALOG" => "/catalog/",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/personal/",
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",
		"SAVE_IN_SESSION" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"ORDER_HIDE_USER_INFO" => array(
			0 => "0",
		),
		"ORDER_HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "N",
			1 => "F",
		),
		"ORDER_DEFAULT_SORT" => "STATUS",
		"ORDER_REFRESH_PRICES" => "Y",
		"ORDER_DISALLOW_CANCEL" => "Y",
		"NAV_TEMPLATE" => "",
		"ORDERS_PER_PAGE" => "20",
		"USE_AJAX_LOCATIONS_PROFILE" => "Y",
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
		"PROFILES_PER_PAGE" => "20",
		"SEND_INFO_PRIVATE" => "Y",
		"CHECK_RIGHTS_PRIVATE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"MAIN_CHAIN_NAME" => "Мой кабинет",
		"SET_TITLE" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"orders" => "orders/",
			"account" => "account/",
			"subscribe" => "subscribe/",
			"profile" => "profiles/",
			"profile_detail" => "profiles/#ID#",
			"private" => "private/",
			"order_detail" => "orders/#ID#",
			"order_cancel" => "cancel/#ID#",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>