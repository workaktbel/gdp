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
<div class="pro_ins_wr part part4 row g-5">
	<div class="left_block col-12 col-lg-6 mt-lg-0">
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
	<div class="right_block col-12 col-lg-6">
		<h2 class="part_title"><?=$arResult["NAME"]?></h2>
		<div class="part_description"><?=$arResult["PREVIEW_TEXT"]?></div>
	</div>
	
	<div class="col-12">
		<div class="row gy-4">
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="34" height="46" viewBox="0 0 34 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M33.8057 20.0363C33.8057 20.0363 29.2841 23.0417 26.7907 22.8509C24.2973 22.66 20.8256 20.1794 21.2074 17.162C21.6225 13.3927 21.4778 9.58278 20.7779 5.85583C20.1575 3.23204 17.1988 0 17.1988 0C17.1988 0 13.4527 6.9769 10.6491 9.91078C7.84554 12.8447 -0.278946 21.8371 0.00737958 28.1939C0.104249 32.7966 1.97242 37.1849 5.22328 40.4458C8.47413 43.7067 12.8574 45.5892 17.4613 45.7017C26.8981 45.7017 32.1474 39.5835 33.2927 35.3854C34.438 31.1874 33.8057 20.0363 33.8057 20.0363ZM23.7366 39.667C23.2474 41.4559 20.8137 43.4238 16.9721 43.4238C15.0914 43.4589 13.2691 42.7707 11.8814 41.5011C10.4938 40.2316 9.64695 38.4778 9.51576 36.6019C9.38453 33.8708 12.8562 30.0544 14.0493 28.8021C15.1133 27.4877 16.0481 26.0738 16.8409 24.5802C17.5225 25.2967 18.0503 26.1449 18.3918 27.0728C18.6877 28.6654 18.748 30.2928 18.5708 31.9029C18.4276 33.1791 19.895 34.2882 20.9568 34.2882C22.0336 34.1267 23.0585 33.7186 23.9513 33.0956C24.1062 35.2876 24.0342 37.4897 23.7366 39.667Z" fill="#1400C4"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][0]?></div>
						<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][0]?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="32" height="48" viewBox="0 0 32 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.7598 0C15.7598 0 0 24.5683 0 32.6782C0 40.7881 7.05074 47.3476 15.7598 47.3476C24.4689 47.3476 31.5315 40.7762 31.5315 32.6782C31.5315 24.5802 15.7598 0 15.7598 0ZM26.6401 38.9276C23.5622 43.1853 19.1122 44.032 18.5753 41.5156C18.0385 38.9991 20.4603 39.8817 23.5741 36.1487C25.6261 33.68 24.0394 29.6369 26.9742 29.5892C29.5631 29.5534 29.0262 35.5882 26.6401 38.9276Z" fill="#1400C4"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][1]?></div>
						<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][1]?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="32" height="48" viewBox="0 0 32 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.7598 0C15.7598 0 0 24.5683 0 32.6782C0 40.7881 7.05074 47.3476 15.7598 47.3476C24.4689 47.3476 31.5315 40.7762 31.5315 32.6782C31.5315 24.5802 15.7598 0 15.7598 0ZM26.6401 38.9276C23.5622 43.1853 19.1122 44.032 18.5753 41.5156C18.0385 38.9991 20.4603 39.8817 23.5741 36.1487C25.6261 33.68 24.0394 29.6369 26.9742 29.5892C29.5631 29.5534 29.0262 35.5882 26.6401 38.9276Z" fill="#1400C4"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][2]?></div>
						<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][2]?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="29" height="45" viewBox="0 0 29 45" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.06697 0H25.9602L14.1254 20.1197H28.2507L6.96724 44.0678L14.5071 25.3673L0 25.1765L9.06697 0Z" fill="#1400C4"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][3]?></div>
						<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][3]?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="33" height="46" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.75 0V44.6731" stroke="#1400C4" stroke-width="3" stroke-dasharray="10 10"/>
							<path d="M3 0V46M30.5 0V46" stroke="#1400C4" stroke-width="5"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][4]?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 position-relative">
				<div class="part4_item_wrap">
					<div class="part_list_svg">
						<svg width="39" height="55" viewBox="0 0 39 55" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 33.7733H38.5965M0 20.747H38.5965M0 46.7996H38.5965M0 8.20312H38.5965" stroke="#1400C4" stroke-width="8"/>
							<path d="M7.05664 0V55M31.9576 0V55" stroke="#1400C4" stroke-width="5"/>
						</svg>
					</div>
					<div class="part4_item_info">
						<div class="part_list_title"><?=$arResult['PROPERTIES']['LIST']['DESCRIPTION'][5]?></div>
						<?if($arResult['PROPERTIES']['LIST']['VALUE'][5] != "пусто"):?>
						<div class="part_list_desc"><?=$arResult['PROPERTIES']['LIST']['VALUE'][5]?></div>
						<?endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        new WOW().init();
    });
</script>