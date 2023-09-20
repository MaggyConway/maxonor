<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Преимущества продукции");
?>

<section class="page_hero advantages" style="background: url(hero_image.jpg) no-repeat center center;" data-mini-image="mini_hero_image.jpg">
    <div class="page_hero--inner dark-50">
        <h1 class="page_hero__title">Преимущества продукции</h1>
    </div>
</section>

<section class="in_details">
    <div class="wrapper">
        <h2>Качество в&nbsp;деталях</h2>
    </div>

    <div class="in_details__map">
        <img src="in_details_map.jpg" alt="in_details_map" />

        <div class="in_details__map__item" style="top: 10.11%; left: 62.37%;">
            <span></span>
            <div class="in_details__map__item--desc">
                <p>Качественное покрытие</p>
                <p>
                    Хромирование по&nbsp;высоким стандартам, хром: 0,2&ndash;0,25&nbsp;мкм, никель: 6&ndash;10&nbsp;мкм.
                </p>
                <p>
                    Каждый смеситель Maxonor может пройти 200-часовой тест NSS (тестирование защиты от&nbsp;коррозии в&nbsp;соляном тумане) и&nbsp;24-часовой тест ASS (тест на&nbsp;соленые брызги).
                </p>
            </div>
        </div>

        <div class="in_details__map__item" style="top: 32.47%; left: 43.85%;">
            <span></span>
            <div class="in_details__map__item--desc">
                <p>Качественное литье</p>
                <p>
                    Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                </p>
                <p>
                    Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества.
                </p>
            </div>
        </div>

        <div class="in_details__map__item" style="top: 51.85%; left: 75.18%;">
            <span></span>
            <div class="in_details__map__item--desc">
                <p>Стильный дизайн</p>
                <p>
                    Богатство стилей (от&nbsp;классики 19 века до&nbsp;экзотичного арт-деко и&nbsp;строгого минимализма) в&nbsp;сочетании с&nbsp;разнообразием используемых отделок (от&nbsp;хрома до&nbsp;роскошного античного золота) позволит реализовать наиболее интересные дизайнерские интерьер-решения.
                </p>
            </div>
        </div>

        <a href="/catalog" class="hero__slider__item__link-more">Перейти в&nbsp;каталог<span></span></a>
    </div>

    <div class="wrapper">
        <div class="mobile_content">
            <ul>
                <li>
                    <b>Качественное литье</b>
                    <p>
                        Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                    </p>
                    <p>
                        Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества.
                    </p>
                </li>
                <li>
                    <b>Качественное покрытие</b>
                    <p>
                        Хромирование по&nbsp;высоким стандартам, хром: 0,2&ndash;0,25&nbsp;мкм, никель: 6&ndash;10&nbsp;мкм. Каждый смеситель Maxonor может пройти 200-часовой тест NSS (тестирование защиты от&nbsp;коррозии в&nbsp;соляном тумане) и&nbsp;24-часовой тест ASS (тест на&nbsp;соленые брызги).
                    </p>
                </li>
                <li>
                    <b>Стильный дизайн</b>
                    <p>
                        Богатство стилей (от&nbsp;классики 19 века до&nbsp;экзотичного арт-деко и&nbsp;строгого минимализма) в&nbsp;сочетании с&nbsp;разнообразием используемых отделок (от&nbsp;хрома до&nbsp;роскошного античного золота) позволит реализовать наиболее интересные дизайнерские интерьер-решения.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="ceramic_cartridges">
    <div class="wrapper">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/ceramic.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>
    </div>
</section>

