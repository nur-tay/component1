<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if (!isset($arParams['CACHE_TIME'])) {
    $arParams['CACHE_TIME'] = 3600;
}


$arParams['GROUP_ID'] = trim($arParams['GROUP_ID']);

$arResult = array();
if ($this->StartResultCache(false, ($arParams['CACHE_GROUPS']==='N' ? false: $USER->GetGroups()))) {
	
	if( isset($arParams['GROUP_ID']) && intval($arParams['GROUP_ID'])>0 ){
		$g_filter = Array("ID" => $arParams['GROUP_ID']);
		$rsGroups = CGroup::GetList(($by="c_sort"), ($order="desc"), $g_filter);
		while($arGroups = $rsGroups->Fetch()){
			$arResult['ID'] = $arGroups['ID'];
			$arResult['ITEMS'] = $arGroups;
		}
	}


    if (isset($arResult['ID'])) {
        $this->SetResultCacheKeys(
            array(
                'ID',
                'ITEMS',
            )
        );
        $this->IncludeComponentTemplate();
    } else {
        $this->AbortResultCache();
        \Bitrix\Iblock\Component\Tools::process404(
            trim($arParams['MESSAGE_404']) ?: 'Группа не найдена',
            true,
            $arParams['SET_STATUS_404'] === 'Y',
            $arParams['SHOW_404'] === 'Y',
            $arParams['FILE_404']
        );
    }

}
?>