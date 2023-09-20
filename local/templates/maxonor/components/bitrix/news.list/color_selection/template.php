<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="color_selection--inner">

	<?
	// echo '<pre>';
	// var_dump($arResult["ITEMS"]);
	// echo '</pre>';
	foreach ($arResult["ITEMS"] as $key => $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<img src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" alt="bg" data-key="<?= $key ?>" />
	<? endforeach; ?>


	<div class="tabs_parent">
		<ul class="tabs">
			<li data-key="0" class="active"><img src="<?= $arResult["ITEMS"][0]['PREVIEW_PICTURE']['SRC'] ?>" alt="color" />Золото</li>
			<li data-key="1"><img src="<?= $arResult["ITEMS"][1]['PREVIEW_PICTURE']['SRC'] ?>" alt="color" />Пепельный</li>
			<li data-key="2"><img src="<?= $arResult["ITEMS"][2]['PREVIEW_PICTURE']['SRC'] ?>" alt="color" />Хром</li>
		</ul>
	</div>
</div>