<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(true);
?>

<?$APPLICATION->IncludeComponent(
	"my_comp:groups.list",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"LIST_TITLE" => $arParams['LIST_TITLE_VALUE'],
		'GROUP_URL' => $arResult['GROUP_URL'],
		'FOLDER' => $arResult['FOLDER'],
		'SEF_MODE' => $arParams['SEF_MODE'],
	),
	$component
);?>
