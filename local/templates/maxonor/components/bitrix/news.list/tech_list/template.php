<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="technologies">
	<h2>Технологии для&nbsp;комфорта</h2>

	<div class="technologies--grid">

		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$mini_image = CFile::GetPath($arItem['PROPERTIES']['MINI_IMAGE_1']['VALUE']);
/*
			if ($arItem['PROPERTIES']['SOON']['VALUE_XML_ID'] == 'Y') {
				$soon = ' soon';
			} else {
				$soon = '';
}*/

			// echo '<pre>';
			// var_dump($mini_image);
			// echo '</pre>';
			?>
			
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="technologies__item<?//=$soon?>">
				<div class="wrap">
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="Выдвижные смесители для кухни с технологией Smart" />
					<img src="<?=$mini_image;?>" alt="Выдвижные смесители для кухни с технологией Smart" style="display: none;" />
				</div>
				<p class="item--title"><?=$arItem['NAME']?></p>
			</a>

		<?endforeach;?>
	</div>
</section>



	
		

		<!-- <a href="/termostaticheskie-elementy-v-dushevykh-sistemakh/" class="technologies__item">
			<div class="wrap">
				<img src="<?//= SITE_TEMPLATE_PATH . '/assets/images/tech/tech2.jpg' ?>" alt="Термостатические элементы в душевых системах" />
			</div>
			<p class="item--title">Термостатические элементы<br />в&nbsp;душевых системах</p>
		</a>

		<a href="/sensornye-smesiteli/" class="technologies__item soon">
			<div class="wrap">
				<img src="<?//= SITE_TEMPLATE_PATH . '/assets/images/tech/tech3.jpg' ?>" alt="Сенсорные смесители" />
			</div>
			<p class="item--title">Сенсорные смесители</p>
		</a>

		<a href="/vstroennye-smesiteli/" class="technologies__item">
			<div class="wrap">
				<img src="<?//= SITE_TEMPLATE_PATH . '/assets/images/tech/tech4.jpg' ?>" alt="Встроенные смесители" />
			</div>
			<p class="item--title">Встроенные смесители</p>
		</a> -->
	