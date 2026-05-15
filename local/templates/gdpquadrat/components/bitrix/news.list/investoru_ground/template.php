<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row ground">
	<div class="col-lg-6 col-12 mobile_ground_img wow slideInLeft" data-wow-delay=".4s">
		<img src="<?=CFile::GetPath($arResult["PICTURE"]); ?>">
	</div>
	<div class="offset-lg-1 col-lg-5 col-12 d-flex align-items-center wow slideInRight" data-wow-delay=".4s">
		<div class="ground_info_wrap">
			<div class="ground_info_title">
				<?= $arResult["DESCRIPTION"]; ?>
			</div>
			<div class="ground_advantages_wrap row g-lg-5 g-4">
				<?php foreach ($arResult["ITEMS"] as $item): ?>
					<div class="ground_advantage col-md-6 col-12">
						<div class="ground_advantage_title">
							<?= $item["PROPERTIES"]["TITLE"]["~VALUE"]["TEXT"]; ?>
						</div>
						<div class="ground_advantage_desc">
							<?= $item["PREVIEW_TEXT"]; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>