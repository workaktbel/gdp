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
<div id="rec237630705" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:75px;padding-bottom:75px;background-color:#ffffff; " data-record-type="491" data-bg-color="#ffffff" data-animationappear="off">
   <!-- t491 -->
   <div class="t491">
      <div class="t-section__container t-container">
         <div class="t-col t-col_12">
            <div class="t-section__topwrapper t-align_center">
               <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">
                  <div style="color: rgb(10, 0, 127);" data-customstyle="yes"><?=$arResult['DESCRIPTION']?></div>
               </div>
            </div>
         </div>
      </div>
      <div class="t-container">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?$key += 1;?>
		<div class="t491__col t-col t-col_4 t-item">
            <div class="t491__content">
               <div class="t491__wrapper">
                  <div class="t491__title t-name t-name_sm" style="color:#0a007f;font-size:20px;font-family:'ProximaNova';" field="li_title__1476976310929"><?=$arItem["NAME"]?></div>
               </div>
               <div class="t491__descr t-descr t-descr_xs" style="font-size:14px;" field="li_descr__1476976310929"><?=$arItem['PREVIEW_TEXT']?></div>
            </div>
         </div>
			<?if($key%3 == 0):?>
				<div class="t-clear t491__separator" style=""></div>
			<?endif;?>
		<?endforeach;?>
      </div>
   </div>
</div>