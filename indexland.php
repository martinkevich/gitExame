<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная title");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "listmain", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "ID",
        2 => "CODE",
        3 => "XML_ID",
        4 => "NAME",
        5 => "TAGS",
        6 => "SORT",
        7 => "PREVIEW_TEXT",
        8 => "PREVIEW_PICTURE",
        9 => "DETAIL_TEXT",
        10 => "DETAIL_PICTURE",
        11 => "DATE_ACTIVE_FROM",
        12 => "ACTIVE_FROM",
        13 => "DATE_ACTIVE_TO",
        14 => "ACTIVE_TO",
        15 => "SHOW_COUNTER",
        16 => "SHOW_COUNTER_START",
        17 => "IBLOCK_TYPE_ID",
        18 => "IBLOCK_ID",
        19 => "IBLOCK_CODE",
        20 => "IBLOCK_NAME",
        21 => "IBLOCK_EXTERNAL_ID",
        22 => "DATE_CREATE",
        23 => "CREATED_BY",
        24 => "CREATED_USER_NAME",
        25 => "TIMESTAMP_X",
        26 => "MODIFIED_BY",
        27 => "USER_NAME",
        28 => "",
    ),
    "FILTER_NAME" => "",	// Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "8",	// Код информационного блока
    "IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "20",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
),
    false
);?>
<!-- Feature Section End -->

<!-- About Section Begin -->
<section class="home-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <h2>WELCOME TO CROSSFIT</h2>
                    <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                        everyday men.</p>
                    <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                        the population here in North America, that actually want and need success to be hard! For
                        those of you who are serious about having more, doing more, giving more and being more.</p>
                    <a href="#" class="primary-btn about-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/home-about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Classes Section Begin -->
<section class="classes-section">
    <div class="class-title set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/classes-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                        <h2><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "include/titleindex.php"
                                )
                            );?></h2>
                        <p><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "include/text1index.php"
                                )
                            );?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/classes/class-1.jpg">
                    <h4>Crossfit Level 1</h4>
                    <p>Sufferers around the globe will be happy to hear that there are sleep apnea remedies.</p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/classes/class-2.jpg">
                    <h4>BootCamp</h4>
                    <p>The oil, also called linseed oil, has many industrial uses – it is an important ingredient
                    </p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/classes/class-3.jpg">
                    <h4>Energy Blast</h4>
                    <p>It is a very common occurrence like cold or fever depending upon your lifestyle. </p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/classes/class-4.jpg">
                    <h4>CLASSIC BODY BALANCE</h4>
                    <p>The procedure is usually a preferred alternative to photorefractive keratectomy,</p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Classes Section End -->

<!-- Class Time Section Begin -->
<section class="classtime-section class-time-table spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Classtime Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timetable-controls">
                    <ul>
                        <li class="active" data-tsfilter="all">all class</li>
                        <li data-tsfilter="crossfit">crossfit</li>
                        <li data-tsfilter="lunge">lunge ball</li>
                        <li data-tsfilter="ppsr">ppsr</li>
                        <li data-tsfilter="walls">walls</li>
                        <li data-tsfilter="candy">candy</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="classtime-table">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="workout-time">10.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>10.00 - 14.00</span>
                        <h6>Crossfit lv1</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>10.00 - 15.00</span>
                        <h6>Crossfit lv1</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>10.00 - 13.00</span>
                        <h6>Lunge Ball Bur</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>10.00 - 13.30</span>
                        <h6>Lunge Ball Bur</h6>
                    </td>
                </tr>
                <tr>
                    <td class="workout-time">14.00</td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>14.00 - 17.00</span>
                        <h6>Lunge Ball Bur</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>14.00 - 17.00</span>
                        <h6>Crossfit lv1</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>14.00 - 15.30</span>
                        <h6>Walls to Knees</h6>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="workout-time">16.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>16.00 - 18.00</span>
                        <h6>Lunge Ball Bur</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="candy">
                        <span>16.00 - 19.00</span>
                        <h6>Candy</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="candy">
                        <span>16.00 - 19.00</span>
                        <h6>Candy</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="ppsr">
                        <span>16.00 - 17.00</span>
                        <h6>Ppsr</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="murph">
                        <span>16.00 - 20.00</span>
                        <h6>murph</h6>
                    </td>
                </tr>
                <tr>
                    <td class="workout-time">18.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>18.00 - 20.00</span>
                        <h6>Walls to Knees</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="ppsr">
                        <span>18.00 - 20.00</span>
                        <h6>ppsr</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="chelsea">
                        <span>18.00 - 22.00</span>
                        <h6>Chelsea</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="annie">
                        <span>18.00 - 22.00</span>
                        <h6>annie</h6>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="workout-time">20.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>21.00 - 23.00</span>
                        <h6>Lunge Ball Bur</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>20.00 - 22.00</span>
                        <h6>Walls to Knees</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>20.30 - 23.00</span>
                        <h6>Walls to Knees</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>22.00 - 23.00</span>
                        <h6>Crossfit Lv2</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>21.00 - 23.00</span>
                        <h6>Crossfit Lv2</h6>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Class Time Section End -->

