<?
// prr($arResult["ITEMS"]);
?>
<?php
$curPage = $APPLICATION->GetCurPage(false);
$isDetail = (bool)preg_match('#^/uchastki/.+/.+/#', $curPage);
?>

<?php if ($isDetail): ?>
<div class="row align-items-center">
    <div class="col-xl-9">
     <p class="ln-infrastructure__caption ln-fw-thin"><span class="ln-fw-bold ln-text-blue">1 000 га</span> промышленных земель</p>
        <?php else: ?>
        <div class="row">
            <div class="col-12">
                <?php endif; ?>
		<div class="map_bg">
			<img src="/local/templates/gdpquadrat/images/map_bg.svg">
			<div class="map_uchastki">
				<?php foreach ($arResult["ITEMS"] as $item): ?>
					<div class="map_uchastok <?= $item["PROPERTIES"]["ADD_STYLE"]["VALUE"]; ?>" data-top="<?= str_replace(",", ".", $item["PROPERTIES"]["COOR_Y"]["VALUE"]); ?>" data-left="<?= str_replace(",", ".", $item["PROPERTIES"]["COOR_X"]["VALUE"]); ?>" style="top:<?= str_replace(",", ".", $item["PROPERTIES"]["COOR_Y"]["VALUE"]); ?>px;left:<?= str_replace(",", ".", $item["PROPERTIES"]["COOR_X"]["VALUE"]); ?>px">
						<?= $item["PROPERTIES"]["UCHASTOK"]["~VALUE"]; ?>
						<?
						if(SITE_ID == "s1") {
							$title = $item["NAME"];
						} elseif(!empty($item["PROPERTIES"]["TITLE_EN"]["VALUE"])) {
							$title = $item["PROPERTIES"]["TITLE_EN"]["VALUE"];
						} else {
							$title = $item["NAME"];
						}
							$pos = strpos($item["PROPERTIES"]["ADD_STYLE"]["VALUE"], "free");
							if ($pos !== false && SITE_ID == "s1") {
								$title = "Свободный участок";
							}
							if ($pos !== false && SITE_ID == "s2") {
								$title = "Vacant lot";
							}
						?>
						<div class="map_uchastok_title"><?= $title; ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
    <?php if ($isDetail): ?>
        <div class="col-xl-3 d-none d-lg-block">
        <div class="uch-detail--infrastructure__free-title">
        <div class="uch-detail--infrastructure__free-title-ellipse"></div>
        <p class="uch-detail--infrastructure__free-title-text">Свободный участок</p>
</div>
            <div class="ln-infrastructure__images">
                <div class="ln-infrastructure__item"><img src="/local/templates/land-investor/img/ln-inf-01-4.jpg" alt=""></div>
                <div class="ln-infrastructure__item"><img src="/local/templates/land-investor/img/ln-inf-02-4.jpg" alt=""></div>
                <div class="ln-infrastructure__item"><img src="/local/templates/land-investor/img/ln-inf-03-4.jpg" alt=""></div>
                <div class="ln-infrastructure__item"><img src="/local/templates/land-investor/img/ln-inf-04-4.jpg" alt=""></div>
            </div>
        </div>
    <?php endif; ?>
</div>
        <?php if (!$isDetail): ?>

<? if(SITE_ID == "s1"): ?>
<a target="_blank" href="/uchastki/karta-oehz-stupino-kvadrat.pdf" class="button map_button d-lg-none d-flex mb-4 w-100">Скачать карту</a>
<? else: ?>
<a target="_blank" href="/uchastki/map-of-sez-stupino-quadrat.pdf" class="button map_button d-lg-none d-flex mb-4 w-100">Download map</a>
<? endif; ?>

<?php $x = 1; ?>
<pre style="display: none;"><?php
    foreach ($arResult["ITEMS"] as $item) {
        echo $item["NAME"] . ' => IN_LIST: ';
        print_r($item["PROPERTIES"]["IN_LIST"]);
        echo "\n";
    }
    ?></pre>
<ol>
	<div class="row map_title_items">
		<div class="col-lg-3">
			<?php foreach ($arResult["ITEMS"] as $item): ?>
				<?php if ($item["PROPERTIES"]["IN_LIST"]["VALUE_XML_ID"] == "Y"): ?>
				<?php
					if(SITE_ID == "s1") {
						$name = $item["NAME"];
					} elseif(!empty($item["PROPERTIES"]["TITLE_EN"]["VALUE"])) {
						$name = $item["PROPERTIES"]["TITLE_EN"]["VALUE"];
					} else {
						$name = $item["NAME"];
					}
				?>
					<li><?= $name; ?></li>
					<?php if ($x % 12 == 0): ?>
		</div>
		<div class="col-lg-3">
					<?php endif; ?>
					<?php $x++; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</ol>
</div>
<?php endif; ?>