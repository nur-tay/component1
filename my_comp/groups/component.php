<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if ($arParams['SEF_MODE'] == 'Y') {
	$arVariables = array();

	$arComponentVariables = array(
		'GROUP_ID',
	);

	$arDefaultVariableAliases404 = [];
	$arDefaultUrlTemplates404 = array(
		'list' => '',
		'detail' => '#GROUP_ID#/',
	);

	$arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates(
		$arDefaultUrlTemplates404,
		$arParams['SEF_URL_TEMPLATES']
	);

	$arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
		$arDefaultVariableAliases404,
		$arParams['VARIABLE_ALIASES']
	);

	$componentPage = CComponentEngine::ParseComponentPath(
		$arParams['SEF_FOLDER'],
		$arUrlTemplates, 
		$arVariables
	);

	if ($componentPage === false && parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $arParams['SEF_FOLDER']) {
		$componentPage = 'list';
	}

	if (empty($componentPage) ) {
		\Bitrix\Iblock\Component\Tools::process404(
			trim($arParams['MESSAGE_404']) ?: 'Группа не найдена',
			true,
			$arParams['SET_STATUS_404'] === 'Y',
			$arParams['SHOW_404'] === 'Y',
			$arParams['FILE_404']
		);
		return;
	}

	CComponentEngine::InitComponentVariables(
		$componentPage,
		$arComponentVariables,
		$arVariableAliases,
		$arVariables
	);

	$arResult['VARIABLES'] = $arVariables;
	$arResult['FOLDER'] = $arParams['SEF_FOLDER'];
	$arResult['GROUP_URL'] = $arParams['SEF_FOLDER'].$arParams['SEF_URL_TEMPLATES']['detail'];

}else{
	$arVariables = array();
	$arDefaultVariableAliases = array();
	
	$arComponentVariables = array(
		'GROUP_ID',
	);
	
	$arComponentVariables[] = 'ACTION';
	
	$arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
		$arDefaultVariableAliases,
		$arParams['VARIABLE_ALIASES']
	);

	CComponentEngine::InitComponentVariables(
		false,
		$arComponentVariables,
		$arVariableAliases,
		$arVariables
	);
	
	$componentPage = 'list';
	if (isset($arVariables['ACTION']) && $arVariables['ACTION'] == 'detail') {
		$componentPage = 'detail';
	}
	
	$arResult['VARIABLES'] = $arVariables;
	$arResult['FOLDER'] = '';
	
	$arResult['GROUP_URL'] = $APPLICATION->GetCurPage().'?ACTION=detail'.'&'.$arVariableAliases['GROUP_ID'].'=#GROUP_ID#';
}


$this->IncludeComponentTemplate($componentPage);
?>