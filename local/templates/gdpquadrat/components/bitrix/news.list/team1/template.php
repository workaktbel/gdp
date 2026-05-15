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
      <div class="t527__container t-container">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		  <div class="t527__col t-col t-col_4 t-align_left t527__col-mobstyle" style="width:258px;">
            <div class="t527__itemwrapper t527__itemwrapper_3">
               <div class="t527__bgimg t-bgimg loaded" bgimgfield="li_img__1478035709182" data-original="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>); padding-bottom: 94.4444%;" data-image-width="360" data-image-height="340" src=""></div>
               <div class="t527__wrapperleft">
				   <div class="t527__persname t-name t-name_lg t527__bottommargin_sm" style="line-height:1.3;font-family:'ProximaNova';" field="li_persname__1478035709182"><span style="color: rgb(9, 0, 128);font-size:18px;"><?=$arItem["NAME"]?></span></div>
				   <div class="t527__persdescr t-descr t-descr_xxs t527__bottommargin_lg" style="font-weight:400;" field="li_persdescr__1478035709182"><?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?></div>
                  <div class="t527__line t527__bottommargin_lg" style="background-color: #090080; "></div>
				   <div class="t527__perstext t-text t-text_xs" style="margin-bottom:10px;font-size:16px;line-height:1.3;font-family:'ProximaNova';display:flex;" field="li_text__1478035709182">
								<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.5058 1.66797H1.49413C1.26413 1.66797 1.04881 1.71454 0.854004 1.79129L8.46678 8.06064L10.1731 6.71021C10.1731 6.71021 10.1732 6.71007 10.1732 6.71002C10.1733 6.70996 10.1734 6.70991 10.1734 6.70991L16.1462 1.7914C15.9514 1.71459 15.7359 1.66797 15.5058 1.66797Z" fill="#090080"/>
								<path d="M16.8502 2.37146L11.2295 7.00005L16.85 11.6287C16.9432 11.4683 16.9998 11.291 16.9998 11.1016V2.89843C16.9998 2.70913 16.9434 2.53183 16.8502 2.37146Z" fill="#090080"/>
								<path d="M0.149746 2.37128C0.0565449 2.5317 0 2.70903 0 2.89844V11.1016C0 11.2909 0.0564785 11.4682 0.149613 11.6286L5.77034 7L0.149746 2.37128Z" fill="#090080"/>
								<path d="M10.5252 7.58007L8.81868 8.93066C8.72139 9.01078 8.59396 9.05084 8.46656 9.05084C8.33916 9.05084 8.21169 9.01078 8.11444 8.93066L6.47434 7.58002L0.853516 12.2086C1.04835 12.2854 1.26381 12.3321 1.49387 12.3321H15.5056C15.7356 12.3321 15.9509 12.2855 16.1457 12.2087L10.5252 7.58007Z" fill="#090080"/>
								</svg>
							<a style="color:#000000;font-size:18px;margin-left:10px;margin-top:-5px;font-weight:normal;text-decoration:none;" href="mailto:<?=$arItem["PROPERTIES"]["Email"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["Email"]["VALUE"]?></a>
						</div>
  <div class="t527__perstext t-text t-text_xs" style="font-size:16px;line-height:1.3;font-family:'ProximaNova';display:flex;" field="li_text__1478035709182">
<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)"><path d="M8.5 0C3.81321 0 0 3.81325 0 8.5C0 13.1868 3.81321 17 8.5 17C10.7703 17 12.9328 16.0845 14.5382 14.4788C14.8051 14.2119 14.775 13.7642 14.5044 13.4985L13.1629 12.1768C13.4521 11.7806 13.4902 11.2986 13.2515 10.8407C12.9259 10.2155 12.4421 9.7151 11.8148 9.35415C11.5728 9.21436 11.3441 9.14606 11.1163 9.1463C11.0276 9.1463 10.9382 9.15715 10.8511 9.17772C10.5616 9.24827 10.2833 9.38388 10.0004 9.59197C9.91178 9.65841 9.80231 9.69152 9.67642 9.69152C9.5228 9.69152 9.35664 9.6387 9.2427 9.55419C8.41635 8.9382 7.71564 8.23691 7.09966 7.41111C6.97902 7.24861 6.88265 6.89516 7.06133 6.65261C7.27028 6.37002 7.40534 6.09221 7.47558 5.80212C7.55117 5.48957 7.49338 5.17446 7.2997 4.83968C6.93851 4.21115 6.43808 3.72801 5.81291 3.40204C5.61038 3.29651 5.40308 3.24251 5.19637 3.24251C4.85184 3.24251 4.52899 3.39288 4.26334 3.67574C4.01916 3.93579 3.80322 4.21118 3.55431 4.5443C3.3262 4.84939 3.34511 5.20173 3.36122 5.51231L3.36177 5.51874C3.38987 5.91332 3.53713 6.37953 3.81214 6.94411C4.277 7.90047 4.93719 8.80851 5.8305 9.71987C6.01412 9.90739 6.74573 10.6393 6.93357 10.8229C7.84544 11.7164 8.75344 12.3766 9.70929 12.8415C10.2741 13.1163 10.7404 13.2636 11.1347 13.2919L11.1413 13.2922C11.2225 13.296 11.3091 13.3004 11.3936 13.3004C11.5951 13.3004 11.8532 13.276 12.086 13.1132L12.9687 13.9829C11.7092 15.0132 10.1489 15.5775 8.5001 15.5775C4.59767 15.5775 1.4227 12.4025 1.4227 8.50007C1.4227 4.59764 4.59771 1.42264 8.5001 1.42264C12.4025 1.42264 15.5775 4.59764 15.5775 8.50007C15.5775 8.89292 15.896 9.21135 16.2888 9.21135C16.6817 9.21135 17.0001 8.89292 17.0001 8.50007C17 3.81325 13.1868 0 8.5 0Z" fill="#090080"/></g><defs><clipPath id="clip0"><rect width="17" height="17" fill="white"/></clipPath></defs></svg>
					   <a style="color:#000000;font-size:18px;font-weight:normal;margin-left:10px;margin-top:-3px;" href="tel:<?=$arItem["PROPERTIES"]["Nomer"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["Nomer"]["VALUE"]?></a>
</div>
               </div>
            </div>
         </div>
		<?endforeach;?>

      </div>
   </div>
   <script type="text/javascript"> $(document).ready(function() { t527_setHeight('234085611'); });</script>
</div>