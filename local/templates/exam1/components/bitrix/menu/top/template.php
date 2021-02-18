<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult["ALL_ITEMS"])) {
    return;
}
//color_link

?>
<div class="menu popup-block">
    <ul>
        <li class="main-page"><a href="/">Главная</a>
            <? foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns): ?> <!-- first level-->
        <?  $color_prop = trim($APPLICATION->GetDirProperty("color_link", $arResult["ALL_ITEMS"][$itemID]['LINK'])); ?>
        <li >

            <a class="<?=$color_prop?>"
                    href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>"
            >
                <?= $arResult["ALL_ITEMS"][$itemID]["TEXT"] ?>
            </a>
            <? if (is_array($arColumns) && count($arColumns) > 0): ?>

                <? foreach ($arColumns as $key => $arRow): ?>
                    <ul>
                        <?
                        $text_prop = trim($APPLICATION->GetDirProperty("text_menu_top_menu", $arResult["ALL_ITEMS"][$itemID]['LINK']));
                        if (!empty($text_prop)) {
                            ?>
                            <div class="menu-text"><?= $text_prop ?></div>
                        <? } ?>
                        <? foreach ($arRow as $itemIdLevel_2 => $arLevel_3): ?>  <!-- second level-->
                            <li>
                                <a
                                        href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"] ?>"
                                >
                                    <?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"] ?>
                                </a>
                                <? if (is_array($arLevel_3) && count($arLevel_3) > 0): ?>
                                    <ul>
                                        <? foreach ($arLevel_3 as $itemIdLevel_3): ?>    <!-- third level-->
                                            <li>
                                                <a
                                                        href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"] ?>"

                                                >
                                                    <?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"] ?>
                                                </a>
                                            </li>
                                        <? endforeach; ?>
                                    </ul>
                                <? endif ?>
                            </li>
                        <? endforeach; ?>
                    </ul>
                <? endforeach; ?>

            <? endif ?>
        </li>
        <? endforeach; ?>
    </ul>
</div>