<!-- Price Plan Section Begin -->
<section class="price-section spad set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/price-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CHOOSE YOUR PRICING PLAN</h2>
                    <p>These reports started to surface when Congress was having hearings about the<br />
                        painkiller, Vioxx. A Food and Drug Administration staff member.</p>
                </div>
                <div class="toggle-option">
                    <ul>
                        <li>Monthly</li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </li>
                        <li>Years</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Normal</h4>
                    <div class="price-plan">
                        <h2>55 <span>$</span></h2>
                        <p>Monthly</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>1 classes per week</li>
                        <li>FREE drinking package</li>
                        <li>1 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Professional</h4>
                    <div class="price-plan">
                        <h2>95 <span>$</span></h2>
                        <p>Monthly</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>2 classes per week</li>
                        <li>FREE drinking package</li>
                        <li>2 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>
                    <div class="tic-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Advanced</h4>
                    <div class="price-plan">
                        <h2>165 <span>$</span></h2>
                        <p>Monthly</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>6 classes per week</li>
                        <li>FREE drinking package</li>
                        <li>5 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Price Plan Section End -->

<!-- Choseus Section Begin -->
<section class="chooseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Why People Choose Us</h2>
                    <p>Our sport experts and latest sports equipment are the winning combination.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-1.png" alt="">
                    <h5>Support 24/24</h5>
                    <p>One of the best ways to make a great vacation quickly horrible is to choose the wrong
                        accommodations for your trip. </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-2.png" alt="">
                    <h5>Our trainer</h5>
                    <p>If you are an infrequent traveler you may need some tips to keep the wife happy while you are
                        jet setting around the globe.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-3.png" alt="">
                    <h5>Personalized sessions</h5>
                    <p>To succeed at any endeavor, you must stay the course…no matter what the cost! Here are some
                        surefire tips to help you on your journey.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-4.png" alt="">
                    <h5>Our equipment</h5>
                    <p>Rugby and Stratford-upon-Avon. Additionally, there are many things to see and do in and
                        around Coventry itself.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-5.png" alt="">
                    <h5>Classes daily</h5>
                    <p>We would just not have the will in us to go about our daily lives. Its motivation that helps
                        us get through the most mundane.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/chose-icon-6.png" alt="">
                    <h5>Focus on your health</h5>
                    <p>But there is only so far we can go within the constraints of a family budget in building the
                        perfect telescopic operation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choseus Section End -->

<!-- Video Section Begin -->
<section class="video-section set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/video-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-text">
                    <h2>Gym In Dowtown New York</h2>
                    <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-btn video-popup">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>From Our Blog</h2>
                    <p>List of all news and events that take place related to us</p>
                </div>
            </div>
        </div>
        <div class="row blog-gird">
            <div class="grid-sizer"></div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item large-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/blog/blog-1.jpg">
                    <a href="#" class="blog-text">
                        <div class="categories">Gym & Croosfit</div>
                        <h5>Many people sign up for affiliate programs</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item instagram-item">
                    <a href="#" class="instagram-text">
                        <div class="categories">Gym & Croosfit <i class="fa fa-instagram"></i></div>
                        <h5>Follow Our Classes Gyming on Instagram # BodyBuilding # photo</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item small-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/blog/blog-2.jpg">
                    <a href="#" class="blog-text">
                        <div class="categories">Gym & Croosfit</div>
                        <h5>Does Hydroderm Work</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item large-item xls-large set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/blog/blog-3.jpg">
                    <a href="#" class="blog-text">
                        <div class="categories">Gym & Croosfit</div>
                        <h5>Many people sign up for affiliate programs</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item large-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/blog/blog-4.jpg">
                    <a href="#" class="blog-text">
                        <div class="categories">Gym & Croosfit</div>
                        <h5>Many people sign up for affiliate programs</h5>
                    </a>
                    <div class="play-btn">
                        <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-in-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item">
                <div class="blog-item small-item set-bg" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/blog/blog-5.jpg">
                    <a href="#" class="blog-text">
                        <div class="categories">Gym & Croosfit</div>
                        <h5>Your Antibiotic One Day To 10 Day Options</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Cta Section Begin -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-text">
                    <h3>GeT Started Today</h3>
                    <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p>
                </div>
                <a href="#" class="primary-btn cta-btn">book now</a>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End -->

<!-- Map Section Begin -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd" height="590" style="border: 0" allowfullscreen=""></iframe>
    <div class="map-contact-detalis">
        <div class="open-time">
            <h5>Weekday:</h5>
            <ul>
                <li>Weekday: <span>06:30 - 11:00</span></li>
                <li>Saturday: <span>07:00 - 22:00</span></li>
                <li>Sunday: <span>09:00 - 18:00</span></li>
            </ul>
        </div>
        <div class="map-contact-form">
            <h5>Contact Us</h5>
            <form action="#">
                <input type="text" placeholder="Name">
                <input type="text" class="phone" placeholder="Phone">
                <textarea placeholder="Message"></textarea>
                <button type="submit" class="site-btn">Submit Now</button>
            </form>
        </div>
    </div>
</div>
<!-- Map Section End -->
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>