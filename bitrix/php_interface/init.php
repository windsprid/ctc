<?
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/mail_event.php"))
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/mail_event.php");
if (mail("felixilin@yandex.ru","test subject", "test body","From: info@upstyle.pro"))
echo "Сообщение передано функции mail, проверьте почту в ящике.";
else
echo "Функция mail не работает, свяжитесь с администрацией хостинга.";

//add user to group after register
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");

function OnBeforeUserRegisterHandler(&$arFields) {
	$gpoups[] = $_COOKIE["USER_ACCESS_GROUP"];
	$arFields["GROUP_ID"] = $gpoups;	
}
?>
