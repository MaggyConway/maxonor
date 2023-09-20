<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<section class="page_hero"
         style="background: url(/local/templates/maxonor/assets/images/about.jpg) no-repeat center center;"
         >
    <div class="page_hero--inner dark-50">
        <h1 class="page_hero__title">О&nbsp;компании</h1>
    </div>
</section>

<div class="wrapper">
    <section class="page_description">
        <div class="page_description--inner">
            <? $APPLICATION->IncludeFile(
                SITE_DIR . "/include/about_desc.php",
                array(),
                array(
                    "MODE" => "html"
                )
            ); ?>
        </div>
    </section>

    <!-- <section class="page_facts">
        <? 
        // $APPLICATION->IncludeFile(
        //     SITE_DIR . "/include/about_facts.php",
        //     array(),
        //     array(
        //         "MODE" => "html"
        //     )
        // ); 
        ?>
    </section> -->
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