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
?>

<div class="container-xxl address_page">
		
	<div class="row">
		<div class="col-lg-6 col-12">
			<?=$arResult["PROPERTIES"]['MAP']['~VALUE']['TEXT']?>
		</div>
		<div class="offset-xl-1 col-xl-5 col-lg-6 col-12">
			<div class="address_page_wrap">
				<div class="address_page_title"><?=$arResult['NAME']?></div>
				<div class="address_page_item">
					<div class="address_page_item_icon">
						<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.625 8.31776C0.625 3.71789 4.46888 0 9.11845 0C13.7811 0 17.625 3.71789 17.625 8.31776C17.625 10.6357 16.782 12.7876 15.3945 14.6116C13.8638 16.6235 11.9772 18.3765 9.85354 19.7524C9.36751 20.0704 8.92887 20.0944 8.39545 19.7524C6.25974 18.3765 4.37309 16.6235 2.8555 14.6116C1.46698 12.7876 0.625 10.6357 0.625 8.31776ZM6.31923 8.57675C6.31923 10.1177 7.57666 11.3297 9.11845 11.3297C10.6612 11.3297 11.9308 10.1177 11.9308 8.57675C11.9308 7.0478 10.6612 5.77683 9.11845 5.77683C7.57666 5.77683 6.31923 7.0478 6.31923 8.57675Z" fill="#1400C4"/>
						</svg>
					</div>
					<span class="address_page_item_title"><?=GetMessage("ADDRESS")?></span>
					<span class="address_page_item_value"><?=$arResult["PROPERTIES"]['ADRESS']['~VALUE']['TEXT']?></span>
				</div>
				<div class="address_page_item">
					<div class="address_page_item_icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M9.15674 10.2097C13.1458 14.1977 14.0508 9.58402 16.5906 12.1221C19.0393 14.5701 20.4466 15.0605 17.3442 18.162C16.9556 18.4743 14.4866 22.2316 5.8096 13.557C-2.86848 4.8813 0.886585 2.40975 1.19897 2.02125C4.30887 -1.08885 4.79086 0.326688 7.23949 2.77463C9.77936 5.3138 5.16766 6.22172 9.15674 10.2097Z" fill="#1400C4"/>
						</svg>
					</div>
					<span class="address_page_item_title"><?=GetMessage("PHONE")?></span>
					<span class="address_page_item_value"><?=$arResult["PROPERTIES"]['PHONE']['~VALUE'][0]['TEXT']?></span>
				</div>
				<div class="address_page_item">
					<div class="address_page_item_icon">
						<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.064 0.237305C16.405 0.237305 17.695 0.767305 18.644 1.7183C19.594 2.6673 20.125 3.9473 20.125 5.2873V13.1873C20.125 15.9773 17.855 18.2373 15.064 18.2373H5.185C2.394 18.2373 0.125 15.9773 0.125 13.1873V5.2873C0.125 2.4973 2.384 0.237305 5.185 0.237305H15.064ZM16.655 6.7773L16.735 6.6973C16.974 6.4073 16.974 5.9873 16.724 5.6973C16.585 5.5483 16.394 5.4573 16.195 5.4373C15.985 5.4263 15.785 5.4973 15.634 5.6373L11.125 9.2373C10.545 9.7183 9.714 9.7183 9.125 9.2373L4.625 5.6373C4.314 5.4073 3.884 5.4373 3.625 5.7073C3.355 5.9773 3.325 6.4073 3.554 6.7073L3.685 6.8373L8.235 10.3873C8.795 10.8273 9.474 11.0673 10.185 11.0673C10.894 11.0673 11.585 10.8273 12.144 10.3873L16.655 6.7773Z" fill="#1400C4"/>
						</svg>
					</div>
					<span class="address_page_item_title"><?=GetMessage("EMAIL")?></span>
					<span class="address_page_item_value"><?=$arResult["PROPERTIES"]['PHONE']['~VALUE'][1]['TEXT']?></span>
				</div>
                <div class="address_page_item">
                    <div class="address_page_item_icon">
                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.064 0.237305C16.405 0.237305 17.695 0.767305 18.644 1.7183C19.594 2.6673 20.125 3.9473 20.125 5.2873V13.1873C20.125 15.9773 17.855 18.2373 15.064 18.2373H5.185C2.394 18.2373 0.125 15.9773 0.125 13.1873V5.2873C0.125 2.4973 2.384 0.237305 5.185 0.237305H15.064ZM16.655 6.7773L16.735 6.6973C16.974 6.4073 16.974 5.9873 16.724 5.6973C16.585 5.5483 16.394 5.4573 16.195 5.4373C15.985 5.4263 15.785 5.4973 15.634 5.6373L11.125 9.2373C10.545 9.7183 9.714 9.7183 9.125 9.2373L4.625 5.6373C4.314 5.4073 3.884 5.4373 3.625 5.7073C3.355 5.9773 3.325 6.4073 3.554 6.7073L3.685 6.8373L8.235 10.3873C8.795 10.8273 9.474 11.0673 10.185 11.0673C10.894 11.0673 11.585 10.8273 12.144 10.3873L16.655 6.7773Z" fill="#1400C4"/>
                        </svg>
                    </div>
                    <span class="address_page_item_title"><?=GetMessage("CONSTRUCTION_EMAIL")?></span>
                    <span class="address_page_item_value"><?=$arResult["PROPERTIES"]['PHONE']['~VALUE'][2]['TEXT']?></span>
                </div>
                <div class="address_page_item">
                    <div class="address_page_item_icon">
                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.064 0.237305C16.405 0.237305 17.695 0.767305 18.644 1.7183C19.594 2.6673 20.125 3.9473 20.125 5.2873V13.1873C20.125 15.9773 17.855 18.2373 15.064 18.2373H5.185C2.394 18.2373 0.125 15.9773 0.125 13.1873V5.2873C0.125 2.4973 2.384 0.237305 5.185 0.237305H15.064ZM16.655 6.7773L16.735 6.6973C16.974 6.4073 16.974 5.9873 16.724 5.6973C16.585 5.5483 16.394 5.4573 16.195 5.4373C15.985 5.4263 15.785 5.4973 15.634 5.6373L11.125 9.2373C10.545 9.7183 9.714 9.7183 9.125 9.2373L4.625 5.6373C4.314 5.4073 3.884 5.4373 3.625 5.7073C3.355 5.9773 3.325 6.4073 3.554 6.7073L3.685 6.8373L8.235 10.3873C8.795 10.8273 9.474 11.0673 10.185 11.0673C10.894 11.0673 11.585 10.8273 12.144 10.3873L16.655 6.7773Z" fill="#1400C4"/>
                        </svg>
                    </div>
                    <span class="address_page_item_title"><?=GetMessage("ENERGY_EMAIL")?></span>
                    <span class="address_page_item_value"><?=$arResult["PROPERTIES"]['PHONE']['~VALUE'][3]['TEXT']?></span>
                </div>
                <div class="address_page_item">
                    <div class="address_page_item_icon">
                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.064 0.237305C16.405 0.237305 17.695 0.767305 18.644 1.7183C19.594 2.6673 20.125 3.9473 20.125 5.2873V13.1873C20.125 15.9773 17.855 18.2373 15.064 18.2373H5.185C2.394 18.2373 0.125 15.9773 0.125 13.1873V5.2873C0.125 2.4973 2.384 0.237305 5.185 0.237305H15.064ZM16.655 6.7773L16.735 6.6973C16.974 6.4073 16.974 5.9873 16.724 5.6973C16.585 5.5483 16.394 5.4573 16.195 5.4373C15.985 5.4263 15.785 5.4973 15.634 5.6373L11.125 9.2373C10.545 9.7183 9.714 9.7183 9.125 9.2373L4.625 5.6373C4.314 5.4073 3.884 5.4373 3.625 5.7073C3.355 5.9773 3.325 6.4073 3.554 6.7073L3.685 6.8373L8.235 10.3873C8.795 10.8273 9.474 11.0673 10.185 11.0673C10.894 11.0673 11.585 10.8273 12.144 10.3873L16.655 6.7773Z" fill="#1400C4"/>
                        </svg>
                    </div>
                    <span class="address_page_item_title"><?=GetMessage("ENGINEERING_EMAIL")?></span>
                    <span class="address_page_item_value"><?=$arResult["PROPERTIES"]['PHONE']['~VALUE'][4]['TEXT']?></span>
                </div>
				<div class="address_page_item">
					<div class="address_page_item_icon">
						<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M10.125 20.2373C4.605 20.2373 0.125 15.7673 0.125 10.2373C0.125 4.7173 4.605 0.237305 10.125 0.237305C15.655 0.237305 20.125 4.7173 20.125 10.2373C20.125 15.7673 15.655 20.2373 10.125 20.2373ZM13.315 13.9473C13.435 14.0173 13.565 14.0573 13.705 14.0573C13.955 14.0573 14.205 13.9273 14.345 13.6873C14.555 13.3373 14.445 12.8773 14.085 12.6573L10.525 10.5373V5.9173C10.525 5.4973 10.185 5.1673 9.775 5.1673C9.365 5.1673 9.025 5.4973 9.025 5.9173V10.9673C9.025 11.2273 9.165 11.4673 9.395 11.6073L13.315 13.9473Z" fill="#1400C4"/>
						</svg>
					</div>
					<span class="address_page_item_title"><?=GetMessage("WORK_TIME")?></span>
					<span class="address_page_item_value"><?=$arResult["PROPERTIES"]['TIME']['DESCRIPTION'][0]?>, <?=$arResult["PROPERTIES"]['TIME']['VALUE'][1]?> (<?=$arResult["PROPERTIES"]['TIME']['DESCRIPTION'][1]?>)</span>
				</div>
			</div>
		</div>
	</div>

</div>