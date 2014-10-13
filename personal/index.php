<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>

<?
global $USER;
// not authorized user
if (!$USER->IsAuthorized()):
// registration
	if($_REQUEST["register"] == "yes") {
		$APPLICATION->IncludeComponent("bitrix:main.register","add_groups",Array(
				"USER_PROPERTY_NAME" => "", 
				"SEF_MODE" => "Y", 
				"SHOW_FIELDS" => Array(), 
				"REQUIRED_FIELDS" => Array(), 
				"AUTH" => "Y", 
				"USE_BACKURL" => "Y", 
				"SUCCESS_PAGE" => "", 
				"SET_TITLE" => "Y", 
				"USER_PROPERTY" => Array(), 
				"SEF_FOLDER" => "/", 
				"VARIABLE_ALIASES" => Array()
			)
		);
	} else {
//login form
		$APPLICATION->IncludeComponent("bitrix:system.auth.form","",Array(
			 "REGISTER_URL" => "",
			 "FORGOT_PASSWORD_URL" => "",
			 "PROFILE_URL" => "",
			 "SHOW_ERRORS" => "Y" 
			 )
		);
	}
else:
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"template",
	Array(
		"USER_PROPERTY_NAME" => "",
		"SET_TITLE" => "Y",
		"AJAX_MODE" => "N",
		"USER_PROPERTY" => Array(),
		"SEND_INFO" => "Y",
		"CHECK_RIGHTS" => "Y",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> <br>
<?
/*if (CModule::IncludeModule('sale'))
{
$ORDER_ID = 1;
if (!($arOrder = CSaleOrder::GetByID(1)))
{
   echo "Заказ с кодом ".$ORDER_ID." не найден";
}
else
{
   echo "<pre>";
   print_r($arOrder);
   echo "</pre>";
}
}*/
?><?$APPLICATION->IncludeComponent("custom:sale.personal.order", "template1", array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/personal/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"ORDERS_PER_PAGE" => "20",
	"PATH_TO_PAYMENT" => "/personal/connection-payment.php",
	"PATH_TO_BASKET" => "/personal/the-list-of-orders.php",
	"SET_TITLE" => "Y",
	"SAVE_IN_SESSION" => "Y",
	"NAV_TEMPLATE" => "",
	"CUSTOM_SELECT_PROPS" => array(
	),
	"HISTORIC_STATUSES" => array(
	),
	"STATUS_COLOR_N" => "green",
	"STATUS_COLOR_F" => "gray",
	"STATUS_COLOR_PSEUDO_CANCELLED" => "red"
	),
	false
);?><br>
<br>
<?endif;?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>