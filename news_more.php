<?php
require_once 'include/database.php';
require_once 'include/functions.php';
$lng;
if (isset($_GET['lng'])) $lng = $_GET['lng'];
else $lng = 'ru';
$lng = strtoupper($lng);
$titles = get_titles($link, $lng);
$ftitle;
foreach ($titles as $title) {
    $ftitle[$title["Number"]] = $title["Text"];
}
$pos = $_GET['pos'];
$text;
$img;
$news = get_curent_news($link, $pos);
foreach ($news as $new) {
    if ($new['Lng_news'] == strtolower($lng)) {
        $text[0] = $new['title_news'];
        $text[1] = $new['opisanie_news'];
        $text[2] = $new['napravlenia_news'];
        $text[3] = date("d-m-Y H:i", strtotime($new['date_reliz_news']));
        $img[0] = $new['img_news'];
    }
}
$imgs = get_img_news($link, $pos);
$i = 1;
foreach ($imgs as $im) {
    $img[$i] = $im['img_more_news'];
    $i++;
}

$news = get_index_news($link, $lng, 4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link rel="stylesheet" href="css/slider-pro.css" />
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
    <title>Regulus Robotics Machine</title>
</head>

<body class="news_body">
    <div class="preloader">
        <div class="stars_window">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </div>
        <div class="logo_block Loader">
            <img class="preloader_logo_img" src="img/preloader_logo.png" alt="">
            <h2>Regulus Robotics Machine</h2>
        </div>
    </div>
    <div class="stars_window">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>
    <header class="news_header">
        <div class="header_bg overflow_hidden">
            <img class="spectr" src="img/bg_spectr.png" alt="">
            <div class="container">
                <div class="header_nav news_nav">
                    <div class="shadow_up"></div>
                    <div class="container">
                        <nav>
                            <a class="logo_link" href="index.php">
                                <img class="logo logo_light" src="img/logo_light.png" alt="Regulus Robotics Machine Logo">
                                <img class="logo logo_color" src="img/logo.png" alt="Regulus Robotics Machine Logo">
                            </a>
                            <ul>
                                <a href="index.php?iac=1">
                                    <li><?php print($ftitle["16"]); ?></li>
                                </a>
                                <a href="index.php?iac=3">
                                    <li><?php print($ftitle["17"]); ?></li>
                                </a>
                                <a href="index.php?iac=4">
                                    <li><?php print($ftitle["18"]); ?></li>
                                </a>
                                <a href="index.php?iac=5">
                                    <li><?php print($ftitle["19"]); ?></li>
                                </a>
                                <a href="index.php?iac=7">
                                    <li><?php print($ftitle["20"]); ?></li>
                                </a>
                                <a href="https://robotprostore.kz/">
                                    <li><?php print($ftitle["21"]); ?></li>
                                </a>
                                <a href="index.php?iac=9">
                                    <li><?php print($ftitle["22"]); ?></li>
                                </a>
                            </ul>
                            <div class="soc">
                                <a href="https://www.instagram.com/robotprostore/" class="soc">
                                    <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <path d="M505,257c0,34.8-0.7,69.7,0.2,104.5c1.5,61.6-37.2,109.2-86.5,130.4c-19.8,8.5-40.6,13-62.1,13c-67.3,0.1-134.7,1-202-0.3   c-50.7-1-92.4-22.2-122.3-64c-15.7-22-23.2-47-23.2-74.1c0-71.7,0-143.3,0-215c0-58.5,28.5-99.4,79.1-126C110.2,14,134.1,9.1,159,9   c65.3,0,130.7-0.4,196,0.2c50.7,0.4,93,19.8,124.2,60.6c17.4,22.8,25.8,49,25.8,77.8C505,184,505,220.5,505,257z M46,257   c0,36.7,0,73.3,0,110c0,16.4,3.8,31.8,12.3,45.7c22.3,36.5,56,54.3,97.8,55c67.1,1,134.3,0.4,201.5,0.2c16.5,0,32.5-3.4,47.4-10.5   c40.6-19.4,63.3-50.3,63.1-96.7c-0.4-71-0.1-142-0.1-213c0-20.1-5.7-38.5-17.6-54.7c-23-31.1-54.8-46.4-92.8-46.8   c-67-0.8-134-0.3-201-0.2c-14.3,0-28.1,2.9-41.5,7.9c-36.8,13.7-71,48.4-69.4,99.5C46.9,188,46,222.5,46,257z" />
                                            <path d="M257.6,363c-64.5,0-116.5-51.4-116.6-115.4c-0.1-63,52.3-114.6,116.4-114.6c64.3-0.1,116.5,51.4,116.6,114.9   C374,311.3,321.9,362.9,257.6,363z M257.6,326c43.9,0,79.5-35.1,79.4-78.3c-0.1-42.8-35.7-77.8-79.4-77.8   c-43.9,0-79.7,34.9-79.7,78C178,291.1,213.7,326.1,257.6,326z" />
                                            <path d="M387.5,98c13.5,0,24.5,11.5,24.5,25.6c-0.1,14.1-11.2,25.5-24.7,25.4c-13.3-0.1-24.2-11.5-24.2-25.3   C363,109.6,374,98,387.5,98z" />
                                        </g>
                                    </svg>
                                </a>
                                <a href="https://api.whatsapp.com/send/?phone=77018002178" class="soc">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                        <g>
                                            <path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522
                                                c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982
                                                c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537
                                                c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938
                                                c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537
                                                c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333
                                                c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882
                                                c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977
                                                c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344
                                                c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223
                                                C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z" />
                                        </g>
                                    </svg>
                                </a>
                                <div id="lang_selector" class="language-dropdown">
                                    <label for="toggle" class="lang-flag lang-<?php print(strtolower($lng)); ?>" title="Click to select the language">
                                        <span class="flag"></span>
                                    </label>
                                    <ul class="lang-list">
                                        <li class="lang lang-ru <?php if ($lng == 'RU') print('selected'); ?>" title="RU">
                                            <a href="/news_more.php?lng=ru&pos=<?php print($pos); ?>"><span class="flag"></span></a>
                                        </li>
                                        <li class="lang lang-en <?php if ($lng == 'EN') print('selected'); ?>" title="EN">
                                            <a href="/news_more.php?lng=en&pos=<?php print($pos); ?>"><span class="flag"></span> </a>
                                        </li>
                                        <li class="lang lang-kz <?php if ($lng == 'KZ') print('selected'); ?>" title="KZ">
                                            <a href="/news_more.php?lng=kz&pos=<?php print($pos); ?>"><span class="flag"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="burger">
                                <div class="burger_menu">
                                    <div class="burger_line"></div>
                                    <div class="burger_line"></div>
                                    <div class="burger_line"></div>
                                </div>
                                <ul class="none">
                                    <a href="index.php?iac=1">
                                        <li><?php print($ftitle["16"]); ?></li>
                                    </a>
                                    <a href="index.php?iac=3">
                                        <li><?php print($ftitle["17"]); ?></li>
                                    </a>
                                    <a href="index.php?iac=4">
                                        <li><?php print($ftitle["18"]); ?></li>
                                    </a>
                                    <a href="index.php?iac=5">
                                        <li><?php print($ftitle["19"]); ?></li>
                                    </a>
                                    <a href="index.php?iac=7">
                                        <li><?php print($ftitle["20"]); ?></li>
                                    </a>
                                    <a href="https://robotprostore.kz/">
                                        <li><?php print($ftitle["21"]); ?></li>
                                    </a>
                                    <a href="index.php?iac=9">
                                        <li><?php print($ftitle["22"]); ?></li>
                                    </a>
                                    <div class="language_mobile">

                                        <a href="/news_more.php?pos=<?php print($_GET['pos']);?>&lng=en">
                                            EN
                                        </a>
                                        <a href="/news_more.php?pos=<?php print($_GET['pos']);?>&lng=RU">
                                            RU
                                        </a>
                                        <a href="/news_more.php?pos=<?php print($_GET['pos']);?>&lng=KZ">
                                            KZ
                                        </a>
                                    </div>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="news_list">
                    <div class="news_head">
                        <h2 data-aos="fade-down" class="aos-init aos-animate">НОВОСТИ КОМПАНИИ</h2>
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Поиск по заголовкам">
                            <button type="submit" class="searchButton">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="7" stroke="white" stroke-width="2" />
                                    <path d="M20 20L17 17" stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="news_column">
                        <div class="news_more_page">
                            <h3><?php print($text[0]); ?></h3>
                            <hr>
                            <!-- Главная картинка которая появляется в мобильной версии -->
                            <div class="news_more_img"></div>
                            <!-- Слайдер который появляется в компьютерной версии -->
                            <div class="slider-pro sp-vertical" id="my-slider">
                                <div class="sp-slides sp-slides-container">
                                    <!-- Slide 1 -->
                                    <?php for ($t = 0; $t < $i; $t++) { ?>
                                        <div class="sp-slide">
                                            <img class="sp-image" src="<?php print($img[$t]); ?>" />
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="sp-thumbnails sp-thumbnails-container sp-right-thumbnails sp-has-pointer sp-swiping">
                                    <?php for ($t = 0; $t < $i; $t++) { ?>
                                        <img class="sp-thumbnail" src="<?php print($img[$t]); ?>" data-src="<?php print($img[$t]); ?>" />
                                    <?php } ?>
                                </div>
                            </div>
                            <p>
                                <?php print($text[1]); ?>
                            </p>
                            <div class="news_options">
                                <a href=""><svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17" cy="8" r="4" fill="#888" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 8C15 6.89543 15.8954 6 17 6C18.1046 6 19 6.89543 19 8H15ZM11 8C11 7.29873 11.1203 6.62556 11.3414 6H5C4.44772 6 4 6.44772 4 7C4 7.55228 4.44772 8 5 8H11ZM11.8027 11C12.2671 11.8028 12.9121 12.488 13.6822 13H5C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11H11.8027ZM5 16C4.44772 16 4 16.4477 4 17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17C20 16.4477 19.5523 16 19 16H5Z" fill="#888" />
                                    </svg>
                                    <?php print($text[2]); ?></a>
                                <hr>
                                <span><svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="6" width="18" height="15" rx="2" stroke="#888888" stroke-width="2" />
                                        <path d="M4 11H20" stroke="#888888" stroke-width="2" stroke-linecap="round" />
                                        <path d="M9 16H15" stroke="#888888" stroke-width="2" stroke-linecap="round" />
                                        <path d="M8 3L8 7" stroke="#888888" stroke-width="2" stroke-linecap="round" />
                                        <path d="M16 3L16 7" stroke="#888888" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    <?php print($text[3]); ?></span>
                            </div>
                            <hr>
                            <div class="news_slide">
                                <h3>Последние новости</h3>
                                <div class="last_news">
                                    <?php foreach ($news as $new) { ?>
                                        <a href="news_more.php?pos=<?php print($new['uk_news']); ?>&lng=<?php print($lng); ?>" class="last_news_item">
                                            <div class="last_news_img" style="background-image: url(<?php print($new['img_news']); ?>);"></div>
                                            <div class="last_news_title"><?php print($new['title_news']); ?></div>
                                            <div class="last_news_caption"><?php print($new['opisanie_news']); ?></div>
                                            <span href="#" class="learn_more">Читать подробнее
                                                <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7L7.70711 6.29289L8.41421 7L7.70711 7.70711L7 7ZM1.70711 0.292893L7.70711 6.29289L6.29289 7.70711L0.292893 1.70711L1.70711 0.292893ZM7.70711 7.70711L1.70711 13.7071L0.292893 12.2929L6.29289 6.29289L7.70711 7.70711Z" fill="#D69600"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer id="s9_1">
        <div class="container">
            <div class="f3" data-aos="zoom-in-up">
                <div class="f1_about">
                    <h3><?php print($ftitle["32"]); ?></h3>
                    <span><?php print($ftitle["33"]); ?></span>
                </div>
                <div class="f2_info">
                    <h3><?php print($ftitle["34"]); ?></h3>
                    <span><img src="img/place.png" alt=""> <?php print($ftitle["35"]); ?></span>
                    <span><img src="img/phone.png" alt=""> <?php print($ftitle["36"]); ?></span>
                    <span><img src="img/email.png" alt=""> <?php print($ftitle["37"]); ?></span>
                    <span><img src="img/insta.png" alt=""> <?php print($ftitle["38"]); ?></span>
                </div>
                <div class="f3_feed">
                    <h3><?php print($ftitle["40"]); ?></h3>
                    <span><?php print($ftitle["39"]); ?></span>
                    <form action="">
                        <input type="text" placeholder="Введите Ваше имя">
                        <input type="text" placeholder="Введите Ваш номер">
                        <button class="shop_btn"><?php print($ftitle["23"]); ?></button>
                    </form>
                </div>
            </div>
            <span class="right">© SKIMAKSSS | All Rights Reserved. | 2022</span>
            <ul>

                <a href="index.php?iac=1">
                    <li><?php print($ftitle["16"]); ?></li>
                </a>
                <a href="index.php?iac=3">
                    <li><?php print($ftitle["17"]); ?></li>
                </a>
                <a href="index.php?iac=4">
                    <li><?php print($ftitle["18"]); ?></li>
                </a>
                <a href="index.php?iac=5">
                    <li><?php print($ftitle["19"]); ?></li>
                </a>
                <a href="index.php?iac=7">
                    <li><?php print($ftitle["20"]); ?></li>
                </a>
                <a href="">
                    <li><?php print($ftitle["21"]); ?></li>
                </a>
                <a href="index.php?iac=9">
                    <li><?php print($ftitle["22"]); ?></li>
                </a>
            </ul>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="js/script.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script src="js/jquery.sliderPro.js"></script>


</html>