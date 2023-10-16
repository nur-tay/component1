<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => 'Список групп пользователей', // название компонента
    'DESCRIPTION' => 'Информация по группам пользователей',
    'ICON' => '/images/icon.gif', // иконка компонента относительно папки компонента
    'CACHE_PATH' => 'Y', // показывать кнопку очистки кеша
    'SORT' => 40, // порядок сортировки в визуальном редакторе
    'COMPLEX' => 'Y', // признак комплексного компонента
    'PATH' => array( // расположение компонента в визуальном редакторе
        'ID' => 'my_components', // идентификатор верхнего уровеня в редакторе
        'NAME' => 'Мои компоненты', // название верхнего уровня в редакторе
    )
);
?>