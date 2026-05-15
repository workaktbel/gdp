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
<div class="row justify-content-between align-items-center">
	<div class="col-auto">
	<?if(SITE_ID == "s1"):?>
		<h1 class="top_title_black">Частые вопросы</h1>
	<?else:?>
		<h1 class="top_title_black">FAQ</h1>
	<?endif;?>
	</div>
</div>
<div class="row faq_block_wrap g-4">
	<?php foreach ($arResult["ITEMS"] as $item): ?>
		<div class="col-md-6">
			<a href="<?= $item["DETAIL_PAGE_URL"]; ?>"><div class="faq_block"><?= $item["NAME"]; ?></div></a>
		</div>
	<?php endforeach; ?>
</div>