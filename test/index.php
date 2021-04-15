<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый раздел");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
Array(),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>