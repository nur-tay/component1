<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(true);
?>

<?$APPLICATION->IncludeComponent(
	"my_comp:groups.detail",
	"",
	Array(
	    'CACHE_TYPE' => $arParams['CACHE_TYPE'],
        'CACHE_TIME' => $arParams['CACHE_TIME'],
        'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
		'GROUP_ID' => $arResult['VARIABLES']['GROUP_ID'],
	),
	$component
);?>
