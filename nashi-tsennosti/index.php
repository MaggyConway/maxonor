<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши ценности");
?>

<section class="page_hero our" style="background: url(/local/templates/maxonor/assets/images/hands.jpg) no-repeat center center;" data-mini-image="mini_hero_image.jpg">
    <div class="page_hero--inner dark-50">
        <h1 class="page_hero__title">Наши ценности</h1>
    </div>
</section>

<div class="wrapper">
    <section class="page_facts maxonor_values">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/our_values/our_values_title.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>
        <ul>
            <li>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR . "/include/our_values/clients.php",
                    array(),
                    array(
                        "MODE" => "html"
                    )
                ); ?>
            </li>
            <li>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR . "/include/our_values/stuff.php",
                    array(),
                    array(
                        "MODE" => "html"
                    )
                ); ?>
            </li>
            <li>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR . "/include/our_values/ecology.php",
                    array(),
                    array(
                        "MODE" => "html"
                    )
                ); ?>
            </li>
        </ul>
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