<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/slick.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/slick-theme.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/remodal-default-theme.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/sales.css");
$APPLICATION->AddHeadScript("/local/templates/gdpquadrat/assets/js/remodal.min.js");
$APPLICATION->AddHeadScript("/local/templates/gdpquadrat/assets/js/sales.js");
$APPLICATION->AddHeadScript('/local/templates/gdpquadrat/js/jquery.maskedinput2.js');
?>

<?php $this->__component->arParams['CACHE_TYPE'] = 'N'; ?>
<?php
if (isset($_GET['set_debug_form'])) {
    setcookie('debug_form', $_GET['set_debug_form'], time() + 3600, '/');
    $_COOKIE['debug_form'] = $_GET['set_debug_form'];
}
$DEBUG_FORM = (($_COOKIE['debug_form'] ?? '') === '1');

?>
<?php if (!$DEBUG_FORM): ?>
    <svg class="uch-detail--svg-sprite">
        <symbol id="l-inf-icon-01" width="22" height="33" viewBox="0 0 22 33" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path d="M20 0H7L0 19H11L6 33H7L22 15H12L20 0Z" fill="black"/>
        </symbol>
        <symbol id="l-inf-icon-02" width="26" height="35" viewBox="0 0 26 35" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path d="M13.5479 0C16.1024 2.7932 17.1659 5.04314 16.4756 13.832C19.4032 18.278 21.4002 17.5138 25.7461 14.8203C28.9658 43.0742 0.442607 38.0534 0 21.7363C-4.19481e-05 13.3383 6.22939 10.3742 13.5479 0ZM13.2861 17.7842C10.2645 22.1769 7.69331 23.4322 7.69336 26.9883C7.8762 33.8975 19.6526 36.0233 18.3232 24.0596C16.5288 25.2001 15.7039 25.5241 14.4951 23.6416C14.7802 19.9199 14.3409 18.967 13.2861 17.7842Z"
                  fill="black"/>
        </symbol>
        <symbol id="l-inf-icon-03" width="26" height="32" viewBox="0 0 26 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path d="M18 0C16.4087 0 14.8826 0.632118 13.7574 1.7573C12.6322 2.88247 12.0001 4.40854 12.0001 5.99978C12.0001 7.59102 12.6322 9.11709 13.7574 10.2423C14.8826 11.3674 16.4087 11.9996 18 11.9996C19.5913 11.9996 21.1174 11.3674 22.2427 10.2423C23.3679 9.11709 24 7.59102 24 5.99978C24 4.40854 23.3679 2.88247 22.2427 1.7573C21.1174 0.632118 19.5913 0 18 0ZM8.10608 15.9914C8.03808 16.3167 8.00408 16.6527 8.00408 16.9994V23.9991C8.00278 25.4511 8.31832 26.8858 8.92869 28.2032C9.53907 29.5207 10.4296 30.689 11.5381 31.6268L11.1961 31.7268C10.1812 31.9991 9.12267 32.0687 8.0809 31.9318C7.03913 31.7949 6.03454 31.4541 5.1245 30.9289C4.21446 30.4037 3.4168 29.7043 2.77708 28.8708C2.13735 28.0373 1.6681 27.0859 1.39611 26.0711L0.102118 21.2412C0.000199535 20.8607 -0.0257591 20.4638 0.0257243 20.0732C0.0772077 19.6826 0.205125 19.306 0.402172 18.9648C0.599218 18.6237 0.861536 18.3247 1.17414 18.0849C1.48675 17.8451 1.84353 17.6693 2.22411 17.5674L8.10608 15.9914ZM5.0001 3.99985C3.67402 3.99985 2.40226 4.52662 1.46458 5.46427C0.5269 6.40192 0.000118493 7.67364 0.000118493 8.99967C0.000118493 10.3257 0.5269 11.5974 1.46458 12.5351C2.40226 13.4727 3.67402 13.9995 5.0001 13.9995C6.32617 13.9995 7.59794 13.4727 8.53561 12.5351C9.47329 11.5974 10.0001 10.3257 10.0001 8.99967C10.0001 7.67364 9.47329 6.40192 8.53561 5.46427C7.59794 4.52662 6.32617 3.99985 5.0001 3.99985ZM13.0001 13.9995C12.2044 13.9995 11.4414 14.3156 10.8787 14.8781C10.3161 15.4407 10.0001 16.2038 10.0001 16.9994V23.9991C10.0001 26.1208 10.8429 28.1555 12.3432 29.6558C13.8435 31.156 15.8783 31.9988 18 31.9988C20.1218 31.9988 22.1566 31.156 23.6569 29.6558C25.1572 28.1555 26 26.1208 26 23.9991V16.9994C26 16.2038 25.6839 15.4407 25.1213 14.8781C24.5587 14.3156 23.7957 13.9995 23 13.9995H13.0001Z"
                  fill="black"/>
        </symbol>
        <symbol id="l-inf-icon-04" width="26" height="39" viewBox="0 0 26 39" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path d="M12.9951 0C12.9951 0 0 20.2368 0 26.9169C0 33.597 5.81384 39 12.9951 39C20.1764 39 26 33.5872 26 26.9169C26 20.2466 12.9951 0 12.9951 0ZM21.9667 32.0645C19.4287 35.5715 15.7594 36.269 15.3167 34.1962C14.874 32.1234 16.871 32.8504 19.4385 29.7755C21.1306 27.7421 19.8222 24.4118 22.2422 24.3725C24.3769 24.343 23.9342 29.3138 21.9667 32.0645Z"
                  fill="black"/>
        </symbol>
        <symbol id="l-inf-icon-05" width="26" height="32" viewBox="0 0 26 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.79455 0.232108C7.61468 0.357344 7.32034 0.562505 7.14046 0.688064C6.20561 1.34047 5.83877 1.5809 5.79685 1.56875C5.7714 1.56133 5.75663 1.57729 5.76415 1.60422C5.77712 1.65077 5.65634 1.74193 5.00105 2.18047L4.71488 2.37198V5.37673C4.71488 8.36992 4.71445 8.38148 4.60315 8.38148C4.54172 8.38148 4.42523 8.41459 4.34424 8.45501C4.26329 8.49548 4.154 8.52177 4.1014 8.51349C4.0488 8.50521 4.01975 8.52069 4.03681 8.548C4.05393 8.57525 3.98896 8.66302 3.89253 8.74305C3.79605 8.82308 3.67172 8.98987 3.61618 9.11366C3.51992 9.32822 3.51523 11.6066 3.51561 17.0547C3.51594 22.9207 3.5348 24.8371 3.57394 24.9758C3.60577 25.0885 3.68017 25.2285 3.73926 25.2868C3.7984 25.3451 3.82963 25.4221 3.80876 25.4579C3.78788 25.4939 3.78897 25.5071 3.81121 25.4875C3.83345 25.4678 3.93984 25.5108 4.04761 25.5829C4.15542 25.655 4.29447 25.7266 4.35661 25.742C4.46377 25.7684 4.46867 25.8002 4.45123 26.3557C4.42076 27.3284 4.64245 27.7959 5.27811 28.0992C5.587 28.2466 5.58858 28.2846 5.28056 28.1577C5.17394 28.1137 5.01222 28.016 4.9212 27.9404C4.7707 27.8156 4.74726 27.8107 4.66272 27.8861C4.61159 27.9317 4.54945 27.9508 4.5246 27.9286C4.49969 27.9063 4.49533 27.9157 4.51479 27.9493C4.53496 27.9842 4.41618 28.1229 4.23865 28.2718C4.06728 28.4156 3.73223 28.7074 3.49403 28.9203C3.25589 29.1333 3.03693 29.2928 3.00744 29.2749C2.97795 29.2569 2.96847 29.2656 2.9864 29.2942C3.02701 29.359 1.94711 30.3136 1.86121 30.289C1.82687 30.2791 1.81597 30.288 1.83701 30.3088C1.88078 30.3519 1.83597 30.4005 1.4657 30.7115C1.31908 30.8347 1.00294 31.111 0.763103 31.3258C0.52327 31.5404 0.253459 31.7792 0.163522 31.8563L0 31.9966L1.54305 31.9983C2.50396 31.9994 3.07405 31.9808 3.0541 31.9489C3.0365 31.9209 3.06587 31.8748 3.1194 31.8465C3.17293 31.8183 3.44961 31.563 3.73413 31.2792C4.02471 30.9893 4.2827 30.7748 4.32254 30.7897C4.36157 30.8043 4.3795 30.794 4.36244 30.7667C4.31982 30.6987 5.09736 29.9518 5.16675 29.994C5.19728 30.0127 5.20649 30.0027 5.18724 29.9719C5.14358 29.9023 5.28084 29.7825 5.34183 29.8371C5.36636 29.8589 5.37132 29.8507 5.35284 29.8186C5.30994 29.7443 5.76868 29.296 5.8307 29.3516C5.85616 29.3745 5.86177 29.3668 5.84319 29.3346C5.8246 29.3024 6.02911 29.0726 6.29772 28.8239C6.56628 28.5754 6.78606 28.3546 6.78611 28.3334C6.78616 28.3121 6.51025 28.2871 6.17296 28.2777C5.83572 28.2682 8.90786 28.26 13 28.2593C17.0921 28.2587 20.2123 28.2716 19.9337 28.2881L19.4272 28.3182L19.8071 28.6924C20.0161 28.8983 20.1728 29.0895 20.1553 29.1173C20.1379 29.1451 20.1479 29.1531 20.1777 29.1349C20.2485 29.0918 20.646 29.4936 20.5912 29.553C20.5682 29.578 20.5753 29.5839 20.6072 29.5661C20.6812 29.5246 21.518 30.3536 21.4627 30.4136C21.44 30.4383 21.448 30.4435 21.4806 30.4253C21.547 30.388 21.9575 30.7764 21.913 30.8343C21.8975 30.8547 21.9007 30.8595 21.9202 30.8451C21.9763 30.804 22.811 31.6346 22.7735 31.6943C22.7551 31.7238 22.7646 31.7329 22.7945 31.7146C22.8246 31.6963 22.9188 31.753 23.004 31.8407L23.1588 32L24.5794 31.9984L26 31.9968L25.8273 31.8418C25.7322 31.7565 25.6709 31.6706 25.691 31.6508C25.7111 31.631 25.6999 31.6228 25.6663 31.6327C25.6085 31.6497 25.0843 31.2184 24.5704 30.731C24.4423 30.6096 24.3375 30.5184 24.3375 30.5285C24.3375 30.5386 24.2549 30.4687 24.154 30.3731C24.0531 30.2776 23.8149 30.0664 23.6246 29.9038C23.4343 29.7412 23.2014 29.5356 23.1069 29.4469C22.9265 29.2776 22.7253 29.1023 22.1511 28.6138C21.96 28.4512 21.6751 28.1952 21.518 28.045L21.2324 27.7719L21.1089 27.9018C21.0409 27.9733 20.8824 28.0781 20.7567 28.1347C20.426 28.2834 20.3934 28.2585 20.7094 28.0985C20.9641 27.9695 21.3435 27.6812 21.3393 27.6198C21.3383 27.6042 21.3793 27.5131 21.4305 27.4173C21.5556 27.1832 21.6101 25.9377 21.4981 25.8695C21.4443 25.8367 21.4653 25.81 21.5777 25.7678C21.6616 25.7363 21.7589 25.7267 21.7939 25.7464C21.8288 25.7661 21.8401 25.7633 21.8187 25.74C21.7975 25.7168 21.8558 25.6463 21.9484 25.5836C22.041 25.5208 22.1934 25.3643 22.2869 25.2358L22.457 25.0022L22.4843 22.1452C22.5111 19.3341 22.4687 9.32913 22.4203 9.09473C22.4068 9.02884 22.3749 8.95628 22.3495 8.93349C22.3241 8.91075 22.3222 8.9244 22.3454 8.96391C22.3685 9.00336 22.275 8.92478 22.1375 8.78922C22 8.65367 21.8609 8.54273 21.8284 8.54273C21.7958 8.54273 21.7827 8.52128 21.7991 8.49505C21.8156 8.46882 21.7986 8.44963 21.7615 8.45238C21.7243 8.45512 21.602 8.43765 21.4895 8.41346L21.2851 8.36949L21.2846 5.35211L21.2842 2.33468L20.958 2.12742C20.7768 2.01234 20.6474 1.89511 20.6671 1.86383C20.6872 1.83164 20.6763 1.82336 20.6416 1.84448C20.6081 1.86485 20.4846 1.81417 20.367 1.73188C20.2495 1.64953 20.0985 1.5459 20.0316 1.50156C19.9647 1.45722 19.8085 1.34633 19.6845 1.25512C19.5606 1.16391 19.1403 0.876778 18.7505 0.616954C18.3608 0.357183 18.0032 0.111333 17.9559 0.070591C17.8841 0.00883299 17.0617 -0.00277691 12.9957 0.000501804L8.12159 0.00437217L7.79455 0.232108ZM7.8647 1.34913C7.65648 1.47006 7.54927 1.66808 7.54927 1.93161C7.54927 2.11613 7.77384 2.44449 7.89332 2.43481C7.9433 2.43078 7.97072 2.44889 7.95426 2.47512C7.93719 2.50237 8.52718 2.5228 9.33264 2.5228C10.8731 2.5228 10.8984 2.51812 11.0653 2.19971C11.2228 1.89936 11.1416 1.53021 10.8794 1.3545C10.7553 1.27135 10.5736 1.25797 9.40252 1.24561C8.11364 1.23201 8.06005 1.23561 7.8647 1.34913ZM15.2449 1.28952C15.1756 1.31693 15.1339 1.36353 15.1524 1.39299C15.1715 1.42346 15.151 1.43335 15.1051 1.41594C14.9945 1.37412 14.8532 1.65545 14.8532 1.91747C14.8532 2.06614 14.8972 2.17569 15.0108 2.30984L15.1683 2.49592L16.5941 2.50845C17.506 2.51646 18.0081 2.5021 17.9872 2.46873C17.9692 2.44002 17.9895 2.42976 18.0323 2.44599C18.1814 2.50237 18.405 2.24314 18.4311 1.98353C18.4603 1.69302 18.3773 1.52075 18.1285 1.35536C17.949 1.23615 17.9093 1.23292 16.6576 1.2362C15.95 1.23808 15.3143 1.26205 15.2449 1.28952ZM15.8344 1.5114C15.2405 1.55348 15.1842 1.56165 15.1923 1.6046C15.1955 1.62185 15.1797 1.7007 15.1571 1.77987C15.1028 1.96993 15.1594 2.13054 15.3163 2.23191C15.497 2.3487 17.7283 2.34543 17.9585 2.22804C18.2066 2.10151 18.2588 1.80535 18.0637 1.63083C17.9655 1.543 17.8357 1.52462 17.1507 1.50156C16.7115 1.48678 16.1192 1.49119 15.8344 1.5114ZM8.03983 1.54139C7.78855 1.63776 7.75062 1.97912 7.96897 2.17869L8.11614 2.31318L9.39107 2.29705C10.6561 2.28103 10.6668 2.27996 10.7701 2.15403C10.9095 1.98412 10.9029 1.74709 10.7549 1.61116C10.6417 1.50715 10.5715 1.50177 9.37859 1.50581C8.68727 1.50812 8.0848 1.52414 8.03983 1.54139ZM11.8226 2.1143C11.4108 2.52038 11.7028 3.11404 12.3144 3.11404C12.549 3.11404 12.8365 2.8024 12.8365 2.54795C12.8365 1.97762 12.2261 1.7165 11.8226 2.1143ZM13.3975 2.05249C12.9666 2.35311 13.1499 3.02643 13.6813 3.09512C13.8531 3.11732 13.9398 3.09582 14.0901 2.9938C14.1951 2.92259 14.2775 2.82401 14.2735 2.77478C14.2694 2.72549 14.2877 2.69845 14.3143 2.71468C14.3409 2.73086 14.3627 2.64352 14.3627 2.52059C14.3627 2.33801 14.3287 2.26357 14.1774 2.1143C13.9484 1.8885 13.6647 1.86604 13.3975 2.05249ZM6.47596 3.62283C6.3803 3.66385 6.22703 3.79956 6.13529 3.92442L5.96855 4.1514L5.96877 5.87676C5.96894 7.51063 5.97477 7.61152 6.0786 7.77943C6.14363 7.88462 6.21351 7.94138 6.25036 7.91897C6.28884 7.89548 6.29745 7.90505 6.27298 7.94412C6.24763 7.98454 6.31789 8.0449 6.46893 8.11252C6.69236 8.21249 6.8398 8.21792 9.34801 8.21883C11.9423 8.2198 11.9952 8.21771 12.1824 8.10634C12.4474 7.94874 12.5747 7.80453 12.5836 7.65178C12.5878 7.58018 12.6102 7.52154 12.6333 7.52154C12.6565 7.52149 12.6736 6.78013 12.6713 5.87402C12.667 4.11432 12.6636 4.08981 12.3828 3.79102C12.3129 3.71673 12.1887 3.63079 12.1065 3.59999C12.0102 3.56387 11.016 3.54479 9.30359 3.54613C7.16374 3.54785 6.61621 3.56269 6.47596 3.62283ZM13.8351 3.62767C13.7398 3.66879 13.5926 3.79188 13.5081 3.90115L13.3543 4.09986L13.3404 5.82409C13.3266 7.52757 13.328 7.55089 13.4494 7.75933C13.5255 7.88994 13.6638 8.01787 13.8125 8.09526L14.0528 8.22023H16.6792H19.3057L19.5459 8.09532C19.6781 8.02657 19.8414 7.89 19.9088 7.79174C20.0297 7.61561 20.0314 7.58857 20.0314 5.87837V4.14361L19.8541 3.91437C19.7566 3.78828 19.6576 3.6905 19.6341 3.69711C19.6107 3.70373 19.5539 3.67196 19.5078 3.6266C19.4346 3.55447 19.0825 3.54457 16.7163 3.54844C14.529 3.55194 13.9751 3.5672 13.8351 3.62767ZM6.27598 16.1649C6.06269 16.3077 5.91405 16.5665 5.91405 16.7948C5.91405 16.9814 6.02535 17.2663 6.08422 17.2304C6.11202 17.2135 6.13126 17.2196 6.12695 17.244C6.10471 17.3702 6.15115 17.4301 6.34793 17.5291C6.46664 17.5888 6.64684 17.6376 6.74839 17.6376C6.9728 17.6376 7.29194 17.4904 7.24163 17.4101C7.22168 17.3783 7.2304 17.3676 7.26103 17.3862C7.38111 17.4594 7.517 17.205 7.53891 16.866C7.55848 16.563 7.54616 16.5135 7.41218 16.3565C7.10247 15.9936 6.64635 15.9166 6.27598 16.1649ZM8.44864 16.0966C8.24374 16.1885 8.1271 16.3233 8.17981 16.4074C8.2033 16.4448 8.19714 16.4577 8.16525 16.4383C8.09608 16.3961 7.98532 16.6293 7.98532 16.8169C7.98532 16.8949 8.03585 17.0617 8.09761 17.1874C8.40291 17.8093 9.32446 17.747 9.59247 17.0864C9.71075 16.7949 9.62976 16.4834 9.37139 16.2365C9.2203 16.092 9.13728 16.0578 8.90007 16.0423C8.73235 16.0313 8.54392 16.054 8.44864 16.0966ZM16.817 16.085C16.636 16.1563 16.4739 16.3347 16.5213 16.4104C16.5434 16.4455 16.5358 16.4571 16.5037 16.4376C16.4713 16.4178 16.4194 16.5026 16.3809 16.6381C16.3223 16.8445 16.3272 16.9017 16.4218 17.1124C16.6288 17.574 17.1286 17.7565 17.5731 17.5329C17.8228 17.4073 18.0112 17.1005 18.0135 16.8158C18.0153 16.594 17.8167 16.2506 17.6173 16.1308C17.4276 16.0167 17.046 15.9949 16.817 16.085ZM18.9394 16.0692C18.7858 16.1364 18.6336 16.2658 18.5487 16.4014C18.4441 16.5684 18.4118 17.184 18.5106 17.1237C18.554 17.0973 18.5624 17.1062 18.5352 17.1496C18.4863 17.2276 18.6838 17.4524 18.8977 17.5621C19.1536 17.6934 19.7626 17.6127 19.667 17.4602C19.6482 17.4301 19.6601 17.4225 19.694 17.4432C19.8626 17.5459 20.138 16.9731 20.0567 16.6885C20.0327 16.6045 20.008 16.5177 20.0018 16.4955C19.9956 16.4733 19.9875 16.4311 19.9838 16.4017C19.98 16.3724 19.8751 16.2756 19.7507 16.1867C19.5739 16.0605 19.4697 16.026 19.2738 16.0289C19.1359 16.031 18.9855 16.0491 18.9394 16.0692ZM6.0912 25.8591C6.95306 25.8674 8.36344 25.8674 9.22537 25.8591C10.0873 25.8508 9.38208 25.844 7.65828 25.844C5.93449 25.844 5.22933 25.8508 6.0912 25.8591ZM13.4497 25.8591C14.9112 25.8671 17.3027 25.8671 18.7642 25.8591C20.2257 25.8512 19.0299 25.8447 16.1069 25.8447C13.184 25.8447 11.9882 25.8512 13.4497 25.8591ZM5.77778 26.1802C5.47744 26.2558 5.20545 26.5988 5.20545 26.902C5.20545 26.9675 5.25451 27.121 5.31441 27.2431C5.43656 27.4919 5.69509 27.6463 5.98959 27.6463C6.20163 27.6463 6.51047 27.4574 6.60743 27.2684C6.70342 27.0813 6.69345 26.6957 6.58798 26.5197C6.44108 26.2744 6.05179 26.1113 5.77778 26.1802ZM19.8585 26.1794C19.6939 26.2043 19.4431 26.4284 19.3709 26.6151C19.2809 26.848 19.3163 27.1329 19.4589 27.3235C19.9215 27.9418 20.8464 27.5917 20.7784 26.8241C20.7512 26.5164 20.5507 26.2767 20.2526 26.195C20.146 26.1658 20.0464 26.1454 20.0314 26.1497C20.0165 26.1539 19.9386 26.1673 19.8585 26.1794ZM11.126 28.6009L8.89772 28.615L8.71839 28.7622C8.61979 28.8432 8.34126 29.0424 8.09941 29.205C7.85762 29.3676 7.65943 29.5188 7.65899 29.5409C7.65861 29.5631 10.0123 29.581 12.8894 29.5807C15.7665 29.5805 18.1397 29.5833 18.163 29.5871C18.2657 29.6037 18.3962 29.5779 18.3958 29.541C18.3956 29.5188 18.3036 29.4463 18.1914 29.3798C18.0792 29.3132 17.8403 29.1509 17.6604 29.0189C17.0839 28.5959 17.2106 28.6172 15.1803 28.6013C14.176 28.5934 12.3516 28.5933 11.126 28.6009ZM6.33397 30.7127C6.19018 30.8017 6.04301 30.8578 6.00693 30.8374C5.97084 30.817 5.95956 30.8201 5.98185 30.8444C6.03925 30.9068 5.81904 31.0468 5.73679 31.0002C5.6994 30.9789 5.68637 30.9807 5.7079 31.0042C5.74507 31.0448 5.25456 31.3671 5.05447 31.4335C5.00263 31.4507 4.87432 31.5362 4.76939 31.6234L4.57862 31.7821L13.0119 31.7836C20.5909 31.7848 21.4419 31.7766 21.4129 31.7021C21.3952 31.6564 21.3685 31.6311 21.3536 31.6458C21.3386 31.6605 21.2379 31.6132 21.1296 31.5407C21.0214 31.4681 20.9017 31.4088 20.8637 31.4088C20.8257 31.4088 20.7945 31.3874 20.7945 31.3613C20.7945 31.3352 20.7516 31.3 20.6992 31.283C20.6467 31.2661 20.4934 31.188 20.3585 31.1094C20.2236 31.0308 19.9495 30.8726 19.7494 30.7576L19.3856 30.5488L12.9905 30.5498L6.59539 30.5508L6.33397 30.7127Z"
                  fill="black"/>
        </symbol>
    </svg>
