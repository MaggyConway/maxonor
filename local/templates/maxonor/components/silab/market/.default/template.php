<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

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
<div class="detail_block marketplaces">
    
        <?if (
        
        ( isset($arResult['MARKET_WB_LINK']) && !empty($arResult['MARKET_WB_LINK']) )
        ||
        ( isset($arResult['MARKET_OZON_LINK']) && !empty($arResult['MARKET_OZON_LINK']) )
        ||
        ( isset($arResult['MARKET_YANDEX_LINK']) && !empty($arResult['MARKET_YANDEX_LINK']) )
        
        ):?>
        <p>Выберите место покупки:</p>
        <?endif;?>

        <ul>
                <?if (isset($arResult['MARKET_WB_LINK']) && !empty($arResult['MARKET_WB_LINK'])):?>
                <li>
                    <a href="<?=$arResult['MARKET_WB_LINK']?>" target="_blank">
                        <img src="/local/templates/maxonor/assets/images/wb.svg" alt="wildberries" />
                    </a>
                </li>
                <?endif;?>
                
                <?if (isset($arResult['MARKET_OZON_LINK']) && !empty($arResult['MARKET_OZON_LINK'])):?>
                <li>
                    <a href="<?=$arResult['MARKET_OZON_LINK']?>" target="_blank">
                        <img src="/local/templates/maxonor/assets/images/ozon.svg" alt="ozon" />
                    </a>
                </li>
                <?endif;?>
                
                <?if (isset($arResult['MARKET_YANDEX_LINK']) && !empty($arResult['MARKET_YANDEX_LINK'])):?>
                <li>
                    <a href="<?=$arResult['MARKET_YANDEX_LINK']?>" target="_blank">
                        <img src="/local/templates/maxonor/assets/images/ya_market.svg" alt="yandex market" />
                    </a>
                </li>
                <?endif;?>
        </ul>
</div>