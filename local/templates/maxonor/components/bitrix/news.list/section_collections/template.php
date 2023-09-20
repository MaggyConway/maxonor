<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
/*

$collections = [];

foreach ($arResult["ITEMS"] as $index => $arItem)
{
	$collections[$arItem['PROPERTIES']['TYPE']['VALUE_XML_ID']] = $arItem['PROPERTIES']['TYPE']['VALUE'];
}
?>

<?

// faucets
// accessories


?>
<div class="tabs_parent">
	<ul class="tabs">
		<?foreach ($collections as $key => $value):?>
			<li class="active" data-type="<?=$key?>"><?=$value?></li>
		<?endforeach?>
	</ul>
</div>
<? 
<div class="collections__items">
	<? for ($i = 0; $i < 8; $i++) { ?>
		<a href="<?= $arResult["ITEMS"][$i]['DETAIL_PAGE_URL'] ?>">
			<img src="<?= $arResult["ITEMS"][$i]["PREVIEW_PICTURE"]['SRC'] ?>" alt="<?= $arResult["ITEMS"][$i]["NAME"] ?>" />
			<p class="title">
				<?= $arResult["ITEMS"][$i]["NAME"] ?>
			</p>
		</a>
	<? } ?>
</div>
*/ ?>

<div class="collections__items">
	<? foreach ($arResult['ITEMS'] as $key => $arItem) { ?>

		<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" data-item-type="<?=$arItem['PROPERTIES']['TYPE']["VALUE_XML_ID"]?>">
			<?if (!is_null($arItem["PREVIEW_PICTURE"]['SRC'])):?>
				<img src="<?= $arItem["PREVIEW_PICTURE"]['SRC'] ?>" alt="<?= $arItem[$i]["NAME"] ?>" />
			<?endif?>
			<p class="title">
				<?= $arItem["NAME"] ?>
			</p>
		</a>
	<? } ?>
</div>