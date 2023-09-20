<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
$APPLICATION->SetPageProperty("TITLE", "Сайт временно закрыт на техническое обслуживание");
$APPLICATION->SetTitle("Сайт временно закрыт на техническое обслуживание");
?>

<style>
    .maintenance {
        margin-top: 89px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: 'Rubik', sans-serif;
        color: #1C1B1F;
    }

    .maintenance h2 {
        font-weight: 600;
        font-size: 40px;
        line-height: 47px;
        max-width: 702px;
        margin: 50px 0;
    }

    .maintenance .logo {
        width: 291px;
        height: 110px;
        background: url(/local/templates/maxonor/assets/images/light_header/logo.svg) no-repeat center center;
        background-size: contain;
    }

    .maintenance .contacts__links {
        font-weight: 400;
        font-size: 18px;
        line-height: 23px;
    }

    .maintenance .contacts__links p {
        margin: 0;
    }

    .maintenance .contacts__links p:first-of-type {
        margin-bottom: 16px;
    }

    .maintenance .contacts__links a {
        color: #F47216;
        font-weight: 700;
        text-decoration: none;
    }

    .maintenance .contacts__links a:hover {
		color: #9C4100;
	}

	.maintenance .contacts__links a:active {
		color: #F47216;
	}

	.maintenance .contacts__links a:disabled,
	.maintenance .contacts__links a[disabled],
	.maintenance .contacts__links a[disabled='disabled'] {
		color: #646464;
	}
</style>

<section class="maintenance">
    <a href="/" class="logo"></a>

    <h2>
        Сайт временно закрыт на&nbsp;техническое обслуживание
    </h2>

    <div class="contacts__links">
        <p>Телефон: <a href="tel:+74951343405">+7 (495) 134-34-05</a></p>
        <p>Email: <a href="mailto:info@maxonor.ru">info@maxonor.ru</a></p>
    </div>
</section>