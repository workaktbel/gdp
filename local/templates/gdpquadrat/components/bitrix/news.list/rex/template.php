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
$lang = Bitrix\Main\Application::getInstance()->getContext()->getLanguage();

function truncate($text, $length, $suffix = '&hellip;', $isHTML = true) {
    $i = 0;
    $simpleTags=array('br'=>true,'hr'=>true,'input'=>true,'image'=>true,'link'=>true,'meta'=>true);
    $tags = array();
    if($isHTML){
        preg_match_all('/<[^>]+>([^<]*)/', $text, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        foreach($m as $o){
            if($o[0][1] - $i >= $length)
                break;
            $t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
            if($t[0] != '/' && (!isset($simpleTags[$t])))
                $tags[] = $t;
            elseif(end($tags) == substr($t, 1))
                array_pop($tags);
            $i += $o[1][1] - $o[0][1];
        }
    }
    $output = substr($text, 0, $length = min(strlen($text),  $length + $i));
    $output2 = (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '');
    $pos = (int)end(end(preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE)));
    $output.=$output2;
    $one = substr($output, 0, $pos);
    $two = substr($output, $pos, (strlen($output) - $pos));
    preg_match_all('/<(.*?)>/s', $two, $tags);
    if (strlen($text) > $length) { $one .= $suffix; }
    $output = $one . implode($tags[0]);
    $output = str_replace('</!-->','',$output); 
    return $output;
}
?>
<div id="rec238620910" class="r t-rec t-rec_pt_75 t-rec_pb_30" style="padding-top:75px;padding-bottom:30px;background-color:#ffffff; " data-record-type="539" data-bg-color="#ffffff" data-animationappear="off">
   <!-- t539 -->
   <div class="t539" style="visibility: visible;">
      <div class="t-section__container t-container">
         <div class="t-col t-col_12">
            <div class="t-section__topwrapper t-align_center">
               <div class="t-section__title t-title t-title_xs" field="btitle">
				   <div style="color:#090080;" data-customstyle="yes"><?=$arResult['NAME']?></div>
               </div>
            </div>
         </div>
      </div>
      <div class="t539__container t-container">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$key += 1;
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="t539__col t-col t-col_4 t539__col-mobstyle t539__col_odd">
            <div class="t539__itemwrapper t539__itemwrapper_3">
			    <div class="t539__bgimg t-bgimg loaded" bgimgfield="li_img__1478185125761" data-original="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>); padding-bottom: 100%;" data-image-width="360" data-image-height="360" src=""></div>
				<div class="t539__textwrapper t539__textwr-padding t-align_left">
					<div class="t539__persname t-name t-name_lg t539__bottommargin_sm" style="color:#0a007f;" field="li_persname__1478185125761"><?=$arItem["NAME"]?></div>
					<div class="t539__persdescr t-descr t-descr_xxs " style="" field="li_persdescr__1478185125761">
						<?php if ($lang != "en"): ?>
							<?=truncate($arItem["PREVIEW_TEXT"], 120)?>
						<?php else: ?>
							<?= $arItem["PREVIEW_TEXT"]; ?>
						<?php endif; ?>
					</div>
					<div class="t539__perstext t-text t-text_xs" style="" field="li_text__1605739387287"><?=$arItem["PREVIEW_PICTURE"]["DESCRIPTION"]?> 
						<?php if ($lang != "en"): ?>
							<a href="<?= $arItem["DETAIL_PAGE_URL"];?>" rel="noindex nofollow">Подробнее</a>
						<?php endif; ?>
					</div>
			    </div>
            </div>
         </div>
			<?if($key%3 == 0):?>
			<div class="t539__separator t-clear" style=""></div>
			<?endif;?>
		 <?endforeach;?>
      </div>
   </div>
   <script type="text/javascript"> $(document).ready(function() { t539_equalHeight('238620910','3'); }); $(window).resize(function(){ var t539_doResize = $('#rec238620910').data('resize-timeout'); if (t539_doResize) {clearTimeout(t539_doResize)}; t539_doResize = setTimeout(function() { t539_equalHeight('238620910','3'); }, 500); $('#rec238620910').data('resize-timeout', t539_doResize); }); $('.t539').bind('displayChanged',function(){ t539_equalHeight('238620910','3'); });</script><script type="text/javascript"> $(document).ready(function() { t539_setHeight('238620910'); });</script>
</div>
