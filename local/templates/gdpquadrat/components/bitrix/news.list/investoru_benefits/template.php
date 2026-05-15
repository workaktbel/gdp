<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="row benefits">
<?php
if(SITE_ID == "s1") {
	$APPLICATION->IncludeFile("include/investoru_benefits.php", Array(), Array(
		"MODE"      => "html",
		"NAME"      => "Редактирование включаемой области раздела",
		"TEMPLATE"  => "investoru_benefits.php"
	));
} else {
	$APPLICATION->IncludeFile("include/investoru_benefits_en.php", Array(), Array(
		"MODE"      => "html",
		"NAME"      => "Редактирование включаемой области раздела",
		"TEMPLATE"  => "investoru_benefits.php"
	));
}
?>
<div class="col-12 wow slideInRight" data-wow-delay=".4s">
	<div class="benefits_cards row g-4">
		<?php foreach ($arResult["ITEMS"] as $item): ?>
			<div class="benefits_card col-md-6 col-xl-3 col-12">
				<div class="benefits_card_wrap_wrap">
					<div class="benefits_card_wrap">
						<div class="benefits_card_top">
							<div class="benefits_card_title">
								<?= $item["NAME"]; ?>
							</div>
						</div>
						<div class="benefits_card_middle">
							<div class="benefits_card_name">
								<? if(SITE_ID == "s1"): ?>
                                ОЭЗ Ступино КВАДРАТ
								<? else: ?>
								Stupino Quadrat
								<? endif; ?>
							</div>
							<?php foreach ($item["PROPERTIES"]["LIST"]["VALUE"] as $k=>$v): ?>
							<?php
								$count = count($item["PROPERTIES"]["LIST"]["VALUE"]);
							?>
								<div class="benefits_card_desc count-<?= $count; ?>">
									<span class="count-<?= $count; ?>"><?= $v; ?></span> <?= $item["PROPERTIES"]["LIST"]["DESCRIPTION"][$k]; ?>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="benefits_card_bottom">
							<div class="benefits_card_dopinfo">
								<?= $item["PROPERTIES"]["LIST2"]["DESCRIPTION"]; ?><br>
								<span><?= $item["PROPERTIES"]["LIST2"]["VALUE"]; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
</div>