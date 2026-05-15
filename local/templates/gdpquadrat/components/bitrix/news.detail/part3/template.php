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
<div class="soc_block_inf part part3 row g-5">
	<div class="left_block col-12 col-lg-6 order-2 order-lg-1 wow slideInLeft" data-wow-delay=".4s">
		<h2 class="part_title"><?=$arResult["NAME"]?></h2>
		<div class="part_description"><?=$arResult["PREVIEW_TEXT"]?></div>
		<div class="row gy-4 gy-lg-5">
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][0]?></div>
				<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][0]?></div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][1]?></div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][2]?></div>
				<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][2]?></div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][3]?></div>
				<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][3]?></div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][4]?></div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][5]?></div>
			</div>
		</div>
	</div>
	<div class="right_block col-12 col-lg-6 mt-lg-0 order-1 order-lg-2 wow slideInRight" data-wow-delay=".4s">
		<?php if (count($arResult['PROPERTIES']['SVG']['VALUE']) == 1): ?>
			<img src="<?=CFile::GetPath($arResult['PROPERTIES']['SVG']['VALUE'][0])?>">
		<?php elseif (count($arResult['PROPERTIES']['SVG']['VALUE']) > 1): ?>
			<div class="img-carousel">
				<?php foreach ($arResult['PROPERTIES']['SVG']['VALUE'] as $v): ?>
					<img src="<?=CFile::GetPath($v)?>">
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</div>