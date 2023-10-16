<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    'PARAMETERS' => array(
        'LIST_TITLE' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Заголовок списка',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
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