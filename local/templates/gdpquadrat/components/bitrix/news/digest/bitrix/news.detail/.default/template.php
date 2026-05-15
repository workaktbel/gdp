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
	<div class="row">
		<div class="col-xl-12">
			<div class="news-detail_title">
				<h1><?= $arResult["NAME"];?></h1>
			</div>
		</div>
		<div class="col-xl-12">
			<div class="item-detail_info_date">
				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M3.09265 9.89957H20.9166" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.4421 13.8048H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12.0046 13.8048H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.55793 13.8048H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.4421 17.6916H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12.0046 17.6916H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.55793 17.6916H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.0438 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.96552 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 4.07422H7.77096C4.83427 4.07422 3 5.71015 3 8.71724V17.7669C3 20.8213 4.83427 22.495 7.77096 22.495H16.229C19.175 22.495 21 20.8496 21 17.8425V8.71724C21.0092 5.71015 19.1842 4.07422 16.2383 4.07422Z" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<?= date('d', strtotime($arResult["ACTIVE_FROM"])); ?>
				<?php if (LANGUAGE_ID == "en"): ?>
				<?=$monthArrEN[$month];?>&nbsp;<?=$year;?>
				<?php else: ?>
				<?=$monthArr[$month];?>&nbsp;<?=$year;?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="detail-text-wrap">
		<div class="item-img">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
		</div>
		<div class="detail-text">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
	</div>
	
</div>

<div class="clear"></div>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-shape="round" data-limit="10" data-copy="extraItem" data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>