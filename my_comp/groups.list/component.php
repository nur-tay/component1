<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if (!isset($arParams['CACHE_TIME'])) {
    $arParams['CACHE_TIME'] = 3600;
}

$arParams['LIST_TITLE'] = trim($arParams['LIST_TITLE']);

if ($this->StartResultCache(false, ($arParams['CACHE_GROUPS']==='N' ? false: $USER->GetGroups()))) {
	
	$g_filter = Array();
	$rsGroups = CGroup::GetList(($by="c_sort"), ($order="desc"), $g_filter);
	while($arGroups = $rsGroups->Fetch()){
		$arGroups['DETAIL_LINK'] = $arParams['FOLDER'].$arGroups['ID']."/";
		
		if( $arParams["SEF_MODE"] == "N" ){
			$detail_link_url = str_replace("#GROUP_ID#", $arGroups['ID'], $arParams['GROUP_URL']);
			$arGroups['DETAIL_LINK'] = $detail_link_url;
		}
		
		$arResult['ITEMS'][] = $arGroups;
	}

	$arResult['LIST_TITLE_VALUE'] = $arParams['LIST_TITLE'];


	$this->SetResultCacheKeys(
		array(
			'LIST_TITLE_VALUE',
			'ITEMS',
		)
	);
	$this->IncludeComponentTemplate();

}
?>