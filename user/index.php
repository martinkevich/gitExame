<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:blog.user",
	"",
	Array(
		"BLOG_VAR" => "",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"ID" => $id,
		"PAGE_VAR" => "",
		"PATH_TO_BLOG" => "",
		"PATH_TO_SEARCH" => "",
		"PATH_TO_USER" => "",
		"PATH_TO_USER_EDIT" => "",
		"SET_TITLE" => "Y",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USER_PROPERTY" => array(),
		"USER_VAR" => ""
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "?register=yes",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => "?forgot_password=yes"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>