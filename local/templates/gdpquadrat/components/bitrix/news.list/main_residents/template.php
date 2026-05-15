<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="nms-residents__slider nms-slider-slider">
        <?php foreach ($arResult["ITEMS"] as $index => $item): ?>
        <div class="nms-residents__slide">

            <div class="nms-residents__item">

                <p class="nms-residents__caption d-lg-none"><?= $item["NAME"] ?></p>
                <p class="nms-residents__desc d-lg-none"><?= $item["PREVIEW_TEXT"] ?></p>
                <div class="nms-residents__info order-2 order-lg-0">
                    <p class="nms-residents__caption d-none d-lg-block"><?= $item["NAME"] ?></p>
                    <p class="nms-residents__desc d-none d-lg-block"><?= $item["PREVIEW_TEXT"] ?></p>

                    <?php
                    $cards = $item["PROPERTIES"]["MAIN_CARDS"]["VALUE"];
                    if (!empty($cards)):
                        ?>
                        <div class="nms-residents__list">
                            <?php foreach ($cards as $card):
                                $parts = explode('|', $card);
                                $value = trim($parts[0] ?? '');
                                $unit  = trim($parts[1] ?? '');
                                $desc  = trim($parts[2] ?? '');
                                ?>
                                <div class="nms-residents__list-item">
                                    <p class="nms-residents__num"><?= $value ?> <span><?= $unit ?></span></p>
                                    <p class="nms-residents__list-caption"><?= $desc ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="nms-residents__img">
                    <div class="nms-residents__index"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></div>
                    <?php if (!empty($item["PREVIEW_PICTURE"]["SRC"])): ?>
                        <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= htmlspecialchars($item["NAME"]) ?>">
                    <?php endif; ?>
                </div>


            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>