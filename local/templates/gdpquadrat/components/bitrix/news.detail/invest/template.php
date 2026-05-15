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

<div class="bg_block_blue" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);">
    <div class="block_inner">
        <div class="title"><?=$arResult["NAME"]?></div>
        <div class="inner">
            <div class="item">
                <div class="name"><?=$arResult['DISPLAY_PROPERTIES']['DOP_HTML']['~VALUE'][0]['TEXT']?></div>
                <div class="text"><?=$arResult['DISPLAY_PROPERTIES']['DOP_HTML']['~VALUE'][1]['TEXT']?></div>
            </div>
            <div class="item"><?echo $arResult["PREVIEW_TEXT"];?></div>
        </div>
        <?if ($arResult['DISPLAY_PROPERTIES']['DOP_FILE']['NAME']) {?>
            <a href="<?=$arResult['DISPLAY_PROPERTIES']['DOP_FILE']['FILE_VALUE']['SRC']?>" target="_blank" class="btn_button blue prezentatsiya"><?=$arResult['DISPLAY_PROPERTIES']['DOP_FILE']['NAME']?></a>
        <?}?>
    </div>
</div>
