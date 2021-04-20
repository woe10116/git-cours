<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?><p>
	 Обратитесь к нашим специалистам и получите профессиональную консультацию по услугам нашего банка.
</p>
<p>
	 Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы.
</p>
<a class = "soc" href = "https://vk.com/aleksos0">&#xf189 VK </a>
<h2>Телефоны</h2>
<ul>
	<li>Телефон/факс:
	<ul>
		<li><b>(495) 212-85-06</b> </li>
	</ul>
 </li>
	<li>Телефоны:
	<ul>
		<li><b>(495) 212-85-07</b> </li>
		<li><b>(495) 212-85-08</b> </li>
	</ul>
 </li>
 
</ul>

<h2>Наш офис в Москве</h2>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"CONTROLS" => array(0=>"LARGE_MAP_CONTROL",1=>"MINIMAP",2=>"HTYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "NORMAL",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>