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
<div id="rec238804769" class="r t-rec t-rec_pt_75 t-rec_pb_90" style="padding-top:75px;padding-bottom:90px; " data-animationappear="off" data-record-type="585">
   <!-- T585-->
   <div class="t585">
      <div class="t-container">

	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

         <div class="t-col t-col_8 t-prefix_2">
            <div class="t585__accordion" data-accordion="false">
               <div class="t585__wrapper">
                  <div class="t585__header " style=" border-top: 1px solid #eee;">
                     <div class="t585__title t-name t-name_xl" field="li_title__1480611044356" style="">
                        <div style="color: rgb(10, 0, 127);" data-customstyle="yes"><?echo $arItem["NAME"]?></div>
                     </div>
                     <div class="t585__icon">
                        <div class="t585__lines">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                 <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <div class="t585__circle" style="background-color: transparent;"></div>
                     </div>
                     <div class="t585__icon t585__icon-hover">
                        <div class="t585__lines">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                 <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <div class="t585__circle" style="background-color: #eee;"></div>
                     </div>
                  </div>
                  <div class="t585__content">
                     <div class="t585__textwrapper">
                        <div class="t585__text t-descr t-descr_xs" field="li_descr__1480611044356" style="">
							<?echo $arItem["DETAIL_TEXT"]?>
						</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		<?endforeach;?>

      </div>

   </div>
   <script type="text/javascript"> $(document).ready(function(){ t585_init('238804769'); });</script>
</div>