<?php endif; ?>
<?php
// Заглушка на время разработки — видят только админы
//global $USER;
//if (!$USER->IsAdmin()) {
//    echo "<p>Страница в разработке</p>";
//    return;
//}
?>


<?php // prr($arResult); ?>
<?php if (!$DEBUG_FORM): ?>
    <section class="uch-detail--hero">
        <div class="uch-detail--hero__ct container-xxl">
            <p class="uch-detail--hero__title">Ступино Квадрат </p>
            <p class="uch-detail--hero__subtitle">Особая экономическая зона</p>
        </div>
    </section>


    <div class="uch-detail--breadcrumb">
        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
        )); ?>
    </div>
<?php endif; ?>
    <section class="uch-detail--product">
        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-6">
                    <?php if (!empty($arResult["PROPERTIES"]["FILES"]["VALUE"])): ?>
                        <div class="uch-detail--product-slider">
                            <div class="uch-detail--product-slider__big js-uch-product-slider-big">
                                <?php foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $file): ?>
                                    <div class="uch-detail--product-slider__slide">
                                        <img src="<?= CFile::GetPath($file); ?>" alt="<?= $arResult["NAME"]; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="uch-detail--product-slider__nav">
                                <div class="uch-detail--product-slider__small js-uch-product-slider-small">
                                    <?php foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $file): ?>
                                        <div class="uch-detail--product-slider__thumb">
                                            <img src="<?= CFile::GetPath($file); ?>" alt="<?= $arResult["NAME"]; ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="uch-detail--product-slider__progress">
                                    <div class="uch-detail--product-slider__progress-bar"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6">
                    <div class="uch-detail--product-info">
                        <h1 class="uch-detail--product-info__title">
                            <?php if (SITE_ID == "s1"): ?>
                                <?= !empty($arResult["PROPERTIES"]["DETAIL_H1_RU"]["VALUE"])
                                    ? $arResult["PROPERTIES"]["DETAIL_H1_RU"]["VALUE"]
                                    : $arResult["NAME"]; ?>
                            <?php else: ?>
                                <?php if (!empty($arResult["PROPERTIES"]["DETAIL_H1_EN"]["VALUE"])): ?>
                                    <?= $arResult["PROPERTIES"]["DETAIL_H1_EN"]["VALUE"]; ?>
                                <?php elseif (!empty($arResult["PROPERTIES"]["TITLE_EN"]["VALUE"])): ?>
                                    <?= $arResult["PROPERTIES"]["TITLE_EN"]["VALUE"]; ?>
                                <?php else: ?>
                                    <?= $arResult["NAME"]; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </h1>
                        <div class="uch-detail--product-info__description">
                            <?php
                            // Получаем UF-поле раздела
                            $sectionId = $arResult["IBLOCK_SECTION_ID"];
                            $resSection = CIBlockSection::GetList(
                                [],
                                ["IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $sectionId],
                                false,
                                ["UF_DESCRIPTION_DETAIL", "UF_DESCRIPTION_DETAIL_EN"]
                            );
                            $sectionData = $resSection->GetNext();
                            ?>
                            <?php if (SITE_ID == "s1"): ?>
                                <?= $sectionData["~UF_DESCRIPTION_DETAIL"]; ?>
                            <?php else: ?>
                                <?= !empty($sectionData["~UF_DESCRIPTION_DETAIL_EN"]) ? $sectionData["~UF_DESCRIPTION_DETAIL_EN"] : $sectionData["~UF_DESCRIPTION_DETAIL"]; ?>
                            <?php endif; ?>
                        </div>
                        <div class="uch-detail--product-info__top-quote">
                            Частный ж/д путь на территории ОЭЗ "Ступино квадрат"
                        </div>
                        <div class="uch-detail--product-info__props">
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Регион:" : "Region:"; ?>
                                </p>
                                <p class="uch-detail--product-info__prop-value">
                                    <?= SITE_ID == "s1" ? "Московская область" : "Moscow region"; ?>
                                </p>
                            </div>
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Удаленность от МКАД:" : "Distance from MKAD:"; ?>
                                </p>
                                <p class="uch-detail--product-info__prop-value">
                                    <?= SITE_ID == "s1" ? "70 км" : "70 km"; ?>
                                </p>
                            </div>
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Шоссе:" : "Highway:"; ?>
                                </p>
                                <p class="uch-detail--product-info__prop-value">
                                    <? if (SITE_ID == "s1"): ?>
                                        Федеральные: М-4 «Дон», Каширское шоссе, А-108 (Московское большое кольцо)
                                        <br>
                                        Региональное: «Ступино — Малино»
                                    <? else: ?>
                                        Federal: M-4 "Don", Kashirskoye highway, A-108 (Moscow big ring)
                                        <br>
                                        Regional: "Stupino — Malino"
                                    <? endif; ?>
                                </p>
                            </div>
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Коммуникации:" : "Utilities:"; ?>
                                </p>
                                <p class="uch-detail--product-info__prop-value">
                                    <?= SITE_ID == "s1"
                                        ? "Электричество, газ, вода, водоотведение и иные инженерные системы"
                                        : "Electricity, gas, water, sewage and other engineering systems"; ?>
                                </p>
                            </div>
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Общая площадь:" : "Total area:"; ?>
                                </p>
                                <p class="uch-detail--product-info__prop-value">
                                    <?= $arResult["PROPERTIES"]["SQUARE"]["VALUE"]; ?>
                                    <?= SITE_ID == "s1" ? "&nbsp;га" : "&nbsp;ha"; ?>
                                </p>
                            </div>
                            <div class="uch-detail--product-info__prop">
                                <p class="uch-detail--product-info__prop-caption">
                                    <?= SITE_ID == "s1" ? "Стоимость приобретения в собственность:" : "Purchase price:"; ?>
                                </p>
                                <button class="uch-detail--product-info__btn more-pop"
                                        data-name='<?php if (SITE_ID == "s1"): ?>
<?= $arResult["NAME"]; ?>
<?php else: ?>
<?= !empty($arResult["PROPERTIES"]["TITLE_EN"]["VALUE"])
                                            ? $arResult["PROPERTIES"]["TITLE_EN"]["VALUE"]
                                            : $arResult["NAME"]; ?>
<?php endif; ?>'>
                                    <?= SITE_ID == "s1" ? "Запросить цену" : "Request price"; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php if (!$DEBUG_FORM): ?>
    <section class="uch-detail--land-use">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <div class="uch-detail--land-use__wr">
                        <p class="uch-detail--land-use__caption">Назначение участка:</p>
                        <?php
                        // ID разделов которые исключаем
                        $excludeSections = []; // например [10, 15] если нужно исключить

                        // Текущий раздел элемента
                        $currentSectionId = $arResult["IBLOCK_SECTION_ID"];

                        // Получаем все разделы инфоблока
                        $resSections = CIBlockSection::GetList(
                            ["SORT" => "ASC", "NAME" => "ASC"],
                            [
                                "IBLOCK_ID" => 56,
                                "ACTIVE" => "Y",
                            ],
                            false,
                            ["ID", "NAME", "SECTION_PAGE_URL", "CODE", "UF_NAME_EN"]
                        );
                        ?>


                        <?php while ($section = $resSections->GetNext()): ?>
                            <?php
                            if (in_array($section["ID"], $excludeSections)) continue;

                            $name = (SITE_ID != "s1" && !empty($section["UF_NAME_EN"]))
                                ? $section["UF_NAME_EN"]
                                : $section["NAME"];

                            $url = "/uchastki/" . $section["CODE"] . "/";
                            ?>

                            <?php if ($section["ID"] == $currentSectionId): ?>
                                <span class="uch-detail--land-use__item is-active"><?= $name; ?></span>
                            <?php else: ?>
                                <a href="<?= $url; ?>" class="uch-detail--land-use__item"><?= $name; ?></a>
                            <?php endif; ?>

                        <?php endwhile; ?>

                    </div>
                    <div class="uch-detail--product-info__bottom-quote">
                        <?php
                        $descRu = $arResult["PROPERTIES"]["DESC_RU"]["~VALUE"];
                        $descEn = $arResult["PROPERTIES"]["DESC_EN"]["~VALUE"];

                        if (is_array($descRu)) $descRu = $descRu["TEXT"];
                        if (is_array($descEn)) $descEn = $descEn["TEXT"];
                        ?>
                        <?php if (SITE_ID == "s1"): ?>
                            <?= $descRu; ?>
                        <?php else: ?>
                            <?= !empty($descEn) ? $descEn : $descRu; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="uch-detail--main-content">
        <section class="uch-detail--infrastructure__wr ln-infrastructure map_wrap is-open" id="map">
            <div class="container-xxl">
                <div class="uch-detail--infrastructure uch-detail--acc-section is-open">

                    <div class="uch-detail--acc-title">
                        <div class="uch-detail--acc-title__icon"></div>
                        <h2 class="uch-detail--acc-title__text">Промышленная инфраструктура</h2>
                    </div>
                    <div class="uch-detail--acc-content">
                        <div class="uch-detail--infrastructure__in">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "uchastki",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_ELEMENT_CHAIN" => "Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "BROWSER_TITLE" => "NAME",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "COLOR_NEW" => "3E74E6",
                                    "COLOR_OLD" => "C0C0C0",
                                    "COMPONENT_TEMPLATE" => "templatemy1",
                                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                    "DETAIL_FIELD_CODE" => array(0 => "PREVIEW_TEXT", 1 => "PREVIEW_PICTURE", 2 => "DETAIL_TEXT", 3 => "DETAIL_PICTURE", 4 => "DATE_ACTIVE_FROM", 5 => "DATE_CREATE", 6 => "",),
                                    "DETAIL_PAGER_SHOW_ALL" => "Y",
                                    "DETAIL_PAGER_TEMPLATE" => "",
                                    "DETAIL_PAGER_TITLE" => "Новости",
                                    "DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "FILES", 2 => "",),
                                    "DETAIL_SET_CANONICAL_URL" => "N",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_AS_RATING" => "rating",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "ELEMENT_CODE" => "",
                                    "ELEMENT_ID" => "",
                                    "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "DETAIL_TEXT", 4 => "DETAIL_PICTURE", 5 => "DATE_CREATE", 6 => "",),
                                    "FILE_404" => "",
                                    "FONT_MAX" => "50",
                                    "FONT_MIN" => "10",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "51",
                                    "IBLOCK_TYPE" => "data_site",
                                    "IBLOCK_URL" => "",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "LIST_FIELD_CODE" => array(0 => "CODE", 1 => "DETAIL_TEXT", 2 => "DETAIL_PICTURE", 3 => "DATE_CREATE", 4 => "",),
                                    "LIST_PROPERTY_CODE" => array(0 => "NAZVANIESSYLKY", 1 => "SSYLKA", 2 => "FILES", 3 => "",),
                                    "MEDIA_PROPERTY" => "",
                                    "MESSAGE_404" => "",
                                    "META_DESCRIPTION" => "-",
                                    "META_KEYWORDS" => "-",
                                    "NEWS_COUNT" => "100",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PERIOD_NEW_TAGS" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(0 => "", 1 => "ADRESS", 2 => "MAP", 3 => "CONTACTS", 4 => "PHONE", 5 => "TIME", 6 => "",),
                                    "SEF_FOLDER" => "/novosti/",
                                    "SEF_MODE" => "Y",
                                    "SEF_URL_TEMPLATES" => array("news" => "", "section" => "", "detail" => "#ELEMENT_CODE#/",),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_CANONICAL_URL" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "Y",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "Y",
                                    "SLIDER_PROPERTY" => "",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "TAGS_CLOUD_ELEMENTS" => "150",
                                    "TAGS_CLOUD_WIDTH" => "100%",
                                    "TEMPLATE_THEME" => "blue",
                                    "USE_CATEGORIES" => "N",
                                    "USE_FILTER" => "N",
                                    "USE_PERMISSIONS" => "N",
                                    "USE_RATING" => "N",
                                    "USE_REVIEW" => "N",
                                    "USE_RSS" => "N",
                                    "USE_SEARCH" => "N",
                                    "USE_SHARE" => "N",
                                )
                            ); ?>
                        </div>


                        <section class="uch-detail--infrastructure-list ln-infrastructure-list">

                            <div class="row">
                                <div class="col-12">
                                    <div class="ln-infrastructure-list__wr">
                                        <div class="ln-infrastructure__slide">
                                            <div class="ln-infrastructure-list__item">
                                                <svg width="22" height="33">
                                                    <use xlink:href="#l-inf-icon-01"></use>
                                                </svg>
                                                <p class="ln-infrastructure-list__caption ln-text-lg ln-text-codensed">
                                                    Электричество:
                                                    <span class="ln-text-blue ln-fw-extrabold">100</span>
                                                    МВт
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ln-infrastructure__slide">
                                            <div class="ln-infrastructure-list__item">
                                                <svg width="26" height="35">
                                                    <use xlink:href="#l-inf-icon-02"></use>
                                                </svg>
                                                <p class="ln-infrastructure-list__caption ln-text-lg ln-text-codensed">
                                                    Газ:
                                                    <span class="ln-text-blue ln-fw-extrabold">55 000</span>
                                                    м<sup>3</sup>/ч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ln-infrastructure__slide">
                                            <div class="ln-infrastructure-list__item">
                                                <svg width="26" height="32">
                                                    <use xlink:href="#l-inf-icon-03"></use>
                                                </svg>
                                                <p class="ln-infrastructure-list__caption ln-text-lg ln-text-codensed">
                                                    Трудовой
                                                    ресурс</p>
                                            </div>
                                        </div>
                                        <div class="ln-infrastructure__slide">
                                            <div class="ln-infrastructure-list__item">
                                                <svg width="26" height="39">
                                                    <use xlink:href="#l-inf-icon-04"></use>
                                                </svg>
                                                <p class="ln-infrastructure-list__caption ln-text-lg ln-text-codensed">
                                                    Водоснабжение:
                                                    <span class="ln-text-blue ln-fw-extrabold">15 000</span>
                                                    м<sup>3</sup>/ч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ln-infrastructure__slide">
                                            <div class="ln-infrastructure-list__item">
                                                <svg width="26" height="32">
                                                    <use xlink:href="#l-inf-icon-05"></use>
                                                </svg>
                                                <p class="ln-infrastructure-list__caption ln-text-lg ln-text-codensed">
                                                    Ж/д
                                                    станция
                                                    на
                                                    территории</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="uch-detail--benefits is-open">
        <div class="container-xxl">
            <div class="uch-detail--benefits__wr">
                <div class="uch-detail--acc-section is-open">
                    <div class="uch-detail--acc-title">
                        <div class="uch-detail--acc-title__icon"></div>
                        <h2 class="uch-detail--acc-title__text">Преференции и льготы ОЭЗ</h2>
                    </div>
                    <div class="uch-detail--acc-content">
                        <div class="uch-detail--benefits__in">
                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "investoru_benefits",
                                array(
                                    "IBLOCK_ID" => 39,
                                    "NEWS_COUNT" => 4,
                                    "CACHE_TYPE" => "N",
                                    "CACHE_TIME" => "3600",
                                    "CACHE_FILTER" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "PROPERTY_CODE" => array(
                                        "LIST",
                                        "LIST2"
                                    ),
                                    "SORT_BY1" => "ID",
                                    "SORT_ORDER1" => "ASC",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "ADD_SECTIONS_CHAIN" => "N"
                                )
                            );
                            ?>
                            <div class="uch-detail--benefits__bottom-text">
                                <p class="uch-detail--benefits__bottom-text_black">Импорт производственных линий и
                                    сырья</p>
                                <p class="uch-detail--benefits__bottom-text_blue">Без НДС и таможенных пошлин</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uch-detail--call">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <div class="uch-detail--call__in">
                        <p>Позвоните <a href="tel:+74951520719">+7 (495) 152-07-19</a>, и получите ответы на все
                            Ваши
                            вопросы!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uch-detail--related">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <h2 class="nms-title uch-detail--related__title">
                        Похожие участки
                    </h2>
                    <?php
                    $relatedItems = [];
                    $resRelated = CIBlockElement::GetList(
                        ["SORT" => "ASC"],
                        [
                            "IBLOCK_ID" => 56,
                            "SECTION_ID" => $arResult["IBLOCK_SECTION_ID"],
                            "ACTIVE" => "Y",
                            "!ID" => $arResult["ID"],
                        ],
                        false,
                        false,
                        ["ID", "NAME", "CODE", "IBLOCK_ID", "IBLOCK_SECTION_ID",
                            "PROPERTY_FILES", "PROPERTY_DESC_RU", "PROPERTY_DESC_EN",
                            "PROPERTY_TITLE_EN", "PROPERTY_SQUARE"]
                    );

                    while ($item = $resRelated->Fetch()) {
                        $relatedItems[$item["ID"]]["ID"] = $item["ID"];
                        $relatedItems[$item["ID"]]["NAME"] = $item["NAME"];
                        $relatedItems[$item["ID"]]["CODE"] = $item["CODE"];

                        // FILES множественное — собираем все значения
                        if (!empty($item["PROPERTY_FILES_VALUE"])) {
                            $relatedItems[$item["ID"]]["FILES"][] = $item["PROPERTY_FILES_VALUE"];
                        }

                        if (!empty($item["PROPERTY_DESC_RU_VALUE"]) && !empty($item["PROPERTY_DESC_RU_VALUE"]["TEXT"])) {
                            $relatedItems[$item["ID"]]["DESC_RU"] = $item["PROPERTY_DESC_RU_VALUE"]["TEXT"];
                        }
                        if (!empty($item["PROPERTY_DESC_EN_VALUE"]) && !empty($item["PROPERTY_DESC_EN_VALUE"]["TEXT"])) {
                            $relatedItems[$item["ID"]]["DESC_EN"] = $item["PROPERTY_DESC_EN_VALUE"]["TEXT"];
                        }
                        if (!empty($item["PROPERTY_TITLE_EN_VALUE"]) && !empty($item["PROPERTY_TITLE_EN_VALUE"]["TEXT"])) {
                            $relatedItems[$item["ID"]]["TITLE_EN"] = $item["PROPERTY_TITLE_EN_VALUE"]["TEXT"];
                        }

                    }

                    // Получаем CODE раздела для URL
                    $sectionRes = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
                    $sectionData = $sectionRes->GetNext();
                    $sectionCode = $sectionData["CODE"];
                    ?>

                    <?php if (!empty($relatedItems)): ?>
                        <div class="uch-detail--related__slider js-related-slider">
                            <?php foreach ($relatedItems as $rel): ?>
                                <?php
                                // Название
                                $relName = (SITE_ID != "s1" && !empty($rel["TITLE_EN"]))
                                    ? $rel["TITLE_EN"]
                                    : $rel["NAME"];

                                // Описание
                                if (SITE_ID == "s1") {
                                    $relDesc = !empty($rel["DESC_RU"]) ? $rel["DESC_RU"] : "";
                                } else {
                                    $relDesc = !empty($rel["DESC_EN"])
                                        ? $rel["DESC_EN"]
                                        : (!empty($rel["DESC_RU"]) ? $rel["DESC_RU"] : "");
                                }

                                // Картинка — первая из FILES
                                $relImg = "";
                                if (!empty($rel["FILES"])) {
                                    $relImg = CFile::GetPath($rel["FILES"][0]);
                                }

                                // Ссылка
                                $relUrl = "/uchastki/" . $sectionCode . "/" . $rel["CODE"] . "/";
                                if (SITE_ID != "s1") {
                                    $relUrl = "/en" . $relUrl;
                                }

                                $linkText = (SITE_ID == "s1") ? "Подробнее" : "Learn more";
                                ?>
                                <div class="uch-detail--related__item">
                                    <?php if ($relImg): ?>
                                        <img src="<?= $relImg; ?>" alt="<?= $relName; ?>"
                                             class="uch-detail--related__img">
                                    <?php endif; ?>
                                    <p class="uch-detail--related__caption"><?= $relName; ?></p>
                                    <?php if ($relDesc): ?>
                                        <p class="uch-detail--related__desc"><?= $relDesc; ?></p>
                                    <?php endif; ?>
                                    <a href="<?= $relUrl; ?>"
                                       class="uch-detail--related__link"><?= $linkText; ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="nms-nms-faq nms-section-pd uch-detail__faq">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <h2 class="nms-title uch-detail__faq__title">Часто задаваемые вопросы</h2>
                    <?php
                    $faqQuestions = $arResult["PROPERTIES"]["FAQ_Q"]["VALUE"];
                    $faqAnswers = $arResult["PROPERTIES"]["FAQ_A"]["~VALUE"];
                    ?>

                    <?php if (!empty($faqQuestions) && is_array($faqQuestions)): ?>

                        <div class="nms-faq__list row" id="nms-faqAccordion">


                            <?php foreach ($faqQuestions as $index => $question): ?>
                                <?php
                                if (empty($question)) continue;

                                $answer = "";
                                if (isset($faqAnswers[$index])) {
                                    $answer = is_array($faqAnswers[$index])
                                        ? $faqAnswers[$index]["TEXT"]
                                        : $faqAnswers[$index];
                                }

                                $collapseId = "collapse" . $index;
                                $headingId = "heading" . $index;
                                $isFirst = ($index === 0);
                                ?>
                                <div class="col-12">
                                    <div class="nms-faq__item">
                                        <div class="nms-faq__question accordion-header" id="<?= $headingId; ?>">
                                            <button class="accordion-button <?= !$isFirst ? 'collapsed' : ''; ?>"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#<?= $collapseId; ?>"
                                                    aria-expanded="<?= $isFirst ? 'true' : 'false'; ?>"
                                                    aria-controls="<?= $collapseId; ?>">
                                                <?= htmlspecialchars($question); ?>
                                            </button>
                                            <div class="nms-faq__icon">
                                                <span class="d-block">?</span>
                                            </div>
                                        </div>
                                        <div id="<?= $collapseId; ?>"
                                             class="accordion-collapse collapse <?= $isFirst ? 'show' : ''; ?>"
                                             aria-labelledby="<?= $headingId; ?>"
                                             data-bs-parent="#nms-faqAccordion">
                                            <div class="nms-faq__answer accordion-body">
                                                <?= $answer; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php if (!$DEBUG_FORM): ?>
