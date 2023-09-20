<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html>

<head>

    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?
    $APPLICATION->AddHeadString("<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/slick-1.8.1/slick/slick-theme.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/slick-1.8.1/slick/slick.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/UItoTop-jQuery-Plugin/css/ui.totop.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/lightbox2-2.11.3/dist/css/lightbox.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/app.css");



    // Optional JavaScript
    // jQuery first, then Popper.js, then Bootstrap JS
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/jquery.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/slick-1.8.1/slick/slick.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/cleave.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/cleave-phone.ru.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/UItoTop-jQuery-Plugin/js/easing.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/UItoTop-jQuery-Plugin/js/jquery.ui.totop.min.js");

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/lightbox2-2.11.3/dist/js/lightbox.min.js");

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/functions.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/sliders.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/progress_bar.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/main_menu.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/catalog_sorting.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/show_more.js");
    ?>



</head>

<?
// global $USER;
// if ($USER->IsAdmin()) {
    //     $admin_body_margin = 'margin-top: 150px;';
    //     $admin_header_top = 'top: 150px';
    // };
    ?>

<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>

    <header class="header<? //= $lightClass ?>">
        <div class="header__part">
            <a href="/" class="logo"></a>

            <div class="main_menu_toggle">
                <a href="/catalog/">Каталог</a>
            </div>

            
            <div id="search_toggle-mobile">
            </div>

            <div class="main_menu">
                <div class="main_menu__sidebar">
                    <div class="main_menu__sidebar--inner">
                        <div class="main_menu__sidebar--block">
                            <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "catalog_menu",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "catalog",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "3",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "catalog",
                                        "USE_EXT" => "Y"
                                    )
                                );
                            ?>
                        </div>

                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "header_menu",
                                "USE_EXT" => "N"
                            )
                        ); ?>
                    </div>
                </div>
                
                <div class="main_menu__overview">

                </div>
            </div>

            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "header_menu",
                    "USE_EXT" => "N"
                )
            ); ?>
        </div>

        <div class="header__part header__links">

            <span id="search_toggle"></span>

            <?
            $APPLICATION->IncludeFile(
                SITE_DIR . "/include/header-links.php",
                array(),
                array(
                    "MODE" => "html"
                )
            );
            ?>
        </div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "base",
            array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        ); ?>
    </header>

    <div class="header__search">
        <div class="wrapper">
            <? $APPLICATION->IncludeComponent(
                "silab:search",
                "",
                array()
            ); ?>
        </div>
    </div>