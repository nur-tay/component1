<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    'PARAMETERS' => array(
        'GROUP_ID' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Идентификатор группы',
            'TYPE' => 'STRING',
            'DEFAULT' => '={$_REQUEST["GROUP_ID"]}',
        ),
        'CACHE_TIME'  =>  array('DEFAULT'=>3600),
        'CACHE_GROUPS' => array(
            'PARENT' => 'CACHE_SETTINGS',
            'NAME' => 'Учитывать права доступа',
            'TYPE' => 'CHECKBOX',
            'DEFAULT' => 'Y',
        ),
    ),
);
?>