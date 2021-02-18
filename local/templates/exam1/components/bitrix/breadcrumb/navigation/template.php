<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult))
    return "";
$strReturn = '';


$strReturn .= '<div class="breadcrumbs-box">
            <div class="inner-wrap">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<i class="fa fa-angle-right"></i>' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">
					' . $title . '
				</a>';
    } else {
        $strReturn .= '
				<span>' . $title . '</span>
			';
    }
}

$strReturn .= '</div></div>';

return $strReturn;
