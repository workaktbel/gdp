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

<div class="blue_two_block">
    <div class="block_inner">
        <div class="top_block">
            <div class="title"><?=$arResult["NAME"]?></div>
            <div class="right">
                <div class="subtitle"><?echo $arResult["PREVIEW_TEXT"];?></div>
                <div class="body"><?echo $arResult["DETAIL_TEXT"];?></div>
            </div>
        </div>
        <div class="bottom_block">
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][0]['TEXT']?></span></div>
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][2]['TEXT']?></span></div>
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][4]['TEXT']?></span></div>
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][1]['TEXT']?></span></div>
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][3]['TEXT']?></span></div>
            <div class="item"><span><?=$arResult['PROPERTIES']['DOP_HTML']['~VALUE'][5]['TEXT']?></span></div>
        </div>
    </div>
</div>
