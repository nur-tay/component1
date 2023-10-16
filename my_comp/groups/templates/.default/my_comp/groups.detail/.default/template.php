<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<h2>Данные о группе</h2>
<div class="group_info">
<div class="group_info_id">ID группы: <?=$arResult["ITEMS"]["ID"]?></div>
<div class="group_info_name">Название группы: <?=$arResult["ITEMS"]["NAME"]?></div>
<div class="group_info_desc">Описание группы: <?=$arResult["ITEMS"]["DESCRIPTION"]?></div>
</div>
