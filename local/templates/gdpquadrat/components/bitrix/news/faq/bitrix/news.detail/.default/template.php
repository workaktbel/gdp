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
// prr($arResult);
?>
<div class="row justify-content-between align-items-center">
	<div class="col-auto">
		<div class="top_title_black"><?= $arResult["NAME"]; ?></div>
	</div>
</div>
<div class="row faq_block_wrap">
	<div class="col-xs-12">
		<div class="faq_img"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>"></div>
		<div class="faq_content"><?= $arResult["DETAIL_TEXT"]; ?></div>
	</div>
</div>