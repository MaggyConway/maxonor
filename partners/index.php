<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Партнерам");
?>

<div class="wrapper">
    <section class="page_partners">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/partners_head.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>


<script data-b24-form="inline/30/lso5o0" data-skip-moving="true">
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://crm.sntinvest.ru/upload/crm/form/loader_30_lso5o0.js');
</script>

        <?
//         $APPLICATION->IncludeComponent(
// 	"custom:feedback.form.element", 
// 	"partners_form", 
// 	array(
// 		"COMPONENT_TEMPLATE" => "partners_form",
// 		"IBLOCK_TYPE" => "content",
// 		"IBLOCK_ID" => "15",
// 		"PROPERTY_CODES" => array(
// 			0 => "651",
// 			1 => "652",
// 			2 => "653",
// 		),
// 		"MAIL_TO" => "krasmargarita@vk.com",
// 		"MAIL_FROM" => "krasmargarita@vk.com",
// 		"OK_TEXT" => "Заявка отправлена!",
// 		"USE_CAPTCHA" => "N",
// 		"AJAX_MODE" => "Y",
// 		"SEF_MODE" => "N",
// 		"SEF_FOLDER" => ""
// 	),
// 	false
// );
        ?>
    </section>
</div>

<section class="company">
    <div class="wrapper">
        <a href="/100-kontrol-kachestva/" class="company__item">
            <div class="wrap">
                <img src="<?= SITE_TEMPLATE_PATH . '/assets/images/under_control.jpg' ?>" alt="100% контроль качества" class="wrap_image" />
            </div>
            <p class="item--title">100% контроль качества</p>
        </a>
        <a href="/preimushchestva-produktsii/" class="company__item">
            <div class="wrap">
                <img src="<?= SITE_TEMPLATE_PATH . '/assets/images/production_advantages_bg.jpg' ?>" alt="Преимущества продукции" class="wrap_image" />
            </div>
            <p class="item--title">Преимущества продукции</p>
        </a>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>