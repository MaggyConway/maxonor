<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$counter = 0;
$count = count($arResult["ITEMS"]);

// $collections = [];

// foreach ($arResult["ITEMS"] as $index => $arItem)
// {
// 	$collections[$arItem['PROPERTIES']['TYPE']['VALUE_XML_ID']] = $arItem['PROPERTIES']['TYPE']['VALUE'];
// }

// echo '<pre>';
// var_dump($collections);
// echo '</pre>';
?>

<div class="page_collections">
	<div class="wrapper">
		<h1>Коллекции</h1>

		<!-- <ul class="tabs mb-2">
			<?//foreach ($collections as $key => $value):?>
				<li class="active" data-type="<?//=$key?>"><?//=$value?></li>
			<?//endforeach?>
		</ul> -->

		<div class="collections__items">
			<? // foreach ($arResult["ITEMS"] as $arItem) :
			// $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			// $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

			?>

			<a
			 style="grid-row-start: 1; grid-row-end: 3; background: url(<?= SITE_TEMPLATE_PATH . '/assets/images/tech/tech1.jpg' ?>) no-repeat center center;"
			 href="/tech/vydvizhnye-smesiteli-dlya-kukhni-s-tekhnologiey-smart/" class="technologies__item" data-id="1"
			 >
				<div class="wrap">
					<p class="item--title">Выдвижные смесители для&nbsp;кухни<br />с&nbsp;технологией Smart</p>
				</div>
			</a>

			<a
			 style="grid-row-start: 3; grid-row-end: 5;background: url(<?= SITE_TEMPLATE_PATH . '/assets/images/tech/tech3.jpg' ?>) no-repeat center center;"
			 href="/tech/sensornye-smesiteli/" class="technologies__item" data-id="2" 
			 >
				<div class="wrap">
					<p class="item--title">Сенсорные смесители</p>
				</div>
			</a>

			<a
			 style="grid-row-start: 5; grid-row-end: 7; background: url(<?= SITE_TEMPLATE_PATH . '/assets/images/tech/tech2.jpg' ?>) no-repeat center center;"
			 href="/tech/termostaticheskie-elementy-v-dushevykh-sistemakh/" class="technologies__item" data-id="3" 
			 >
				<div class="wrap">
					<p class="item--title">Термостатические элементы<br />в&nbsp;душевых системах</p>
				</div>
			</a>

			<? for ($i = $counter; $i < $count; $i++) :?>

				<a href="<?= $arResult["ITEMS"][$i]['DETAIL_PAGE_URL'] ?>">
					<?if (!is_null($arResult["ITEMS"][$i]["PREVIEW_PICTURE"]['SRC'])):?>
						<img src="<?= $arResult["ITEMS"][$i]["PREVIEW_PICTURE"]['SRC'] ?>" alt="<?= $arResult["ITEMS"][$i]["NAME"] ?>" />
					<?endif?>
					<p class="title">
						<?= $arResult["ITEMS"][$i]["NAME"] ?>
					</p>
				</a>

			<?
				$counter += 1;
			endfor;
			?>
		</div>
	</div>
</div>