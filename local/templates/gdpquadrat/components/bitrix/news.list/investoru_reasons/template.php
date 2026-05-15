<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// print_r("<pre>");
// print_r($arResult);
// print_r("</pre>");
?>

<h2 class="col-12 reasons_title">
	<?= $arResult["NAME"]; ?>
</h2>
<div class="col-lg-6 col-12">
	<?php for($i=0; $i<3; $i++):?>
		<div class="reason_wrap">
			<div class="reason_title">
				<div class="reason_icon">
						<img src="<?=CFile::GetPath($arResult["ITEMS"][$i]["PROPERTIES"]["ICON"]["VALUE"]);?>">
				</div>
				<h3 class="reason_text">
					<?= $arResult["ITEMS"][$i]["NAME"]; ?>
				</h3>
			</div>
			<div class="reason_desc">
				<?= $arResult["ITEMS"][$i]["PREVIEW_TEXT"]; ?>
			</div>
		</div>
	<?php endfor; ?>
</div>
<div class="col-lg-6 col-12">
	<?php for($i=3; $i<6; $i++):?>
		<div class="reason_wrap">
			<div class="reason_title">
				<div class="reason_icon">
						<img src="<?=CFile::GetPath($arResult["ITEMS"][$i]["PROPERTIES"]["ICON"]["VALUE"]);?>">
				</div>
				<h3 class="reason_text">
					<?= $arResult["ITEMS"][$i]["NAME"]; ?>
				</h3>
			</div>
			<div class="reason_desc">
				<?= $arResult["ITEMS"][$i]["PREVIEW_TEXT"]; ?>
			</div>
		</div>
	<?php endfor; ?>
</div>