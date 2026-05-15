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

if ($arResult["PROPERTIES"]["RUTUBE"]["VALUE"] != "") {
	$video = "https://rutube.ru" . $arResult["PROPERTIES"]["RUTUBE"]["VALUE"];
} else {
	$video = "//www.youtube.com" . $arResult["PROPERTIES"]["YOUTUBE"]["VALUE"];
}
?>

<div class="container-xxl video-item">
	<div class="row">
		<div class="col">
			<span class="main_info_title">
			<?if(SITE_DIR == '/en/'):?>
				SPECIAL TERRITORY
			<?else:?>
				Особая территория
			<?endif?>
			</span>
		</div>
	</div>
	<div class="row detail_video_block">
		<div class="col-lg-6 col-12 detail_video_item">
			<div class="h_iframe"><iframe src="<?=$video?>?rel=0" width="100%" allowfullscreen frameborder="0" name="slider"></iframe></div>
		</div>
		<div class="col-lg-6 col-12">
			<h1 class="video_title"><?=$arResult["NAME"]?></h1>
			<div class="video_gost"><?=$arResult["PROPERTIES"]["GOST_TEMA"]["VALUE"][0]?></div>
			<?if (!empty($arResult["PROPERTIES"]["DETAIL"]["~VALUE"]['TEXT'])):?>
				<div class="video_detail"><?=$arResult["PROPERTIES"]["DETAIL"]["~VALUE"]['TEXT']?></div>
			<?endif;?>
		</div>
	</div>
</div>
