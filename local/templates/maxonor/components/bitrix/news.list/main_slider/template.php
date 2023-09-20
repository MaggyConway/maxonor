<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div>
<div class="hero__slider single-item">

<?foreach($arResult["ITEMS"] as $arItem):

$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

$big_image = $arItem["PREVIEW_PICTURE"]["SRC"];
$mini_image = CFile::GetPath($arItem['PROPERTIES']['MINI_IMAGE']['VALUE']);

// echo '<pre>';
// var_dump();
// echo '</pre>';
?>

	<div class="hero__slider__item" style="background: url(<?=$big_image?>) no-repeat center center;" data-mini-image="<?=$mini_image?>">
		<div class="hero__slider__item--inner">
			<div class="hero__slider__item__title"><?=$arItem['NAME']?></div>
			<a href="<?=$arItem['PROPERTIES']['MORE']['VALUE']?>" class="hero__slider__item__link-more">
			
			<?= (!empty($arItem['PROPERTIES']['LINK_NAME']['VALUE'])) 
					? $arItem['PROPERTIES']['LINK_NAME']['VALUE'] 
					: $arItem['PROPERTIES']['LINK_NAME']['DEFAULT_VALUE']; ?>

			<span></span></a>
		</div>
	</div>

<?endforeach;?>
</div>
<div class="progressBarContainer">
	<div>
		<span data-slick-index="0" class="progressBar"></span>
	</div>
	<div>
		<span data-slick-index="1" class="progressBar"></span>
	</div>
	<div>
		<span data-slick-index="2" class="progressBar"></span>
	</div>
</div>

</div>