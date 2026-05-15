
<div id="rgPersonalInvestor">
	<div class="rg_personal_investor_maininfo">
		<div class="left_block">
			<?php
			$src = "/upload/no-img.png";
			if (!empty($arResult["PREVIEW_PICTURE"])) $src = $arResult["PREVIEW_PICTURE"]["SRC"];
			?>
			<img src="<?= $src; ?>">
			<?php if (!empty($arResult["PROPERTIES"]["LOGO"]["VALUE"])): ?>
			<img src="<?= CFile::GetPath($arResult["PROPERTIES"]["LOGO"]["VALUE"]);?>">
			<?php endif; ?>
		</div>
		<div class="right_block">
			<div class="rg_personal_investor_maininfo_name"><?= $arResult["NAME"]; ?></div>
			<div class="rg_personal_investor_maininfo_desc"><?= $arResult["PREVIEW_TEXT"]; ?></div>
			<div class="rg_personal_investor_maininfo_contacts">
				<?php foreach ($arResult["PROPERTIES"] as $prop): ?>
					<?php
					if (empty($prop["VALUE"])) continue;
					switch ($prop["CODE"]) {
						case "CONTACT_PHONE":
							echo "<div>$prop[NAME]: <a href='tel:$prop[VALUE]'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_EMAIL":
							echo "<div>$prop[NAME]: <a href='mailto:$prop[VALUE]'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_WHATSAPP":
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_TELEGRAM":
							$tgName = str_replace("https://t.me/", "@", $prop["VALUE"]);
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$tgName</a></div>";
							break;
						case "CONTACT_YOUTUBE":
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_VK":
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_LINK_VIDEO":
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$prop[VALUE]</a></div>";
							break;
						case "CONTACT_OTHER":
							echo "<div>$prop[NAME]: <a href='$prop[VALUE]' target='_blank'>$prop[VALUE]</a></div>";
							break;
					}
					?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>