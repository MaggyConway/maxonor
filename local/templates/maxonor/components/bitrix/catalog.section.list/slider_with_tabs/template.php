<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);


if (0 < $arResult["SECTIONS_COUNT"]) { ?>

	<div class="tabs_parent">
		<ul class="tabs">
			<li data-code="all" class="active">Все</li>

			<? 
			foreach ($arResult['SECTIONS'] as &$arSection): 
				if($arSection['RELATIVE_DEPTH_LEVEL'] == 1) {?>
					<li data-code="<?= $arSection['CODE'] ?>"><?= $arSection['NAME'] ?></li>
			<? }
			endforeach; ?>
		</ul>
	</div>


	<!-- Все -->
	<div class="shop_sections__slider show" data-code="all">
		<?
		foreach ($arResult['SECTIONS'] as &$arSection):
			if($arSection['RELATIVE_DEPTH_LEVEL'] == 2) {
			?>
				<a href="<?=$arSection['SECTION_PAGE_URL']?>">
					<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>" />
					<p><?=$arSection['UF_SHORTNAME']?>&nbsp;&nbsp;<span></span></p>
				</a>
		<? }
		endforeach;?>
	</div>


	<!-- Ванная -->
	<div class="shop_sections__slider" data-code="bathroom">
		<?
		foreach ($arResult['SECTIONS'] as &$arSection):
			$typeSection = explode("/", $arSection['SECTION_PAGE_URL']);
			$typeSection = $typeSection[2];

			if($arSection['RELATIVE_DEPTH_LEVEL'] == 2 && $typeSection == 'bathroom') {
			?>
				<a href="<?=$arSection['SECTION_PAGE_URL']?>">
					<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>" />
					<p><?=$arSection['UF_SHORTNAME']?>&nbsp;&nbsp;<span></span></p>
				</a>
		<? }
		endforeach;?>
	</div>


	<!-- Кухня -->
	<div class="shop_sections__slider" data-code="kitchen">
		<?
		foreach ($arResult['SECTIONS'] as &$arSection):
			$typeSection = explode("/", $arSection['SECTION_PAGE_URL']);
			$typeSection = $typeSection[2];

			if($arSection['RELATIVE_DEPTH_LEVEL'] == 2 && $typeSection == 'kitchen') {
			?>
				<a href="<?=$arSection['SECTION_PAGE_URL']?>">
					<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>" />
					<p><?=$arSection['UF_SHORTNAME']?>&nbsp;&nbsp;<span></span></p>
				</a>
		<? }
		endforeach;?>
	</div>


	<!-- Туалет -->
	<div class="shop_sections__slider" data-code="toilet">
		<?
		foreach ($arResult['SECTIONS'] as &$arSection):
			$typeSection = explode("/", $arSection['SECTION_PAGE_URL']);
			$typeSection = $typeSection[2];

			if($arSection['RELATIVE_DEPTH_LEVEL'] == 2 && $typeSection == 'toilet') {
				// echo '<pre>';
				// var_dump($arSection['SECTION_PAGE_URL']);
				// echo '</pre>';
				?>
				<a href="<?=$arSection['SECTION_PAGE_URL']?>">
					<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>" />
					<p><?=$arSection['UF_SHORTNAME']?>&nbsp;&nbsp;<span></span></p>
				</a>
		<? }
		endforeach;?>
	</div>
<?}?>