<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="nms-news__slider nms-slider-slider">
        <?php foreach ($arResult["ITEMS"] as $item):
            // Форматируем дату
            $date = '';
            if (!empty($item["ACTIVE_FROM"])) {
                $timestamp = MakeTimeStamp($item["ACTIVE_FROM"]);
                $date = FormatDate("j F Y", $timestamp);
            }
            ?>
            <div class="nms-news__slide">
                <div class="nms-news__item">
                    <?php if (!empty($item["PREVIEW_PICTURE"]["SRC"])): ?>
                        <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $item["NAME"] ?>"
                             class="nms-news__img">
                    <?php endif; ?>

                    <div class="nms-news__info">
                        <p class="nms-news__caption"><?= $item["NAME"] ?></p>
                        <p class="nms-news__introtext"><?= $item["PREVIEW_TEXT"] ?></p>

                        <div class="nms-news__item-bottom">
                            <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="nms-news__link">Подробнее</a>
                            <div class="nms-news__date">
                                <svg width="24" height="24">
                                    <use xlink:href="#icon-calendar"></use>
                                </svg>
                                <span><?= $date ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>