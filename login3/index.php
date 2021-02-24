<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("login3");

?><?
if ($_GET['for_pass'] === 'yes') {
    $APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "forgpass", array(
        "AUTH_AUTH_URL" => "",    // Страница для авторизации
        "AUTH_REGISTER_URL" => "?reg=yes",    // Страница для регистрации
        "COMPONENT_TEMPLATE" => ".default"
    ),
        false
    );
} elseif ($_GET['reg'] === 'yes') {
    prent($_GET);
    $APPLICATION->IncludeComponent(
        "bitrix:main.register",
        "myreg",
        array(
            "AUTH" => "Y",
            "REQUIRED_FIELDS" => array("EMAIL", "TITLE", "NAME"),
            "SET_TITLE" => "Y",
            "SHOW_FIELDS" => array("EMAIL", "TITLE", "NAME"),
            "SUCCESS_PAGE" => "",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "Y"
        )
    );

} elseif ($_GET['auth'] === 'yes') {
    prent($_GET);
    $APPLICATION->IncludeComponent("bitrix:main.auth.form", "myauth3", array(
        "AUTH_FORGOT_PASSWORD_URL" => "?for_pass=yes",    // Страница для восстановления пароля
        "AUTH_REGISTER_URL" => "?reg=yes",    // Страница для регистрации
        "AUTH_SUCCESS_URL" => "/login3/",    // Страница после успешной авторизации
    ),
        false
    );
} else {
    $APPLICATION->IncludeComponent(
        "bitrix:blog.user",
        "profile",
        array(
            "COMPONENT_TEMPLATE" => "profile",
            "ID" => $USER->GetID(),
            "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
            "USER_CONSENT" => "N",
            "USER_CONSENT_ID" => "0",
            "USER_CONSENT_IS_CHECKED" => "Y",
            "USER_CONSENT_IS_LOADED" => "N",
            "PATH_TO_BLOG" => "",
            "PATH_TO_USER" => "",
            "PATH_TO_USER_EDIT" => "",
            "PATH_TO_SEARCH" => "",
            "SET_TITLE" => "Y",
            "USER_PROPERTY" => array(),
            "BLOG_VAR" => "",
            "PAGE_VAR" => "",
            "USER_VAR" => ""
        ),
        false
    );

}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>