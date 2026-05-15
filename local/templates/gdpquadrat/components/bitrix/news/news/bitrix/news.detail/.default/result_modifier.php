<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;

if (!empty($arResult['PROPERTIES']['NOINDEX']['VALUE'])) {
    $APPLICATION->SetPageProperty('robots', 'noindex, nofollow');
}