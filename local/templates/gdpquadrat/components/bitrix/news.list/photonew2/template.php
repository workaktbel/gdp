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
<div id="rec244545534" class="r t-rec t-rec_pt_90 t-rec_pb_90" style="padding-top:5px;padding-bottom:90px; " data-animationappear="off" data-record-type="670">
   <div class="t670">
      <div class="t-slds" style="">
         <div class="t-container t-slds__main">
            <div class="t-slds__container t-width t-width_9 t-margin_auto">
               <div class="t-slds__items-wrapper t-slds_animated-none t-slds__witharrows" data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" data-slider-arrows-nearpic="yes" data-slider-initialized="true" data-slider-totalslides="6" data-slider-pos="4" data-slider-curr-pos="4" data-slider-cycle="" data-slider-animated="" style="width: 6880px; height: 550px; transform: translateX(-3440px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
				<?foreach($arResult['ITEMS'] as $key => $item):?>
				<div class="t-slds__item t-slds__item-loaded" data-slide-index="<?=$key?>">
				 <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject">
					<div class="t-slds__wrapper t-align_center">
					   <meta itemprop="image" content="<?=$item['DETAIL_PICTURE']['SRC']?>">
					   <div class="t670__imgwrapper" bgimgfield="gi_img__5">
						  <div class="t-slds__bgimg t-bgimg loaded" data-original="<?=$item['DETAIL_PICTURE']['SRC']?>" style="background-image: url(<?=$item['DETAIL_PICTURE']['SRC']?>);" src="<?=$item['DETAIL_PICTURE']['SRC']?>"></div>
						  <div class="t670__separator" data-slider-image-width="860" data-slider-image-height="550" style="padding-bottom: 63.9535%;"></div>
					   </div>
					</div>
				 </div>
				</div>
				<?endforeach;?>
				<?foreach($arResult['ITEMS'] as $key => $item):?>
				   <?if($key == count($arResult['ITEMS'])-1):?>
						<div class="t-slds__item <?if($key == 0){echo " t-slds__item_active";}?>" data-slide-index="<?=count($arResult['ITEMS'])?>">
						 <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject">
							<div class="t-slds__wrapper t-align_center">
							   <meta itemprop="image" content="<?=$item['DETAIL_PICTURE']['SRC']?>">
							   <div class="t670__imgwrapper" bgimgfield="gi_img__5">
								  <div class="t-slds__bgimg t-bgimg loaded" data-original="<?=$item['DETAIL_PICTURE']['SRC']?>" style="background-image: url(<?=$item['DETAIL_PICTURE']['SRC']?>);" src="<?=$item['DETAIL_PICTURE']['SRC']?>"></div>
								  <div class="t670__separator" data-slider-image-width="860" data-slider-image-height="550" style="padding-bottom: 63.9535%;"></div>
							   </div>
							</div>
						 </div>
						</div>
					<?endif;?>
				<?endforeach;?>
               </div>
            </div>
            <div class="t-slds__arrow_container t-slds__arrow_container-outside" style="max-width: 1060px;">
               <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 550px;">
                  <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: unset;">
                     <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 9px;">
                         <svg style="transform: rotate(180deg);"width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>Left</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"/>
						</svg>
                     </div>
                  </div>
               </div>
               <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 550px;">
                  <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: unset;">
                     <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 9px;">
                        <svg style="transform: rotate(180deg);"width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>Right</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"/>
						</svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="t-slds__bullet_wrapper">
				<?foreach($arResult['ITEMS'] as $key => $item):?>
					<div class="t-slds__bullet<?if($key == 0){echo " t-slds__bullet_active";}?>" data-slide-bullet-for="<?=$key?>">
						<div class="t-slds__bullet_body" style="background-color: #c7c7c7;"></div>
				   </div>
				<?endforeach;?>
            </div>
            <div class="t-slds__caption__container"> </div>
         </div>
      </div>
   </div>
   <script type="text/javascript"> $(document).ready(function() { t670_init('244545534'); t_sldsInit('244545534'); }); $('.t670').bind('displayChanged',function(){ t_slds_updateSlider('244545534'); t_slds_positionArrows('244545534'); }); </script>
   <style type="text/css"> #rec244545534 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec244545534 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style>
</div>