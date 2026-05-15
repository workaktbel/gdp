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

<div class="pointer_block_wr">
    <div class="block_inner">
        <div class="left_block">
            <div class="title"><?=$arResult["NAME"]?></div>
            <div class="text"><?echo $arResult["PREVIEW_TEXT"];?></div>
            <div class="inner">
                <div class="item">
                    <div class="name"><?=$arResult['PROPERTIES']['DOP_TEXT']['DESCRIPTION'][0]?></div>
                    <div class="body"><?=$arResult['PROPERTIES']['DOP_TEXT']['~VALUE'][0]["TEXT"]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult['PROPERTIES']['DOP_TEXT']['DESCRIPTION'][1]?></div>
                    <div class="body"><?=$arResult['PROPERTIES']['DOP_TEXT']['~VALUE'][1]["TEXT"]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult['PROPERTIES']['DOP_TEXT']['DESCRIPTION'][2]?></div>
                    <div class="body"><?=$arResult['PROPERTIES']['DOP_TEXT']['~VALUE'][2]["TEXT"]?></div>
                </div>
                <div class="item">
                    <div class="name"><?=$arResult['PROPERTIES']['DOP_TEXT']['DESCRIPTION'][3]?></div>
                    <div class="body"><?=$arResult['PROPERTIES']['DOP_TEXT']['~VALUE'][3]["TEXT"]?></div>
                </div>
            </div>
            <a href="<?=CFile::GetPath($arResult['PROPERTIES']['DOP_FILE']['VALUE'])?>" class="btn_button blue prezentatsiya" target="_blank"><?=$arResult['PROPERTIES']['DOP_FILE']['NAME']?></a>
        </div>
        <div class="right_block" style="background-image:url(<?=CFile::GetPath($arResult['PROPERTIES']['DOP_SVG']['VALUE'])?>);"></div>
    </div>
</div>
