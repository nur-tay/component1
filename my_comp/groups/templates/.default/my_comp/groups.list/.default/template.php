<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<h2><?=$arResult["LIST_TITLE_VALUE"]?></h2>
<?
if( is_array($arResult["ITEMS"]) && count($arResult["ITEMS"])>0 ){
	foreach( $arResult["ITEMS"] as $key=>$arItem ){
		?>
<div class="group_info">
	<div class="group_info_id">ID группы: <?=$arItem["ID"]?></div>
	<div class="group_info_name">Название группы: <?=$arItem["NAME"]?></div>
	<div class="group_info_desc"><a href="<?=$arItem["DETAIL_LINK"]?>">Перейти на страницу группы</a></div>
</div><br>
		<?
	}
}
?>