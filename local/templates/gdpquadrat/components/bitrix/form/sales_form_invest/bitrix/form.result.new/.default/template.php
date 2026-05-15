<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$title = \Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE33');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput2.js');
if($arParams['TITLE'])
    $title = $arParams['TITLE'];
// print_r("<pre>");
// print_r($arResult);
// print_r("<pre>");
// prr($arResult);
?>

<div class="invest_form">
	<div class="row">
	<div class="col-lg-5 col-xl-5 col-12">
		<?if(SITE_ID == "s1"):?>
			<h2 class="invest_form_title">Оставьте заявку на подбор участка</h2>
		<?else:?>
			<h2 class="invest_form_title">Leave a request for site selection</h2>
		<?endif;?>
	</div>
	<div class="col-lg-7 col-xl-7 col-12">
		<?if ($arResult["FORM_NOTE"]):?>
			<div class="hideForm">
			<script type="text/javascript" >
				var _rutarget = window._rutarget || [];
				_rutarget.push({'event': 'thankYou', 'conv_id': 'investor'});
			</script>
		<?endif;?>
		<?=$arResult["FORM_HEADER"]?>
		<div class="row g-3">
			<?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
                <?if($FIELD_SID === 'client_id'):?>
                    <input type="hidden"
                           name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                           id="ym_client_id"
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
				?>
				<?if($class == 'hidden'):?>
					<? if ($FIELD_SID == "page"): ?>
						<input type="hidden" name="form_hidden_<?= $arQuestion['STRUCTURE'][0]['ID']; ?>" value="https://gdpquadrat.com<?= $APPLICATION->GetCurPage(); ?>">
					<? else: ?>
						<input type="hidden" name="form_hidden_<?= $arQuestion['STRUCTURE'][0]['ID']; ?>" value="">
					<?endif; ?>
				<?elseif($class != 'type_checkbox'):?>
					<?php $req = ($arQuestion['REQUIRED'] === 'Y') ? 'required' : ''; ?>
					<div class="col-lg-6 col-12 field <?=$class?><?=$error?>">
						<input placeholder="<?=$arQuestion["CAPTION"]?>" type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?> <?= $req ?> id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" value="">
						<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
							<small><?=TxtToHTML($arResult["FORM_ERRORS"][$FIELD_SID])?></small>
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
		</div>
		<div class="row g-3 mt-2">
			<div class="col">
				<?if(SITE_ID == "s1"):?>
                 <label for="conf-sale" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-sale" checked>
				<div class="invest_form_law">Отправляя данную форму,вы соглашаетесь на обработку <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">персональных данных</a></div>
                 </label>
				<?else:?>
                 <label for="conf-sale" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-sale" checked>
				<div class="invest_form_law">By submitting this form, you agree to the <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">processing of personal data</a></div>
                 </label>
				<?endif;?>
			</div>
			<div class="col-lg-auto col-12">
				<input class="btn btn-primary w-auto text-capitalize js-form-submit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=$arResult['arForm']['BUTTON']?>" />
			</div>
		</div>
                <?$captcha = str_replace('<input','<input  data-captcha ',
                    $arResult["QUESTIONS"]['captcha_token']['HTML_CODE'])?>
                <?=$captcha?>
		<?=$arResult["FORM_FOOTER"]?>
		<?if ($arResult["FORM_NOTE"]):?>
		</div>
			<script>
				jQuery(function () {
					setTimeout(function(){
						$('.web-form-succes').hide();
					}, 3000);
				});
			</script>
		<?endif;?>
		<div class="web-form-succes">
			<div>
			<?=\Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_SAVED3');?>
			</div>
		</div>
	</div>
	
	</div>
    <script>
        // Яндекс.Метрика — заполняем ClientID
        (function fillClientID() {
            var attempts = 0;
            (function tryFill() {
                attempts++;
                var input = document.getElementById('ym_client_id');
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
<script>
    $(document).ready(function () {
        //(new YandexInvisibleCaptcha(document.querySelector('[name="<?//=$arResult['arForm']['SID']?>//"]'))).executeCaptcha()
    })
</script>
