
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
<?$APPLICATION->ShowHead();?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?$APPLICATION->ShowTitle()?></title>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lib/jquery.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/build/jquery.bxslider.min.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/build/jquery.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/bower_components/foundation/js/foundation.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/build/main.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/dev/app.js"></script>

 
 <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.css" />
 <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/app.css" />

	<script src="<?=SITE_TEMPLATE_PATH?>/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div id="panel"><?$arGroups = CUser::GetUserGroup($USER->GetID()); 
$arGroups = $USER->GetUserGroupArray();if (in_array(1, $arGroups ))$APPLICATION->ShowPanel();?></div>
<div class="page-header-wrp">
    <div class="page-header">
        <div class="logo">
            <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Информационное Агентство
                Транспортных услуг"/></a>
            <p>Информационное Агентство
                Транспортных услуг</p>
        </div>
        <div class="social">
            <div class="phone">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/phone.png" alt=""/>
                <p><span><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/phone.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></span><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/phone1.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></p>
            </div>
            <div class="mail">
                <p><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/mail.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></p>
            </div>
            <div class="contacts">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/skype.png" alt=""/> <span>ctc</span>
				<img src="<?=SITE_TEMPLATE_PATH?>/images/vk.png" alt=""/>
            </div>
            <div class="wright-us">
                <a href="#">Напишите нам</a>
            </div>
        </div>
        <div class="user">
            <div class="cabinet">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/user.jpg" alt=""/>
                <?//Если пользователь авторизован, то показать ссылку на личный кабинет, в ином случае показать ссылку на авторизацию
				global $USER;
				if ($USER->IsAuthorized()) 
				echo '<a class="user-cabinet" href="http://ctc.upstyle.pro/personal/">Личный кабинет <img src="' . SITE_TEMPLATE_PATH .  '/images/cabinet-arrow.jpg" alt=""/></a>';
				else
				echo '<a class="user-login" href="http://ctc.upstyle.pro/personal/" style="display: inline-block; margin-left: 4px;">Вход и регистрация</a>';?>
            </div>
			<script>
			//Отправка id выбранного города из выпадающего списка городов
			function getCityId_num() 
			{
			var sel = document.getElementById('city_sel');
			var op = sel.selectedIndex;
			var city_id = sel.options[op].id;
			if(city_id != 'change_city')
			city_id = parseInt(city_id.replace(/\D+/g,""));
			location_h = location.href.split('?');
			window.location.href = location_h[0] + '?clear_cache_session=Y&id_c=' + city_id +'&sel_ind=' + op;
			}
			</script>
            <div class="city">
                <p>город:</p>
<?//Подключение компонента каталога, для того что бы подключить шаблон вывода городов из инфоблока
$APPLICATION->IncludeComponent("bitrix:catalog.section", "city_nums", array(
	"IBLOCK_TYPE" => "ads",
	"IBLOCK_ID" => "5",
	"SECTION_ID" => "2",
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "",
	"ELEMENT_SORT_ORDER" => "",
	"ELEMENT_SORT_FIELD2" => "",
	"ELEMENT_SORT_ORDER2" => "",
	"FILTER_NAME" => "arrFilter",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "N",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "30",
	"LINE_ELEMENT_COUNT" => "3",
	"PROPERTY_CODE" => array(
		0 => "HEIGTH",
		1 => "CITY",
		2 => "PAYLOAD",
		3 => "LENGTH",
		4 => "CONTACT_NAME",
		5 => "ORG",
		6 => "PHONE",
		7 => "PRICE_DO",
		8 => "PRICE_FROM",
		9 => "WIDTH",
		10 => "",
	),
	"OFFERS_LIMIT" => "5",
	"TEMPLATE_THEME" => "",
	"ADD_PICT_PROP" => "-",
	"LABEL_PROP" => "-",
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_DISCOUNT_PERCENT" => "N",
	"SHOW_OLD_PRICE" => "N",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"SECTION_URL" => "",
	"DETAIL_URL" => "",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SET_META_KEYWORDS" => "Y",
	"META_KEYWORDS" => "",
	"SET_META_DESCRIPTION" => "Y",
	"META_DESCRIPTION" => "",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"USE_PRODUCT_QUANTITY" => "N",
	"ADD_PROPERTIES_TO_BASKET" => "Y",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	),
	false
);?>
<?
// if url has sel_ind parameter
if(isset($_GET["sel_ind"])):
?>
	<script>
//Фиксация выбранного элемента в списке городов
	var sel = document.getElementById('city_sel');
	sel.options[<?=$_GET["sel_ind"]?>].selected = true;
	</script>
<?endif;?>
	
            </div>
        </div>
    </div>
</div>

<div class="slogan-wrp">
    <div class="slogan">
        <div class="slogan-slider">
            <ul>
                <li><p>Здесь будет написан наш слоган! – узкий слайдер только для текста</p></li>
                <li><p>Здесь будет написан наш слоган! – узкий слайдер только для текста</p></li>
                <li><p>Здесь будет написан наш слоган! – узкий слайдер только для текста</p></li>
                <li><p>Здесь будет написан наш слоган! – узкий слайдер только для текста</p></li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.bx-slider').bxSlider({
            pager: false,
            slideWidth: 170,
            minSlides: 1,
            maxSlides: 4,
            slideMargin: 8,
            moveSlides: 1
        });
        $('.slogan-slider ul').bxSlider({
            pager: false,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            auto: true,
            pause: 3000
        });
    })
</script>
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_top", Array(
	"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
	"MENU_CACHE_TYPE" => "N",	// Тип кеширования
	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
	"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>


<div class="groups-wrp">
    <div class="groups">
        <ul>
            <li>
                <a href="/rest/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/car-1.jpg" alt=""/>
                    <p class="group-item-desc yellow">Отдых</p>
                    <div class="overtext yellow">
                        <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/bitrix/templates/.default/include/text_b_1.php"
	)
);?></p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/car-2.jpg" alt=""/>
                    <p class="group-item-desc blue">Работа</p>
                    <div class="overtext blue">
                        <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/bitrix/templates/.default/include/text_b_2.php"
	)
);?></p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/car-3.jpg" alt=""/>
                    <p class="group-item-desc violet">Бизнес</p>
                    <div class="overtext violet">
                        <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/bitrix/templates/.default/include/text_b_3.php"
	)
);?></p>
                    </div>
                </a>
            </li>
            <li>
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "ctc_articles", array(
	"IBLOCK_TYPE" => "services",
	"IBLOCK_ID" => "4",
	"NEWS_COUNT" => "1",
	"SORT_BY1" => "",
	"SORT_ORDER1" => "",
	"SORT_BY2" => "",
	"SORT_ORDER2" => "",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "Y",
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
            </li>
        </ul>
    </div>
</div>

<div class="page-content-wrp">
<div class="page-content">

  <div class="content index-page no-padding">
      
      <div class="content news-page">
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"ctc_breadcump",
	Array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	)
);?><br>
<header class="page-header">
    <h2><?$APPLICATION->ShowTitle()?></h2>
</header>
          