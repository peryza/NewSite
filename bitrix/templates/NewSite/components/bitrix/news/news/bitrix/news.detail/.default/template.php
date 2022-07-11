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

<article >
<div class="" >
	<div class="">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img style = "margin-left: 15% ; width:65%; margin-top:5%"  
				
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
		<?endif?>

	</div>
</div>

<div class="entry__header col-full"  >
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h1 class="entry__header-title display-1"><?=$arResult["NAME"]?></h1>
	<?endif;?>
	
	<ul class="entry__header-meta">
		<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<li class="date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></li>
		<?endif;?>
	
		
	</ul>
</div>

<div class="col-full entry__main">
<?if($arResult["NAV_RESULT"]):?>
			<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
			<p class="lead drop-cap"><?echo $arResult["NAV_TEXT"];?></p>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
		<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
			<h2 ><?echo $arResult["PREVIEW_TEXT"];?></h2>
			<p class="lead drop-cap"><?echo $arResult["DETAIL_TEXT"];?></p>
		<?else:?>
			
		<?endif?>

</article>
<?
$res = CIBlockElement::GetList( 
		array( 'sort' => 'asc' ), 
		array( 
			'IBLOCK_ID' => $arResult['IBLOCK_ID'], // здесь ID инфоблока, в котором находится элемент 
			'ACTIVE' => 'Y', 
			'SECTION_ID' => $arResult['IBLOCK_SECTION_ID'] 
		), 
		false, 
		array( 
			'nElementID' => $arResult['ID'], 
			'nPageSize' => 1 )
		);
$nearElementsSide = 'LEFT';
while ($arElem = $res->GetNext()){
	 if ($arElem['ID'] == $arResult['ID']){ 
		$nearElementsSide = 'RIGHT'; continue;
		} 
		$arResult['NEAR_ELEMENTS'][$nearElementsSide][] = $arElem;
	}
?>

	<div class="col-md-3">
		<?if ($arResult['NEAR_ELEMENTS']['LEFT'][0]['NAME'] != ""):?>
			<a href="/blog/futbol/<?=$arResult['NEAR_ELEMENTS']['LEFT'][0]['CODE']?>/">Предыдущая</a>
		<?endif?>
	</div>
	<div class="col-md-3">
		<?if ($arResult['NEAR_ELEMENTS']['RIGHT'][0]['NAME'] != ""):?>
			<a href="/blog/futbol/<?=$arResult['NEAR_ELEMENTS']['RIGHT'][0]['CODE']?>/">Следующая</a>
		<?endif?>
	</div>










<?/*
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif;?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
			<h3><?=$arResult["NAME"]?></h3>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
			<p class="lead drop-cap"><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
		<?endif;?>
		<?if($arResult["NAV_RESULT"]):?>
			<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
			<?echo $arResult["NAV_TEXT"];?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
		<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
			<?echo $arResult["DETAIL_TEXT"];?>
		<?else:?>
			<p	class="lead drop-cap"><?echo $arResult["PREVIEW_TEXT"];?></p>
		<?endif?>
		<div style="clear:both"></div>
		<br />
		<?foreach($arResult["FIELDS"] as $code=>$value):
			if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
			{
				?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
				if (!empty($value) && is_array($value))
				{
					?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
				}
			}
			else
			{
				?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
			}
			?><br />
		<?endforeach;
		foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			<br />
		<?endforeach;
		if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
		{
			?>
			<div class="news-detail-share">
				<noindex>
				<?
				$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
						"HANDLERS" => $arParams["SHARE_HANDLERS"],
						"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
						"PAGE_TITLE" => $arResult["~NAME"],
						"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
						"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
						"HIDE" => $arParams["SHARE_HIDE"],
					),
					$component,
					array("HIDE_ICONS" => "Y")
				);
				?>
				</noindex>
			</div>
			<?
		}
		?>

*/?>