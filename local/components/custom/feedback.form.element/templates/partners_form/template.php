<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(false);
?>

<form class="form_request" name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
    <?= bitrix_sessid_post() ?>
    
    <? if (!empty($arResult['ERROR_MESSAGE'])): ?>
        <div class="form_request__title">Ошибка!</div>
        <p>
            <? echo $arResult["ERROR_MESSAGE"]; ?>
        </p>
    <? elseif (!empty($arResult['OK_MESSAGE'])): ?>
        <div class="form_request__title">Готово!</div>
        <p>
            <? echo $arResult["OK_MESSAGE"]; ?>
        </p>
    <?else:?>
        <div class="form_request__title">Заявка</div>
        <p>Для быстрой обратной связи заполните&nbsp;форму</p>
    <? endif ?>

    <input type="text" placeholder="Название компании" name="NAME" maxlength="255" value="" required />

    <div class="send_form_field send_form_field_d">
        <input type="text" name="USER" value="">
    </div>

    <? foreach ($arResult['PROPERTY_DATAS'] as $field) {?>
        <input type="text" placeholder="<?= $field['NAME'] ?>" name="<? echo $field['CODE'] ?>" maxlength="255" value="">
    <? } ?>

    <button type="submit">Отправить</button>
</form>

<script>
    new Cleave('.form_request > input[name="PHONE"]', {
        phone: true,
        phoneRegionCode: 'RU',
        prefix: '+7',
        noImmediatePrefix: true
    });

    new Cleave('.form_request > input[name="INN"]', {
        numeral: true,
        numeralThousandsGroupStyle: 'none'
    });
</script>