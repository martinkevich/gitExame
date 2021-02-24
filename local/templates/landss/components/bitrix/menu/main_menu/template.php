<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)):
    ?>

    <div class="container">
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <? foreach ($arResult as $arItem): ?>
                        <? if (($arItem["PERMISSION"] > "D") && $arItem["DEPTH_LEVEL"] === 1) : ?>
                            <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                        <? endif ?>
                    <? endforeach ?>

                </ul>
            </nav>
        </div>
    </div>
<? endif ?>