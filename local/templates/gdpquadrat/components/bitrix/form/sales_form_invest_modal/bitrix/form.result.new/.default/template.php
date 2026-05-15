<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$title = \Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE33');

if($arParams['TITLE'])
    $title = $arParams['TITLE'];
// print_r("<pre>");
// print_r($arResult);
// print_r("<pre>");
// prr($arResult);
?>
<?if ($arResult["FORM_NOTE"]):?>
	<script type="text/javascript" >
		// var _rutarget = window._rutarget || [];
		// _rutarget.push({'event': 'thankYou', 'conv_id': 'investor'});
		var moreModal = $('[data-remodal-id=more-pop]').remodal();
		moreModal.close();
		jQuery(function () {
			setTimeout(function(){
				$('.web-form-succes').hide();
			}, 3000);
		});
	</script>
	<div class="web-form-succes web-form-succes-sales">
		<div>
		<?=\Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_SAVED3');?>
		</div>
	</div>
	
<?elseif (is_array($arResult["FORM_ERRORS"])):?>
	<script type="text/javascript" >
		<?foreach($arResult["FORM_ERRORS"] as $k=>$v):?>
			$('#moreModal small').remove();
			$('.<?=$k;?>').after("<small><?=$v?></small>");
		<?endforeach;?>
		var moreModal = $('[data-remodal-id=more-pop]').remodal();
		moreModal.open();
	</script>
<?else:?>

	<div id="moreModal" data-remodal-id="more-pop" role="dialog" data-remodal-options="hashTracking: false">
		<button data-remodal-action="close" class="close-button"></button>
		<div class="popup-form">
            <div class="popup-form__title">
                <?php if (!empty($arParams['TITLE'])): ?>
                    <?= $arParams['TITLE']; ?>
                <?php elseif (SITE_ID == "s1"): ?>
                    Узнать подробнее
                <?php else: ?>
                    Learn more
                <?php endif; ?>
            </div>
			<div class="popup-form__body">
				
				<?=$arResult["FORM_HEADER"]?>
					<?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
                        <?if($FIELD_SID === 'client_id'):?>
                            <input type="hidden"
                                   name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                   id="ym_client_id_modal"
                                   value="">
                            <?continue;?>
                        <?endif;?>
						<?
							$erorr = "";
							if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])){
								$error = " error";
							}
						?>
						<?php
							$type = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
							$class = 'type_text';
							switch ($type) {
								case 'dropdown':
									$class = "type_select";
									break;
								case 'textarea':
									$class = "type_textarea";
									break;
								case 'checkbox':
									$class = 'type_checkbox';
									break;
								case 'hidden':
									$class = 'hidden';
									break;
							}
							$type = "";
							switch ($FIELD_SID) {
								case 'phone':
									$type = "type-phone";
									break;
								case 'email':
									$type = "type-email";
									break;
							}
						?>
						<?if($class == 'hidden'):?>
							<? if ($FIELD_SID == "page"): ?>
								<input type="hidden" name="form_hidden_<?= $arQuestion['STRUCTURE'][0]['ID']; ?>" value="https://gdpquadrat.com<?= $APPLICATION->GetCurPage(); ?>">
							<? elseif ($FIELD_SID == "uchastok"): ?>
								<input type="hidden" class="uchastok" name="form_hidden_<?= $arQuestion['STRUCTURE'][0]['ID']; ?>" value="">
							<? else: ?>
								<input type="hidden" name="form_hidden_<?= $arQuestion['STRUCTURE'][0]['ID']; ?>" value="">
							<?endif; ?>
						<?elseif($class != 'type_checkbox'):?>
							<div class="tpl-field <?=$type;?> popup-form__form-field required">
								<input type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>" placeholder="<?=$arQuestion["CAPTION"]?>" type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?> id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" value="">
								<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
									<small><?=$arResult["FORM_ERRORS"][$FIELD_SID]?></small>
								<?endif;?>
							</div>
						<?else:?>
							<div class="field <?=$class?> <?=$error?>">
								<label for="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
									<input type="checkbox"  id="<?=$arQuestion['STRUCTURE'][0]['ID']?>" name="form_checkbox_<?=$FIELD_SID?>[]" value="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
									<span></span>
									<?=$arQuestion["CAPTION"]?>
									<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
										<small><?=$arResult["FORM_ERRORS"][$FIELD_SID]?></small>
									<?endif;?>
								</label>
							</div>
						<?endif;?>
					<?endforeach;?>
					<div class="tpl-field popup-form__form-field policity-field">
						<label>
							<?if(SITE_ID == "s1"):?>
                             <label for="conf-sale-m" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-sale-m" checked>
									<span>Отправляя данную форму, вы соглашаетесь на обработку <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">персональных данных</a></span>
                             </label>
							<?else:?>
                             <label for="conf-sale-m" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-sale-m" checked>
									<span>By submitting this form, you agree to the <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">processing of personal data</a></span>
                             </label>
							<?endif;?>
							
						</label>
					</div>
					<div class="popup-form__form-field submit-button">
						<input class="tpl-form-button js-form-submit" type="submit" name="web_form_submit" value="Отправить">
					</div>
                <?$captcha = str_replace('<input','<input  data-captcha ',
                    $arResult["QUESTIONS"]['captcha_token']['HTML_CODE'])?>
                <?=$captcha?>

                <?=$arResult["FORM_FOOTER"]?>
				
			</div>
		</div>
        <script>
            // Яндекс.Метрика — заполняем ClientID
            (function fillClientID() {
                var attempts = 0;
                (function tryFill() {
                    attempts++;
                    var input = document.getElementById('ym_client_id_modal');
                    if (!input && attempts < 50) {
                        setTimeout(tryFill, 200);
                        return;
                    }
                    if (typeof ym !== 'undefined' && input) {
                        ym(38142565, 'getClientID', function(clientID) {
                            input.value = clientID;
                            console.log('YM ClientID заполнен:', clientID);
                        });
                    } else if (attempts < 50) {
                        setTimeout(tryFill, 200);
                    }
                })();
            })();
        </script>
	</div>

<?endif;?>
<script>
    $(document).ready(function () {
        //(new YandexInvisibleCaptcha(document.querySelector('[name="<?//=$arResult['arForm']['SID']?>//"]'))).executeCaptcha()
    })
</script>