<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div style="margin-top: 2%">
                <h1 class="display-1 display-1--with-line-sep" style="text-align: center;">Контакты</h1>
    </div>
<section class="s-content s-content--top-padding s-content--narrow">
<div class="row narrow">
	
   
    <div class="">	
        <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:56.177041119561245;s:10:\"yandex_lon\";d:88.01770118639497;s:12:\"yandex_scale\";i:18;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:88.0176475422147;s:3:\"LAT\";d:56.1770548838046;s:4:\"TEXT\";s:15:\"Наш офис\";}}}",
		"MAP_HEIGHT" => "420",
		"MAP_ID" => "",
		"MAP_WIDTH" => "1700",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	</div>
</div>
<div class="row">
	
	<div class="row">
		<div class="col-six tab-full">
			<h4>Наш адрес</h4>
			<p>
				 Кемеровская область<br>
				 Мариинский район<br>
                 Поселок Первомайский<br>
                 ул. Юбилейная 3-1<br>
				 652182 Россия
			</p>
		</div>
		<div class="col-six tab-full">
			<h4>Контактная информация</h4>
			<p>
 <a href="mailto:vladislav.peroff2016@yandex.ru">vladislav.peroff2016@yandex.ru</a><br>
 <a href="mailto:xxx.vlados.perov.xxx@gmail.com">mailto:xxx.vlados.perov.xxx@gmail.com</a> <br>
				 Phone: (+7) 999 431 3467
			</p>
		</div>
	</div>
</div>
 <!-- s-content__main --> <!-- end row --> </section> <!-- end s-content -->
    <!-- s-extra
    ================================================== --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>