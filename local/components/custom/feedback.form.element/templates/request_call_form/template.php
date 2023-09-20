<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(false);
?>

<? if (!empty($arResult['ERROR_MESSAGE'])): ?>
    <div class="request_call--modal__title">Ошибка!</div>

    <p style="max-width: none;">
        <? echo $arResult["ERROR_MESSAGE"]; ?>
    </p>
<? elseif (!empty($arResult['OK_MESSAGE'])): ?>
    <div class="request_call--modal__title">Готово!</div>

    <p style="max-width: none;">
        <? echo $arResult["OK_MESSAGE"]; ?>
    </p>
    
    <form class="request_call--modal__form"  action="<?= POST_FORM_ACTION_URI ?>">
            
        <button type="button" class="btn_success">Жду звонка</button>
    </form>
<? else: ?>
    
    <div class="request_call--modal__title">Заказать звонок</div>

    <p>
        Оставьте номер телефона и мы вам перезвоним
    </p>

    <form class="request_call--modal__form" name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data"><?= bitrix_sessid_post() ?>
        <input type="text" placeholder="Телефон" name="NAME" value="" required />

        <input type="text" name="USER" value="" style="display: none;" />

        <button type="submit">Заказать</button>
    </form>

    <script>
        new Cleave('.request_call--modal__form > input[name="NAME"]', {
            phone: true,
            phoneRegionCode: 'RU',
            prefix: '+7',
            noImmediatePrefix: true
        });
    </script>
<? endif ?>