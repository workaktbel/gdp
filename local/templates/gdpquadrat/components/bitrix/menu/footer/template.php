<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="footer_menu">
    <?foreach($arResult as $key => $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
        continue;
    ?>
        <?if($key == 0):?>
            <li><a class="tn-atom" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?elseif($key==1):?>
            <li><a class="tn-atom" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?elseif($key == 2):?>
            <li><a class="tn-atom" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?elseif($key == 3):?>
            <li><a class="tn-atom" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li> <a class="tn-atom" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif;?>
    <?endforeach;?>
    </ul>
<?endif;?>
