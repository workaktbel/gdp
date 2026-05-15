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
$i = 1;
?>
<div class="news-list-top">
	<div class="col"><h1 class="main_info_title"><?= $arParams["PAGER_TITLE"]; ?></h1></div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","digest",
	Array(
		"SEF_FOLDER" => $arParams['SEF_FOLDER'],
		"VIEW_MODE" => "TEXT",
		"SHOW_PARENT_NAME" => "Y",
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"PARENT_SECTION" => $arResult["VARIABLES"]["SECTION_ID"],
		"PARENT_SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => "",
		"SECTION_USER_FIELDS" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	)
);?>

<div id="news-list" class="row news-list news-list-digest g-4 g-sm-5">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
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
	$month = date('n', strtotime($arItem["ACTIVE_FROM"]));
	$year = date('Y', strtotime($arItem["ACTIVE_FROM"]));
	
	$class = "col-xl-6";
	if ($i == 1 || $i == 4 || $i == 5) $class = "col-xl-12";
	
	if (!empty($arItem["PREVIEW_TEXT"])) {
		$text = $arItem["PREVIEW_TEXT"];
	} else {
		$text = $arItem["DETAIL_TEXT"];
	}
	?>
	<div class="<?= $class; ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="news-item">
			<div class="item-img">
				<?php
				$img = $arItem["PREVIEW_PICTURE"];
				if(!$arItem["PREVIEW_PICTURE"]) {
					$img = $arItem["DETAIL_PICTURE"];
				}
				?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$img["SRC"]?>"></a>
			</div>
			<div class="item-main_right">
				<div class="item-top_info">
					<div class="item-main_info">
						<div class="item-main_info_title">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?= $arItem["NAME"];?></a>
						</div>
					</div>
					<div class="item-preview_info">
						<?echo $text;?>
					</div>
				</div>
				
				<div class="item-detail_info">
					<div class="item-detail_info_url">
						<a href="<?= $arItem["DETAIL_PAGE_URL"];?>">Подробнее</a>
					</div>
					
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
						<?= date('d', strtotime($arItem["ACTIVE_FROM"])); ?>
						<?php if (LANGUAGE_ID == "en"): ?>
						<?=$monthArrEN[$month];?>&nbsp;<?=$year;?>
						<?php else: ?>
						<?=$monthArr[$month];?>&nbsp;<?=$year;?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	
	<?php $i++; ?>
	</div>
	
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

