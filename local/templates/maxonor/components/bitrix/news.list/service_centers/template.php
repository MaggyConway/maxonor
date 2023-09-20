<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<div class="service_centers">
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<div class="wrap">

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['CITY']['VALUE'])) : ?>
				<p class="town"><?= $arItem['DISPLAY_PROPERTIES']['CITY']['VALUE'] ?></p>
			<? endif; ?>

			<p class="name"><? echo $arItem["NAME"] ?></p>

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['ADDRESS']['VALUE'])) : ?>
				<p class="address"><?= $arItem['DISPLAY_PROPERTIES']['ADDRESS']['VALUE'] ?></p>
			<? endif; ?>

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['PHONE']['VALUE'])) : ?>
				<p class="phone">
					<span>тел:</span>
					<? $phones = $arItem['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?>
					<? foreach ($phones as $value) : ?>
						<a href="tel:<?= str_replace(" ", "", $value) ?>"><?= $value . (next($phones) ? ", " : "") ?></a>
					<? endforeach; ?>
				</p>
			<? endif; ?>

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['EMAIL']['VALUE'])) : ?>
				<p class="mail"><span>почта:</span> <a href="mailto:<?= $arItem['DISPLAY_PROPERTIES']['EMAIL']['VALUE'] ?>"><?= $arItem['DISPLAY_PROPERTIES']['EMAIL']['VALUE'] ?></a></p>
			<? endif; ?>

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['SITE']['VALUE'])) : ?>
				<p class="site"><a href="https://<?= $arItem['DISPLAY_PROPERTIES']['SITE']['VALUE'] ?>"><?= $arItem['DISPLAY_PROPERTIES']['SITE']['VALUE'] ?></a></p>
			<? endif; ?>

			<? if (!empty($arItem['DISPLAY_PROPERTIES']['LINK_TO_YANDEX_MAP']['VALUE'])) : ?>
				<p class="map">
					<span>
						<img src="/service-centers/cursor.svg">
					</span>
					<a href="<?= $arItem['DISPLAY_PROPERTIES']['LINK_TO_YANDEX_MAP']['VALUE'] ?>" target="_blank" class="">Смотреть на карте</a>
				</p>
			<? endif; ?>

		</div>
	<? endforeach; ?>
</div>