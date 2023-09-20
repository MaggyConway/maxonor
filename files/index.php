<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Загрузки");
?>

<main class="page_collaboration">
    <section class="page_hero"
        style="
            background: url(<?=SITE_TEMPLATE_PATH.'/assets/images/bg.jpg'?>) no-repeat center center;
        "
        data-mini-image="mini_hero_image.jpg"
    >
        <div class="page_hero--inner">
            <h1 class="page_hero__title">
                Программа лояльности<br />Мир Pure Life
            </h1>
            <p>
                Для&nbsp;дизайнеров, дистрибьюторов<br />и&nbsp;розничных
                продавцов
            </p>

            <div class="page_hero__links">
                <a href="#section_reg" class="btn">Попасть в&nbsp;Мир Pure life</a>
                <a href="#section_files">Скачать каталоги</a>
            </div>
        </div>
    </section>

    <section class="wrapper hello">
        <div class="hello--inner">
            <h2>
                Приветствуем тебя Мой&nbsp;друг<br />
                в&nbsp;мире Pure Life, в&nbsp;мире длиною в&nbsp;жизнь!
            </h2>
            <p>
                Все наши изделия от&nbsp;раковины до&nbsp;отдельно стоящей ванны
                созданы для тех, кто мечтает о&nbsp;ванной комнате в&nbsp;стиле
                SPA. Разнообразие коллекций и&nbsp;материалов отделки предлагает
                все необходимое для перевоплощения в&nbsp;пространство Отдыха
                и&nbsp;Созерцания!
            </p>
            <p>
                Утонченность в&nbsp;каждом изделии придадут ванной комнате
                воздушность и&nbsp;простор. В&nbsp;своей лаконичности Maxonor
                Pure Life создает непринужденно-эффектный дизайн
                с&nbsp;инновационными технологиями, которые будут приносить
                удовольствие день за&nbsp;днем.
            </p>
            <p>
                Вы&nbsp;дизайнер интерьеров, архитектор, оптовый покупатель или
                продавец салона дизайнерской сантехники&nbsp;&mdash;
                присоединяйтесь к&nbsp;миру Pure Life и&nbsp;станьте ближе
                к&nbsp;счастливой жизни!
            </p>

            <img src="<?=SITE_TEMPLATE_PATH.'/assets/images/hello_image.jpg'?>" alt="hello_image" />
        </div>

        <div class="hello__grid">
            <div class="hello__grid__item">
                <h3>Дизайнерам</h3>
                <p>
                    Делитесь личным LIFEKEY со&nbsp;своими клиентами
                    и&nbsp;получайте вознаграждение до&nbsp;20%
                    с&nbsp;возможностью вывода на&nbsp;карту.
                </p>
                <a href="#section_designers">Смотреть описание</a>
            </div>

            <div class="hello__grid__item">
                <h3>Дистрибьюторам</h3>
                <p>
                    Оформляйте заказы на&nbsp;сайте, получайте LIFEBACK
                    и&nbsp;используйте его для сокращения задолженности
                </p>
                <a href="#section_distributors">Смотреть описание</a>
            </div>

            <div class="hello__grid__item">
                <h3>Продавцам</h3>
                <p>
                    Регистрируйтесь в&nbsp;программе лояльности
                    &laquo;Благадарю&raquo;, зарабатывайте LIFEBACK
                    и&nbsp;получайте сертификаты лучших интернет магазинов.
                </p>
                <a href="https://blagadaru.store/" target="_blank">Смотреть описание</a>
            </div>
        </div>
    </section>

    <section class="wrapper designers" id="section_designers">
        <h2>Дизайнерам</h2>

        <div class="steps">
            <div class="steps__item">
                <p class="title">Получение LIFEKEY</p>
                <p>
                    После квеста-регистрации вы получите персональный LIFEKEY.
                    С&nbsp;ним счастливая жизнь станет ближе.
                </p>
            </div>

            <div class="steps__item">
                <p class="title">LIFEBACK до&nbsp;20%</p>
                <p>
                    С&nbsp;каждой покупки на&nbsp;сайте maxonor.ru лично или
                    вашими клиентами
                </p>
            </div>

            <div class="steps__item">
                <p class="title">Вывод на&nbsp;карту</p>
                <p>
                    Полученные LIFEBACK используйте для&nbsp;оплаты дальнейших
                    покупок на&nbsp;сайте maxonor.ru или выводите на&nbsp;карту
                </p>
            </div>
        </div>

        <div class="points">
            <h3>Как это работает?</h3>

            <ul>
                <li>
                    <p class="title">LIFEKEY</p>
                    <p>
                        Делитесь индивидуальным LIFEKEY с&nbsp;клиентами. Если
                        вы&nbsp;покупаете для&nbsp;себя, то&nbsp;получаете
                        LIFEBACK в&nbsp;размере до&nbsp;20% от&nbsp;стоимости
                        покупки
                    </p>
                </li>
                <li>
                    <p class="title">Скидка для&nbsp;клиента</p>
                    <p>
                        Клиент получает скидку&nbsp;5%, используя ваш LIFEKEY
                        на&nbsp;сайте
                    </p>
                </li>
                <li>
                    <p class="title">Получите LIFEBACK</p>
                    <p>
                        Вы&nbsp;получаете LIFEBACK до&nbsp;15% от&nbsp;стоимости
                        продукции купленной клиентом. 1&nbsp;LIFEBACK
                        =&nbsp;1&nbsp;руб&nbsp;РФ. Действует бессрочно.
                    </p>
                </li>
            </ul>
        </div>

        <div class="cards">
            <h3>Как потратить LIFEBACK?</h3>

            <ul>
                <li>
                    <span>1</span>
                    <p class="title">На&nbsp;карту</p>
                    <p>
                        Накопленные LIFEBACK можно будет вывести на&nbsp;карту после подписания реферального договора.
                    </p>
                </li>

                <li>
                    <span>2</span>
                    <p class="title">Получить скидку</p>
                    <p>
                        Накопленные LIFEBACK можно использовать для&nbsp;новых покупок на&nbsp;сайте maxonor.ru
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="hero--mini">
        <h2>Станьте ближе к&nbsp;счастливой жизни!</h2>
        <a href="#section_reg" class="btn">Попасть в&nbsp;Мир Pure life</a>
    </section>

    <section class="wrapper distributors" id="section_distributors">
        <h2>Дистрибьюторам</h2>

        <div class="steps">
            <div class="steps__item">
                <p class="title">Получайте LIFEBACK</p>
                <p>
                    При&nbsp;заказе на&nbsp;сайте наши партнеры могут получить бонусы до&nbsp;3%
                </p>
            </div>

            <div class="steps__item">
                <p class="title">Тратьте LIFEBACK</p>
                <p>
                    Списывайте дебиторскую задолженность или&nbsp;уменьшайте сумму оплаты будущих заказов.
                </p>
            </div>

            <div class="steps__item">
                <p class="title">1&nbsp;LIFEBACK =&nbsp;1&nbsp;руб&nbsp;РФ</p>
                <p>
                    Доступные к&nbsp;списанию LIFEBACK действуют бессрочно.
                </p>
            </div>
        </div>

        <div class="points">
            <h3>Как это работает?</h3>

            <ul>
                <li>
                    <p class="title">Делайте заказы</p>
                    <p>
                        LIFEBACK начисляются только за&nbsp;заказы, сделанные в&nbsp;личном кабинете
                    </p>
                </li>
                <li>
                    <p class="title">Оплачивайте заказы</p>
                    <p>
                        Начисление LIFEBACK происходит после своевременной оплаты за&nbsp;поставленную продукцию.
                    </p>
                </li>
                <li>
                    <p class="title">Начисление LIFEBACK</p>
                    <p>
                        Партнер накапливает LIFEBACK в&nbsp;личном кабинете и&nbsp;может их&nbsp;использовать для&nbsp;списания дебиторской задолженности.
                    </p>
                </li>
            </ul>
        </div>

        <div class="points ext">
            <h3>Как увеличить количество LIFEBACK?</h3>

            <ul>
                <li>
                    <span>1%</span>
                    <p class="title">Уровень 1</p>
                    <p>
                        Сумма оплат за&nbsp;квартал:<br />До&nbsp;5&nbsp;000&nbsp;000&nbsp;руб
                    </p>
                </li>
                <li>
                    <span>2%</span>
                    <p class="title">Уровень 2</p>
                    <p>
                        Сумма оплат за&nbsp;квартал:<br />До&nbsp;8&nbsp;000&nbsp;000&nbsp;руб
                    </p>
                </li>
                <li>
                    <span>3%</span>
                    <p class="title">Уровень 3</p>
                    <p>
                        Сумма оплат за&nbsp;квартал:<br />Свыше 8&nbsp;000&nbsp;000&nbsp;руб
                    </p>
                </li>
            </ul>
        </div>

        <div class="cards">
            <ul>
                <li>
                    <p>
                        Партнер уровня 1 может по&nbsp;итогам квартала перейти на&nbsp;уровень 2&nbsp;и&nbsp;3 (по&nbsp;сумме прихода денежных средств за&nbsp;квартал)
                    </p>
                </li>

                <li>
                    <p>
                        Партнер уровня&nbsp;2 может по&nbsp;итогам квартала может перейти на&nbsp;уровень&nbsp;3, подтвердить уровень&nbsp;2, а&nbsp;также вернуться на&nbsp;уровень&nbsp;1. (по&nbsp;сумме прихода денежных средств за&nbsp;квартал)
                    </p>
                </li>

                <li>
                    <p>
                        Присвоенные по&nbsp;итогам квартала уровни остаются закрепленными за&nbsp;участниками в&nbsp;течение всего квартала вне&nbsp;зависимости от&nbsp;текущих продаж.
                    </p>
                </li>
            </ul>
        </div>

        <div class="how-to">
            <h3>Как попасть в&nbsp;Мир Pure life?</h3>

            <ul>
                <li>
                    <p>Пройдите регистрацию <br />в&nbsp;программе лояльности</p>
                </li>
                <li><span></span></li>
                <li>
                    <p>Вы&nbsp;получите Уровень&nbsp;1 <br />(1%&nbsp;с&nbsp;каждой покупки)</p>
                </li>
                <li><span></span></li>
                <li>
                    <p>Оформляйте заказы и&nbsp;вам <br />будет начисляться LIFEBACK</p>
                </li>
            </ul>

            <a href="#section_reg" class="btn">Попасть в&nbsp;Мир Pure life</a>
        </div>

        <div class="cards">
            <h3>Когда LIFEBACK становится доступным к&nbsp;списанию?</h3>
            <ul>
                <li>
                    <p>
                        Начисленный LIFEBACK становится доступным к&nbsp;списанию сразу после оплаты партнером поставленной продукции при&nbsp;условии отсутствия просроченной дебиторской задолженности.
                    </p>
                </li>

                <li>
                    <p>
                        При&nbsp;просроченной дебиторской задолженности на&nbsp;срок от&nbsp;10 дней сумма доступных к&nbsp;списанию LIFEBACK будет уменьшена на&nbsp;10% за&nbsp;каждый день просрочки начиная с&nbsp;11-го. 
                    </p>
                </li>

                <li>
                    <p>
                        Например: При&nbsp;просрочке платежа на&nbsp;12&nbsp;дней в&nbsp;категорию доступно к&nbsp;списанию будет переведено 80% от&nbsp;начисленной суммы  LIFEBACK за&nbsp;данный заказ. 
                        При&nbsp;просрочке на&nbsp;20&nbsp;дней оплаты заказа начисленные за&nbsp;него бонусные  LIFEBACK «сгорают»
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "files",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "N",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array("NAME", ""),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "44",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "50",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array("", "FILE", ""),
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
    );?>

    <section class="reg" id="section_reg">
        <h2>Регистрация в&nbsp;программе лояльности</h2>

        <script data-b24-form="inline/29/en57y4" data-skip-moving="true">
            (function (w, d, u) {
                var s = d.createElement('script');
                s.async = true;
                s.src = u + '?' + ((Date.now() / 180000) | 0);
                var h = d.getElementsByTagName('script')[0];
                h.parentNode.insertBefore(s, h);
            })(
                window,
                document,
                'https://crm.sntinvest.ru/upload/crm/form/loader_29_en57y4.js'
            );
        </script>

        <p>
            Для регистрации в&nbsp;программе лояльности
            &laquo;Благадарю&raquo; для розничных продавцов перейдите
            на&nbsp;сайт:
            <a href="https://blagadaru.store/" target="_blank"
                >blagadaru.store</a
            >
        </p>
    </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>