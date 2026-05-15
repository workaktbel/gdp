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

<div class="about_block_wr">
    <div class="block_inner">
        <div class="title"><?=$arResult["NAME"]?></div>
        <div class="right">
            <div class="subtitle"><?=$arResult["PROPERTIES"]['ITEMS_TITLE']['VALUE']?></div>
            <div class="inner">
                <div class="detal_text"><?echo $arResult["PREVIEW_TEXT"];?></div>
                <div class="detal_text"><?echo $arResult["DETAIL_TEXT"];?></div>
                <div class="item">
                    <div class="name"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['DESCRIPTION'][0]?></div>
                    <div class="body"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['VALUE'][0]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['DESCRIPTION'][1]?></div>
                    <div class="body"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['VALUE'][1]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['DESCRIPTION'][2]?></div>
                    <div class="body"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['VALUE'][2]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['DESCRIPTION'][3]?></div>
                    <div class="body"><?=$arResult["PROPERTIES"]['ITEMS_LIST']['VALUE'][3]?></div>
                </div>
            </div>
        </div>
    </div>
</div>
