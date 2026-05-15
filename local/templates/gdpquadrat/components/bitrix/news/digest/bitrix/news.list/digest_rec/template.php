<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="row">
	<div class="col-12 d-flex justify-content-between align-items-center digest_rec_slider_top">
		<div class="digest_rec_slider_title">Рекомендуемые статьи</div>
		<div class="digest_rec_slider_arrows"></div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="digest_rec_slider">
			<?php foreach($arResult["ITEMS"] as $item): ?>
				<?
				$monthArr = array(
					1 => "Январь",
					2 => "Февраль",
					3 => "Март",
					4 => "Апрель",
					5 => "Май",
					6 => "Июнь",
					7 => "Июль",
					8 => "Август",
					9 => "Сентябрь",
					10 => "Октябрь",
					11 => "Ноябрь",
					12 => "Декабрь",
				);
				$monthArrEN = array(
					1 => "January",
					2 => "February",
					3 => "March",
					4 => "April",
					5 => "May",
					6 => "June",
					7 => "July",
					8 => "August",
					9 => "September",
					10 => "October",
					11 => "November",
					12 => "December",
				);
				$month = date('n', strtotime($item["ACTIVE_FROM"]));
				$year = date('Y', strtotime($item["ACTIVE_FROM"]));
				
				$class = "col-xl-6";
				if ($i == 1 || $i == 6) $class = "col-xl-12";
				
				if (!empty($item["PREVIEW_TEXT"])) {
					$text = $item["PREVIEW_TEXT"];
				} else {
					$text = $item["DETAIL_TEXT"];
				}
				?>
				<div class="col-md-6 col-10">
					<div class="news-item-wrap">
					<div class="news-item">
						<div class="item-img">
							<?php
							$img = $item["PREVIEW_PICTURE"];
							if(!$item["PREVIEW_PICTURE"]) {
								$img = $item["DETAIL_PICTURE"];
							}
							?>
							<a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="<?=$img["SRC"]?>"></a>
						</div>
						<div class="item-main_right">
							<div class="item-top_info">
								<div class="item-main_info">
									<div class="item-main_info_title">
										<a href="<?=$item["DETAIL_PAGE_URL"]?>"><?= $item["NAME"];?></a>
									</div>
								</div>
								<div class="item-preview_info"><?echo $text;?></div>
							</div>
							
							<div class="item-detail_info">
								<div class="item-detail_info_url">
									<a href="<?= $item["DETAIL_PAGE_URL"];?>">Подробнее</a>
								</div>
								
								<div class="item-detail_info_date">
									<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M3.09265 9.89957H20.9166" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M16.4421 13.8048H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12.0046 13.8048H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M7.55793 13.8048H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M16.4421 17.6916H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12.0046 17.6916H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M7.55793 17.6916H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M16.0438 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M7.96552 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 4.07422H7.77096C4.83427 4.07422 3 5.71015 3 8.71724V17.7669C3 20.8213 4.83427 22.495 7.77096 22.495H16.229C19.175 22.495 21 20.8496 21 17.8425V8.71724C21.0092 5.71015 19.1842 4.07422 16.2383 4.07422Z" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<?= date('d', strtotime($item["ACTIVE_FROM"])); ?>
									<?php if (LANGUAGE_ID == "en"): ?>&nbsp;
									<?=$monthArrEN[$month];?>&nbsp;<?=$year;?>
									<?php else: ?>
									<?=$monthArr[$month];?>&nbsp;<?=$year;?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>