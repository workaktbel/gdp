<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// prr($arResult);
$depth = 1;
$parent = 0;
?>

<?if (!empty($arResult)):?>
    <div class="menu_top">
        <ul>
            <? foreach($arResult as $key => $arItem): ?>
			
			<?
				$class = "";
				if ($arItem["SELECTED"]) $class .= "opened ";
				if ($arItem["PARAMS"]["IS_PARENT"] == 1) $class .= "dropdown ";
				$notParent = false;
				if ( $arItem["PARAMS"]["IS_PARENT"] == 0 && $arItem["PARAMS"]["DEPTH_LEVEL"] == 1 ) $notParent = true;
			?>
			
				<? if ( $notParent && $depth == 1): ?>
					<li class="<?=$class;?>">
						<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					</li>
				<? elseif ( $notParent && $depth == 2): ?>
						</div>
					</li>
					<li class="<?=$class;?>">
						<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					</li>
				<? elseif ( !$notParent && $arItem["PARAMS"]["DEPTH_LEVEL"] == 1 && $depth == 1): ?>
					<li class="<?=$class;?>">
						<a><?=$arItem["TEXT"]?></a>
						<div class="dropdown-menu">
				<? elseif ( !$notParent && $arItem["PARAMS"]["DEPTH_LEVEL"] == 1 && $depth == 2): ?>
						</div>
					</li>
					<li class="<?=$class;?>">
						<a><?=$arItem["TEXT"]?></a>
						<div class="dropdown-menu">
				<? elseif ( $arItem["PARAMS"]["DEPTH_LEVEL"] == 2): ?>
							<a href="<?=$arItem["LINK"]?>" class="<?= ($arItem["PARAMS"]["ANIMATION"] ? "menuAnimation":"");?>"><?=$arItem["TEXT"]?></a>
				<?endif;?>
				
				<?
					$depth = $arItem["PARAMS"]["DEPTH_LEVEL"];
					$parent = $arItem["PARAMS"]["IS_PARENT"];
				?>
				
            <?endforeach;?>
			<? if ( $depth == 2): ?>
						</div>
					</li>
			<?endif;?>
        </ul>
    </div>
<?endif?>