<section class="aerators">
    <div class="wrapper">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/aerators.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>
    </div>

    <div class="aerators__map">
        <img src="aerators_map.jpg" alt="aerators_map" />

        <div class="aerators__map__item" style="top: 10.87%; left: 60.83%;">
            <span></span>
            <div class="aerators__map__item--desc">
                <p>Увеличение срока службы смесителя</p>
                <!-- <p>
                    Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                </p>
                <p>
                    Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества
                </p> -->
            </div>
        </div>

        <div class="aerators__map__item" style="top: 20.7%; left: 21.30%;">
            <span></span>
            <div class="aerators__map__item--desc">
                <p>Уменьшение уровня шума</p>
                <!-- <p>
                    Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                </p>
                <p>
                    Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества
                </p> -->
            </div>
        </div>

        <div class="aerators__map__item" style="top: 42.08%; left: 41.06%;">
            <span></span>
            <div class="aerators__map__item--desc">
                <p>Насыщение воды воздухом, что повышает мягкость подачи воды</p>
                <!-- <p>
                    Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                </p>
                <p>
                    Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества
                </p> -->
            </div>
        </div>

        <div class="aerators__map__item" style="top: 73.46%; left: 34.91%;">
            <span></span>
            <div class="aerators__map__item--desc">
                <p>Защита от&nbsp;брызг</p>
                <!-- <p>
                    Латунь класса Hpb59 A, содержание латуни более 60%, а&nbsp;содержание свинца (Pb) менее 1,2%, что абсолютно безопасно для здоровья и&nbsp;окружающей среды.
                </p>
                <p>
                    Толщина стенки смесителя Maxonor не&nbsp;меньше 2,5&nbsp;мм что на&nbsp;100% соответствует российским и&nbsp;международным стандартам качества
                </p> -->
            </div>
        </div>

        <a href="/catalog" class="hero__slider__item__link-more">Перейти в&nbsp;каталог<span></span></a>
    </div>

    <div class="wrapper">
        <div class="mobile_content">
            <ul>
                <li><b>Увеличение срока службы смесителя</b></li>
                <li><b>Уменьшение уровня шума</b></li>
                <li><b>Насыщение воды воздухом, что повышает мягкость подачи воды</b></li>
                <li><b>Защита от&nbsp;брызг</b></li>
            </ul>
        </div>
    </div>
</section>

<section class="faucets_with_filter">
    <div class="wrapper">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/water_with_filter.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>

        <div class="faucets_with_filter--inner">
            <div class="faucets_with_filter__map">
                <img src="./images/faucet1_map.jpg" alt="map" />
                <a href="/catalog/kitchen/odnozakhvatnye-smesiteli/mn4399-8-pure-life-smesitel-dlya-kukhni-s-podklyucheniem-filtra-pitevoy-vody-s-gaykoy-belyy/" class="faucets_with_filter__map__item" style="top: 106px; left: 249px;" target="_blank">
                    <span></span>
                    <div class="faucets_with_filter__map__item--desc">
                        <p>MN4999-8&nbsp;></p>
                        <p>Смеситель для&nbsp;кухни</p>
                    </div>
                </a>
            </div>

            <div class="faucets_with_filter__map">
                <img src="./images/faucet2_map.jpg" alt="map" />
                <a href="/catalog/kitchen/odnozakhvatnye-smesiteli/mn4352-pure-life-smesitel-dlya-kukhni-s-podklyucheniem-filtra-pitevoy-vody-s-gaykoy/" class="faucets_with_filter__map__item" style="top: 81px; left: 287px;" target="_blank">
                    <span></span>
                    <div class="faucets_with_filter__map__item--desc">
                        <p>MN4352&nbsp;></p>
                        <p>Смеситель для&nbsp;кухни</p>
                    </div>
                </a>
            </div>

            <div class="faucets_with_filter__map">
                <img src="./images/faucet3_map.jpg" alt="map" />
                <a href="/catalog/kitchen/odnozakhvatnye-smesiteli/mn4460-17-pure-life-smesitel-dlya-kukhni-s-podklyucheniem-filtra-pitevoy-vody-cherny/" class="faucets_with_filter__map__item" style="top: 178px; left: 35px;" target="_blank">
                    <span></span>
                    <div class="faucets_with_filter__map__item--desc">
                        <p>MN4460-17&nbsp;></p>
                        <p>Смеситель для&nbsp;кухни</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sertificates">
    <div class="wrapper">
        <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/sertificates.php",
            array(),
            array(
                "MODE" => "html"
            )
        ); ?>
    </div>
</section>

<section class="company">
    <div class="wrapper">
        <a href="/nashi-tsennosti/" class="company__item">
            <div class="wrap">
                <img src="<?= SITE_TEMPLATE_PATH . '/assets/images/our_values_bg.jpg' ?>" class="wrap_image" alt="Наши ценности" />
                <img src="/local/templates/maxonor/assets/images/dark_header/logo.svg" class="company_logo" alt="company_logo" />
            </div>
            <p class="item--title">Наши ценности</p>
        </a>
        <a href="/100-kontrol-kachestva/" class="company__item">
            <div class="wrap">
                <img src="<?= SITE_TEMPLATE_PATH . '/assets/images/under_control.jpg' ?>" class="wrap_image" alt="100% контроль качества" />
            </div>
            <p class="item--title">100% контроль качества</p>
        </a>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>