<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$buttons = "";
$count = 0;
if ($arResult["PROPERTIES"]["BUTTON_1"]["VALUE_XML_ID"] == "Y") {
	$style = "";
	$count++;
	if ($count % 2) {
		$btn = "primary";
	} else {
		$btn = "secondary";
	}
	if ($arResult["PROPERTIES"]["BUTTON_1_COLOR"]["VALUE"] != "") $style = "style='background-color:#".$arResult["PROPERTIES"]["BUTTON_1_COLOR"]["VALUE"]."'";
	$buttons .= "<a href='/uchastki/' class='btn btn-$btn' $style>Посмотреть участки</a>";
}
if ($arResult["PROPERTIES"]["BUTTON_2"]["VALUE_XML_ID"] == "Y") {
	$style = "";
	$count++;
	if ($count % 2) {
		$btn = "primary";
	} else {
		$btn = "secondary";
	}
	if ($arResult["PROPERTIES"]["BUTTON_2_COLOR"]["VALUE"] != "") $style = "style='background-color:#".$arResult["PROPERTIES"]["BUTTON_1_COLOR"]["VALUE"]."'";
	$buttons .= "<a href='/infrastruktura/' class='btn btn-$btn' $style>Наша инфраструктура</a>";
}
if ($arResult["PROPERTIES"]["BUTTON_3"]["VALUE_XML_ID"] == "Y") {
	$style = "";
	$count++;
	if ($count % 2) {
		$btn = "primary";
	} else {
		$btn = "secondary";
	}
	if ($arResult["PROPERTIES"]["BUTTON_3_COLOR"]["VALUE"] != "") $style = "style='background-color:#".$arResult["PROPERTIES"]["BUTTON_1_COLOR"]["VALUE"]."'";
	$buttons .= "<a href='/investoru/' class='btn btn-$btn' $style>Стать инвестором</a>";
}

if ($buttons != "") $buttons = "<div class='button_digest_wrap'>" . $buttons . "</div>";

$arResult["DETAIL_TEXT"] =  str_replace("#BUTTONS#", $buttons, $arResult["DETAIL_TEXT"]);