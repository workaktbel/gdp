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
<div id="rec234085611" class="r t-rec t-rec_pt_0 t-rec_pb_150 r_anim r_showed" style="padding-top:0px;padding-bottom:150px; " data-record-type="527">
   <!-- t527 -->
   <div class="t527">
      <div class="t-section__container t-container">
         <div class="t-col t-col_12">
            <div class="t-section__topwrapper t-align_center">
               <div class="t-section__title t-title t-title_xs" field="btitle"><span style="color: rgb(9, 0, 128);"><?=$arResult['NAME']?></span></div>
               <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr"><span style="font-family: ProximaNova; color: rgb(9, 0, 128);"><?=$arResult['DESCRIPTION']?></span></div>
            </div>
         </div>
      </div>
      <div class="t527__container t-container">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
         <div class="t527__col t-col t-col_4 t-align_left t527__col-mobstyle">
            <div class="t527__itemwrapper t527__itemwrapper_3">
               <div class="t527__bgimg t-bgimg loaded" bgimgfield="li_img__1478035709182" data-original="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>); padding-bottom: 94.4444%;" data-image-width="360" data-image-height="340" src=""></div>
               <div class="t527__wrapperleft">
                  <div class="t527__persname t-name t-name_lg t527__bottommargin_sm" style="line-height:1.3;font-family:'ProximaNova';" field="li_persname__1478035709182"><span style="color: rgb(9, 0, 128);"><?=$arItem["NAME"]?></span></div>
                  <div class="t527__persdescr t-descr t-descr_xxs t527__bottommargin_lg" style="" field="li_persdescr__1478035709182"><?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?></div>
                  <div class="t527__line t527__bottommargin_lg" style="background-color: #090080; "></div>
                  <div class="t527__perstext t-text t-text_xs" style="font-size:16px;line-height:1.3;font-family:'ProximaNova';" field="li_text__1478035709182"><?echo $arItem["PREVIEW_TEXT"];?></div>
               </div>
            </div>
         </div>
		<?endforeach;?>

      </div>
   </div>
   <script type="text/javascript"> $(document).ready(function() { t527_setHeight('234085611'); });</script>
</div>