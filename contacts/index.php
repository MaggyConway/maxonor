<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="wrapper">
    <section class="page_contacts">
        <h2>Контакты</h2>
        <?
            $APPLICATION->IncludeFile(
                SITE_DIR . "/include/contacts_tel_email.php",
                Array(),
                Array(
                    "MODE" => "html")
            );
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>