<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

// echo '<pre>';
// var_dump($arParams['PAGE_TYPE']);
// echo '</pre>';

?>

	<section class="tech_cascade">
		<div class="wrap">
			<? foreach ($arResult['ITEMS'] as $key => $item) {
				// echo '<pre>';
				// var_dump($item['PREVIEW_PICTURE']['SRC']);
				// echo '</pre>';
			?>
				<div class="tech_cascade__map">
					<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="tech_galley_image" />
	
					<!-- <a href="#" target="_blank" class="tech_cascade__map__item" style="top: 20%; left: 56%;">
						<span class="map--label"></span>
						<div class="tech_cascade__map__item--desc">
							<p>MN4083&nbsp;></p>
							<p>Смеситель для&nbsp;кухни</p>
						</div>
					</a> -->
				</div>
		<?  } ?>
		</div>
	</section>

<?	if ($arParams['PAGE_TYPE'] == 'sensor') {?>

	<section class="page_facts">
		<? $APPLICATION->IncludeFile(
			SITE_DIR . "/include/tech/sensor_advantages.php",
			array(),
			array(
				"MODE" => "html"
			)
		); ?>
	</section>
<?}?>
