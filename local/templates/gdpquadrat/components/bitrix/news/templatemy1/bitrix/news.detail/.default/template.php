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
$monthArr = array(
	1 => "Январь",
	2 => "Февраль",
	3 => "Март",
	4 => "Апрель",
	5 => "Май",
	6 => "Июнь",
	7 => "Июль",
	8 => "Август",
	9 => "Сентябрь",
	10 => "Октябрь",
	11 => "Ноябрь",
	12 => "Декабрь",
);
$monthArrEN = array(
	1 => "January",
	2 => "February",
	3 => "March",
	4 => "April",
	5 => "May",
	6 => "June",
	7 => "July",
	8 => "August",
	9 => "September",
	10 => "October",
	11 => "November",
	12 => "December",
);
$month = date('n', strtotime($arResult["ACTIVE_FROM"]));
$year = date('Y', strtotime($arResult["ACTIVE_FROM"]));
?>
<div class="news-detail">


<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="400px"
			height="auto"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
<?php if (LANGUAGE_ID == "en"): ?>
<div class="rg_date"><?=$monthArrEN[$month];?> <?=$year;?></div>
<?php else: ?>
<div class="rg_date"><?=$monthArr[$month];?> <?=$year;?></div>
<?php endif; ?>
<h3><?=$arResult["NAME"]?></h3>


		<p><?=$arResult["FIELDS"]["DETAIL_TEXT"];unset($arResult["FIELDS"]["DETAIL_TEXT"]);?></p>




















	<div style="clear:both"></div>




<!--Добавление файлов-->	




<?php /* ?>

<? if(count($arResult["DISPLAY_PROPERTIES"]["FILES"]["FILE_VALUE"]["SRC"]) == 1):?>
<br>

            <a href="<?echo $arResult["DISPLAY_PROPERTIES"]["FILES"]["FILE_VALUE"]["SRC"]?>" class="file" target="_blank" style="margin-top: 0" download>
			
			
			
			
               <img align="left" src="/upload/icons/file.png" width="24px" style="padding-right: 10px;"><strong> <?echo $arResult["DISPLAY_PROPERTIES"]["FILES"]["FILE_VALUE"]["ORIGINAL_NAME"] ?>
                     <span> —
                        <?= round((intval($arResult["DISPLAY_PROPERTIES"]["FILES"]["FILE_VALUE"]["FILE_SIZE"]) / 1024), 1); ?> Кб
                     </span>
                  </strong>
                  
            </a>

         <?else:?>
<br>
<?if($arResult["DISPLAY_PROPERTIES"]["FILES"]["FILE_VALUE"]["SRC"]):?>

      <?endif?>      
            <? foreach ($arResult["DISPLAY_PROPERTIES"]['FILES']['FILE_VALUE'] as $pid => $arProperty): ?>
               <a href="<? echo $arProperty['SRC']; ?>" class="file" title="Скачать <? echo $arProperty['FILE_NAME']; ?>" download> 
			   
			   
			   
			   
			   
                  <div style="min-height: 30px;"><img align="left" src="/upload/icons/file.png" width="24px" style="padding-right: 10px;"><strong> <? echo $arProperty['ORIGINAL_NAME']; ?>
                     <span> —
                        <?
                           $strKb = $arProperty['FILE_SIZE']/1024;
                           echo round($strKb) . ' Кб';
                        ?>
                     </span>
                  </strong>
                  </div>
               </a>
               
            <?endforeach;?>
            
         <?endif?>



<?php */ ?>



				<!--конец добавления файлов-->





</div>