<div class="uch-detail--feedback">
    <div class="container-xxl">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:form",
            "form_uch_detail",
            array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "COMPONENT_TEMPLATE" => "form",
                "EDIT_ADDITIONAL" => "N",
                "EDIT_STATUS" => "Y",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "NOT_SHOW_FILTER" => array(0 => "", 1 => "",),
                "NOT_SHOW_TABLE" => array(0 => "", 1 => "",),
                "RESULT_ID" => "",
                "SEF_MODE" => "N",
                "SHOW_ADDITIONAL" => "N",
                "SHOW_ANSWER_VALUE" => "N",
                "SHOW_EDIT_PAGE" => "N",
                "SHOW_LIST_PAGE" => "N",
                "SHOW_STATUS" => "Y",
                "SHOW_VIEW_PAGE" => "N",
                "START_PAGE" => "new",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "Y",
                "VARIABLE_ALIASES" => array("action" => "action",),
                "WEB_FORM_ID" => "8",
                "YM_GOAL" => "uch_detail_submit"
            )
        ); ?>
    </div>
</div>
<?php endif; ?>
    <?php $APPLICATION->IncludeComponent(
        "bitrix:form",
        "sales_form_invest_modal",
        array(
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHAIN_ITEM_LINK" => "",
            "CHAIN_ITEM_TEXT" => "",
            "COMPONENT_TEMPLATE" => "form",
            "EDIT_ADDITIONAL" => "N",
            "EDIT_STATUS" => "Y",
            "IGNORE_CUSTOM_TEMPLATE" => "N",
            "NOT_SHOW_FILTER" => array(0 => "", 1 => "",),
            "NOT_SHOW_TABLE" => array(0 => "", 1 => "",),
            "RESULT_ID" => "",
            "SEF_MODE" => "N",
            "SHOW_ADDITIONAL" => "N",
            "SHOW_ANSWER_VALUE" => "N",
            "SHOW_EDIT_PAGE" => "N",
            "SHOW_LIST_PAGE" => "N",
            "SHOW_STATUS" => "Y",
            "SHOW_VIEW_PAGE" => "N",
            "START_PAGE" => "new",
            "SUCCESS_URL" => "",
            "USE_EXTENDED_ERRORS" => "Y",
            "VARIABLE_ALIASES" => array("action" => "action",),
            "WEB_FORM_ID" => "4",
            "TITLE" => (SITE_ID == "s1") ? "Запросить цену" : "Request price",
        )
    ); ?>

