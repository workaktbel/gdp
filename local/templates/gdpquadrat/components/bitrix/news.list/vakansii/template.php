<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
//prr($arResult);
$col = "col-12";
if (count($arResult["ITEMS"]) > 0) {
	$col = "col-lg-5";
}
?>
<div class="row">
	<div class="col-auto">
	<?if(SITE_ID == "s1"):?>
		<h1 class="top_title_black">Вакансии ОЭЗ</h1>
	<?else:?>
		<h1 class="top_title_black">Vacancies</h1>
	<?endif;?>
	</div>
</div>
<div class="row content_block">
	<div class="<?= $col; ?>">
		<?= $arResult["DESCRIPTION"]; ?>
	</div>
	<div class="col-lg-7">
		<div class="accordion" id="accordionVakansii">
	<?php foreach ($arResult["ITEMS"] as $item): ?>
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$item["ID"];?>" aria-expanded="true" aria-controls="collapse<?=$item["ID"];?>">
						<?= $item["NAME"]; ?>
					</button>
				</h2>
			<div id="collapse<?=$item["ID"];?>" class="accordion-collapse collapse" data-bs-parent="#accordionVakansii">
				<div class="accordion-body">
					<? if (!empty($item["DETAIL_TEXT"])): ?>
						<p><?= $item["DETAIL_TEXT"]; ?></p>
					<? endif; ?>
				</div>
			</div>
			</div>
	<?php endforeach; ?>
		</div>
	</div>
</div>