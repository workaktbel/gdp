<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
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
$this -> setFrameMode(true);
?>

<div class="t396__elem tn-elem tn-elem__2531280801601039998007" data-elem-id="1601039998007" data-elem-type="text" data-field-top-value="80" data-field-top-res-960-value="110" data-field-top-res-320-value="110" data-field-left-value="230" data-field-left-res-960-value="70" data-field-left-res-320-value="10" data-field-width-value="224" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits">
	<div class="tn-atom" field="tn_text_1601039998007"><?=$arResult["ITEMS"]["0"]['PROPERTIES']['FOOTER']['VALUE']?></div>
</div>
<div class="t396__elem tn-elem tn-elem__2531280801601040014894" data-elem-id="1601040014894" data-elem-type="text" data-field-top-value="80" data-field-top-res-960-value="110" data-field-top-res-640-value="80" data-field-top-res-320-value="303" data-field-left-value="580" data-field-left-res-960-value="420" data-field-left-res-640-value="310" data-field-left-res-320-value="10" data-field-width-value="81" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 80px; left: 700px; width: 81px;">
	<div class="tn-atom" field="tn_text_1601040014894"><?=$arResult["ITEMS"]["1"]['PROPERTIES']['FOOTER']['VALUE']?></div>
</div>
<div class="t396__elem tn-elem tn-elem__2531280801601040027488" data-elem-id="1601040027488" data-elem-type="text" data-field-top-value="80" data-field-top-res-960-value="110" data-field-top-res-640-value="264" data-field-top-res-320-value="532" data-field-left-value="881" data-field-left-res-960-value="721" data-field-left-res-640-value="70" data-field-left-res-320-value="10" data-field-width-value="200" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 80px; left: 1001px; width: 200px;">
	<div class="tn-atom" field="tn_text_1601040027488"><?=GetMessage("SOC")?></div>
</div>
<div class="t396__elem tn-elem tn-elem__2531280801601040078298" data-elem-id="1601040078298" data-elem-type="text" data-field-top-value="132" data-field-top-res-960-value="162" data-field-top-res-320-value="162" data-field-left-value="230" data-field-left-res-960-value="70" data-field-left-res-320-value="10" data-field-width-value="200" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 132px; left: 350px; width: 200px;">
	<div class="tn-atom" field="tn_text_1601040078298"><? echo $arResult["ITEMS"]["0"]["PROPERTIES"]["ADRESS"]["~VALUE"]['TEXT']; ?>
		<br> <br> <? echo $arResult["ITEMS"]["0"]["PROPERTIES"]["PHONE"]["~VALUE"][0]["TEXT"]; ?>
		<br><br><? echo $arResult["ITEMS"]["0"]["PROPERTIES"]["PHONE"]["~VALUE"][1]["TEXT"]; ?></div>
</div>
<div class="t396__elem tn-elem tn-elem__2531280801601040205445" data-elem-id="1601040205445" data-elem-type="text" data-field-top-value="132" data-field-top-res-960-value="162" data-field-top-res-640-value="132" data-field-top-res-320-value="354" data-field-left-value="580" data-field-left-res-960-value="420" data-field-left-res-640-value="310" data-field-left-res-320-value="10" data-field-width-value="210" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 132px; left: 700px; width: 210px;">
	<div class="tn-atom" field="tn_text_1601040205445"><? echo $arResult["ITEMS"]["1"]["PROPERTIES"]["ADRESS"]["~VALUE"]['TEXT']; ?>
		<br><br><br><? echo $arResult["ITEMS"]["1"]["PROPERTIES"]["PHONE"]["~VALUE"][0]["TEXT"]; ?>
		<br><br><? echo $arResult["ITEMS"]["1"]["PROPERTIES"]["PHONE"]["~VALUE"][1]["TEXT"]; ?>
		<br><br><? echo $arResult["ITEMS"]["1"]["PROPERTIES"]["PHONE"]["~VALUE"][2]["TEXT"]; ?></div>
</div>
<div class="t396__elem tn-elem tn-elem__2531280801601040299803" data-elem-id="1601040299803" data-elem-type="text" data-field-top-value="132" data-field-top-res-960-value="162" data-field-top-res-640-value="315" data-field-top-res-320-value="584" data-field-left-value="880" data-field-left-res-960-value="720" data-field-left-res-640-value="70" data-field-left-res-320-value="10" data-field-width-value="210" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 132px; left: 1000px; width: 210px;">
	<div class="tn-atom" field="tn_text_1601040299803" style="line-height: 1.7;">

<!--		<a href="https://rutube.ru/channel/23925572/" style="color: rgb(255, 255, 255);">Rutube </a><br>-->
        <a href="https://t.me/gdpquadrat" style="color: rgb(255, 255, 255);">Telegram</a><br>
        <a href="https://www.youtube.com/channel/UCQjLnM6zsJAjqbs4KVACT8g" style="color: rgb(255, 255, 255);">YouTube</a><br>
		<a href="https://dzen.ru/id/61374eaaecb47e2095416ec9" style="color: rgb(255, 255, 255);">Яндекс Дзен</a><br>
		<a href="https://vk.com/public195913879" style="color: rgb(255, 255, 255);">ВКонтакте</a><br>
        <a href="https://www.instagram.com/sezstupinoquadrat/" style="color: rgb(255, 255, 255);">Instagram</a><br>
        <a href="https://ru-ru.facebook.com/sezstupinoquadrat" style="color: rgb(255, 255, 255);">Facebook</a><br>
		<!--<a href="https://twitter.com/gdpquadrat" style="color: rgb(255, 255, 255);">Twitter</a>-->
		<div class="copy_site">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/templates/gdpquadrat/include/copyright_".SITE_ID.".php",
                        "EDIT_TEMPLATE" => "standard.php"
                    ),
                        false,
                        array(
                            "ACTIVE_COMPONENT" => "Y"
                        )
                    );?>
                </div>

	</div>
</div>

<style>
	.footer-link {
		color: #fff;
		text-decoration: unset;
	}
    .footer-link:hover {
        color: #0092fe;
    }
</style>
