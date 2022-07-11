<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" style ="margin-right:7% ;position:absolute;
z-index:2; width:20%; background-color: LightGrey; padding-left:1.5%; margin-top:17.5% ">
	<?foreach($arResult["ITEMS"] as $arItem):
		if(array_key_exists("HIDDEN", $arItem)):
			echo $arItem["INPUT"];
		endif;
	endforeach;?>
	<table  cellspacing="0" cellpadding="2"  style ="width:10%" border ="0;">
		<thead style="padding-left:3px">
			<tr>
				<td colspan="2" align="center"  ><p align='center' style =" margin-right: 10%"><?=GetMessage("IBLOCK_FILTER_TITLE")?></p></td>
				
			</tr>
		</thead>
		<tbody style="padding-left:3px">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?if(!array_key_exists("HIDDEN", $arItem)):?>
					<tr>
						
						<td valign="top" style="display:flex; margin-left:5px"><?=$arItem["INPUT"]?></td>
					</tr>
				<?endif?>
			<?endforeach;?>
		</tbody>
		<tfoot style="padding-left:3px">
			
			<tr>
				<td colspan="2">
					<input  style =" margin-left; width:100%; text-aling:center;" type="submit" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>" />
					<input style="text-aling:center" type="hidden" name="set_filter" value="Y" />&nbsp;&nbsp;
					<input style="width:100%; text-aling:center;" type="submit" name="del_filter" value="<?=GetMessage("IBLOCK_DEL_FILTER")?>" /></td>
			</tr>
		</tfoot>
	</table>
</form>
