<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="header__menu">
<?foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]) {
		$selected = ' selected';?>
	<?}?>
	<li class="header__menu__item"><a href="<?=$arItem["LINK"]?>" class="<?=$selected?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>

</ul>
<?endif?>