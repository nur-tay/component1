<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array( // кроме групп по умолчанию, добавляем свои группы настроек
    'PARAMETERS' => array(
        'LIST_TITLE_VALUE' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Заголовок страницы в списке',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ),
        'VARIABLE_ALIASES' => array( // это для работы в режиме без ЧПУ
            'GROUP_ID' => array('NAME' => 'Идентификатор группы'),
        ),
        'SEF_MODE' => array( // это для работы в режиме ЧПУ
            'detail' => array(
                'NAME' => 'Страница группы',
                'DEFAULT' => '#GROUP_ID#/',
            ),
        ),
		
        'CACHE_TIME'  =>  array('DEFAULT' => 3600),
        'CACHE_GROUPS' => array( // учитываться права доступа при кешировании?
            'PARENT' => 'CACHE_SETTINGS',
            'NAME' => 'Учитывать права доступа',
            'TYPE' => 'CHECKBOX',
            'DEFAULT' => 'Y',
        ),
    ),
);
?>
