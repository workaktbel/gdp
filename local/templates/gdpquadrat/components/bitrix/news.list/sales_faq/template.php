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
// prr($arResult["ITEMS"]);
?>

<?if(!empty($arResult["ITEMS"])):?>
	<?if(SITE_ID == "s1"):?>
		<h2 class="title">Частые вопросы</h2>
	<?else:?>
		<h2 class="title">FAQ</h2>
	<?endif;?>

	<div class="accor_block_inner">
		<?php foreach ($arResult["ITEMS"] as $item): ?>
			<?
			$name = $item["NAME"];
			$desc = $item["PREVIEW_TEXT"];
			if(SITE_ID != "s1") {
				if (!empty($item["PROPERTIES"]["NAME_EN"]["VALUE"])) $name = $item["PROPERTIES"]["NAME_EN"]["VALUE"];
				if (!empty($item["PROPERTIES"]["DESC_EN"]["VALUE"])) $desc = $item["PROPERTIES"]["DESC_EN"]["VALUE"]["TEXT"];
			}
			?>
			<div class="accor_item">
				<div class="accor_name"><?= $name; ?></div>
				<div class="accor_body">
					<?= $desc; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?endif;?>