<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?> 

<footer class="footer">
	<div class="footer--inner-wrap">
		<div class="footer--col">
			<a href="/">
				<img alt="logo" src="<?= SITE_TEMPLATE_PATH . '/assets/images/dark_header/logo.svg' ?>" class="logo"></a>
	
			<?
			$sectionsList = [];
			$resSectList = CIBlockSection::GetList(
				array("SORT" => "ASC"),
				array("IBLOCK_TYPE" => "shop", "IBLOCK_ID" => $_ENV['CATALOG_ID']),
				false,
				array("ID", "NAME", "CODE", "UF_SHORTNAME", "SECTION_PAGE_URL"),
				false
			);
			while ($arSectList = $resSectList->GetNext()) {
				if ($arSectList['UF_SHORTNAME'] !== NULL)
					$sectionsList[] = $arSectList;
			}
			?>
			<ul>
				<? foreach ($sectionsList as $key => $sect) { ?>
					<li><a href="<?= '/' . $sect['CODE'] ?>"><?= $sect['UF_SHORTNAME'] ?></a></li>
				<? } ?>
			</ul>
		</div>
	
		
		<div class="footer--col tech_menu">
			<h3>Технологии для&nbsp;комфорта</h3>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer_about_company",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "",
					"COMPONENT_TEMPLATE" => "footer_about_company",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "techno_menu",
					"USE_EXT" => "Y"
				)
			); ?>
		</div>
		<div class="footer--col">
			<h3>О&nbsp;компании</h3>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer_about_company",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "about_menu",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "about_menu",
					"USE_EXT" => "N"
				)
			); ?>
		</div>
		<div class="footer--col">
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR . "/include/footer-phone.php",
				array(),
				array(
					"MODE" => "html"
				)
			);
			?>
		</div>
		<div class="footer--line">
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR . "/include/copyright.php",
				array(),
				array(
					"MODE" => "html"
				)
			);
			?>
		</div>
	</div>
</footer>
<?
$APPLICATION->IncludeFile(
	SITE_DIR . "/include/request_call.php",
	array(),
	array(
		"MODE" => "html"
	)
);
?>