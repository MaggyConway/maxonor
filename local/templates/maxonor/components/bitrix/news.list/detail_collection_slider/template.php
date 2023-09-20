<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="production__gallery">
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?

		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

		// $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => "402px", "height" => "265px"), BX_RESIZE_IMAGE_EXACT);
		$renderImage['src'] = $arItem["PREVIEW_PICTURE"]['SRC'];
		?>

			<div class="production__gallery__map" data-code="<?= $sectionsList[$arItem['IBLOCK_SECTION_ID']]['CODE']?>">
				<a href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" data-lightbox="production__gallery">
					<img src="<?= $renderImage['src'] ?>" alt="image_map" loading="lazy" />
				</a>

				<? if (isset($arItem["PROPERTIES"]["PRODUCT"])) :

					$resEl = CIBlockElement::GetByID($arItem["PROPERTIES"]["PRODUCT"]["VALUE"]);
					if ($ar_res = $resEl->GetNext()) {
						$product_url = $ar_res['DETAIL_PAGE_URL'];
						$product_name = $ar_res['NAME'];
						$section_id = $ar_res["IBLOCK_SECTION_ID"];
					}

					$resSect = CIBlockSection::GetByID($section_id);
					if ($ar_res = $resSect->GetNext()) {
						$sectionName = $ar_res["NAME"];
						$sectionCode = $ar_res["CODE"];
					}
					?>
					<a href="<?= $product_url ?>" target="_blank" class="production__gallery__map__item" style="top: 20%; left: 56%;">
						<span class="map--label"></span>
						<div class="production__gallery__map__item--desc">
							<p><?= $product_name ?>&nbsp;></p>
						</div>
					</a>
				<? endif ?>

			</div>

	<? endforeach; ?>

</div>

<?if (count($arResult["ITEMS"]) > 6):?>
	<a href="#" class="gallery_show_more">Загрузить&nbsp;еще</a>
<?endif;?>