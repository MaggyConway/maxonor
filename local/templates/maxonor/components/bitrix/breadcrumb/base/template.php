<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
//delayed function must return a string
if (empty($arResult))
	return "";


if ($APPLICATION->GetCurPage(false) !== '/' && $APPLICATION->GetCurPage(false) !== '/404.php') {
	$strReturn = '<ul class="breadcrumbs">';

	// echo '<pre>';
	// var_dump($arResult);
	// echo '</pre>';

	for ($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++) {

		/*if($index > 0)
		$strReturn .= '<li><span>&nbsp;&gt;&nbsp;</span></li>';
*/
		$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

		if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1)
			$strReturn .= '<li><a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title . '</a><span class="divider"></span></li>';
		else
			$strReturn .= '<li>' . $title . '</li>';
	}
	$strReturn .= '</ul>';
	return $strReturn;
} else {
	return "";
}
