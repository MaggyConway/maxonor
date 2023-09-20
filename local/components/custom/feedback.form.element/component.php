<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(false);


if (CModule::IncludeModule("iblock"))

$arResult[] = array(
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'PROPERTY_IDS' => $arParams['PROPERTY_CODES'],
);

$arResult['PROPERTY_DATAS'] = array();
$properties = CIBlockProperty::GetList(
    Array("sort" => "asc"),
    Array("ACTIVE" => "Y", "IBLOCK_ID" => $arParams['IBLOCK_ID'],)
);

while ($prop_fields = $properties->GetNext()) {
    array_push($arResult['PROPERTY_DATAS'], $prop_fields);
}

// POST 
if ((!empty($_REQUEST['NAME'])) && (!empty($_REQUEST['sessid'])) && (empty($_REQUEST['USER']))) {

    $el = new CIBlockElement;
    $section_id = false;
    $sendFields = array();

    foreach ($arResult['PROPERTY_DATAS'] as $sendProps) {
        $sendFields[$sendProps['CODE']] = strip_tags($_POST[$sendProps['CODE']]);
    }

    $fields = array(
        "IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "PROPERTY_VALUES" => $sendFields,
        "NAME" => strip_tags($_REQUEST['NAME']),
    );

    if ($ID = $el->Add($fields)) {
        
        $arResult['OK_MESSAGE'] = "Заявка принята, пожалуйста \nожидайте звонка!";
    }
    else
    {
        $arResult['ERROR_MESSAGE'] = "Извините возникла проблема, \nпопробуйте позже!";
    }
}

$this->includeComponentTemplate();

?>


