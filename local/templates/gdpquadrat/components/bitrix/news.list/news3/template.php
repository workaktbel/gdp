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
global $USER;
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
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


<div id="rec234085611" class="r t-rec t-rec_pt_0 t-rec_pb_150 r_anim r_showed" style="padding-top:0px;padding-bottom:0px; " data-record-type="527">
   <!-- t527 -->
   <div class="container">
      
      <div class="row">

		<?foreach($arResult['ITEMS'] as $key => $item):?>
		<?$key += 1;?>
		<?
			$month = date('n', strtotime($item["ACTIVE_FROM"]));
			$year = date('Y', strtotime($item["ACTIVE_FROM"]));
		?>


                    
                        <div class="col-sm"><a href="<?echo $item["DETAIL_PAGE_URL"]?>">
							<center><img style="max-width: 100%;max-height: 200px;" src='<?=$item["DETAIL_PICTURE"]["SRC"]?>'></img></center></a>
							
								
								<div class="slide-title" style="text-align: center;">
									<?php if (LANGUAGE_ID == "en"): ?>
									<div class="rg_date"><?=$monthArrEN[$month];?> <?=$year;?></div>
									<?php else: ?>
									<div class="rg_date"><?=$monthArr[$month];?> <?=$year;?></div>
									<?php endif; ?>
									<a href="<?echo $item["DETAIL_PAGE_URL"]?>" style="text-decoration: none;"><?=$item['NAME']?></a>
								</div>
								
                                
								
								

                            </div>

                        
                    
					<?if($key == 3):?>
			<?break;?>
			<?endif;?>

				<?endforeach;?>

      </div>
   </div>
   
</div>
