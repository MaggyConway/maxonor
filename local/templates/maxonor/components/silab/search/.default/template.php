<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();


\Bitrix\Main\UI\Extension::load("ui.vue3");

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<!-- <span id="search_toggle"></span> -->

<div id="header__search_app">
    <section class="search-section" v-bind:class="{'is-loader' : isPreloader}">
        <!--FORM-->
        <form class="header__search__form" v-on:submit.prevent="submit">
            <div class="header__search__field">
                <input v-model="query" type="text" placeholder="Поиск" 
                v-on:input="search"
                 class="sntinvest-search-form-input" />
                <button type="submit"></button>
            </div>
        </form>
        <!--/FORM-->

        <!--LOADER-->
        <div v-if="isPreloader" class="header__search__loader lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!--/LOADER-->

        <!--RESULT-->
        <div class="header__search__result">
            <!--LIST-->
            <div v-if="items.length">
                <!--ITEMS-->
                <div class="products_grid_row" data-entity="items-row">
                    <div class="product-item-container" v-for="(item, index) in items" v-bind:key="index">
                        <div class="product-item search-product-item">
                            <a v-bind:href="item.DETAIL_PAGE_URL" class="good-item">
                                <img class="good-item__image" v-bind:src="item.IMAGE" />
                                <div class="good-item__title">{{item.NAME}}</div>
                                <p v-if="item.PRICE_FORMAT.length > 0" class="card_item_price">{{item.PRICE_FORMAT}} ₽</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/ITEMS-->
                <!--PAGIN-->
                <div class="header__search__pagin">
                    <a v-if="page > 1" href="javascript:void(0);" v-on:click.prevent="prev" class="search-load-more">Предыдущая страница</a>

                    <a v-if="page < pages" href="javascript:void(0);" v-on:click.prevent="next" class="search-load-more">Следующая страница</a>
                </div>
                <!--PAGIN-->
            </div>
            <!--/LIST-->
            <!--ERRORS-->
            <div v-else-if="error.length > 0" style="color: #ff4d4d;">{{error}}</div>
            <!--ERRORS-->
            <!--EMPTY-->
            <div v-else-if="pages === 0" style="color: #f47216;">По&nbsp;вашему запросу ничего не&nbsp;найдено!</div>
            <!--/EMPTY-->
        </div>
        <!--/RESULT-->
    </section>
</div>