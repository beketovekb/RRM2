<?php
require_once 'include/database.php';
require_once 'include/functions.php';
if(isset($_GET['iac']))
{
    $loc;
    switch($_GET['iac'])
    {
        case '1': $loc='#s1_1';break;
        case '3': $loc='#s3_1';break;
        case '4': $loc='#s4_1';break;
        case '5': $loc='#s5_1';break;
        case '7': $loc='#s7_1';break;
        case '9': $loc='#s9_1';break;
    }
    header('Location: index.php'. $loc);
}

$lng;
if (isset($_GET['lng'])) $lng = $_GET['lng'];
else $lng = 'ru';
$lng = strtoupper($lng);
$titles = get_titles($link, $lng);
$ftitle;
foreach ($titles as $title) {
    $ftitle[$title["Number"]] = $title["Text"];
}

$napravlenia = get_napravlenia($link, $lng);
$napravlenia_title;
$napravlenia_img;
$napravlenia_type;
foreach ($napravlenia as $napravlen) {
    $napravlenia_title[$napravlen["Position_uslugi_site"]] = $napravlen["Title_uslugi_site"];
}
foreach ($napravlenia as $napravlen) {
    $napravlenia_img[$napravlen["Position_uslugi_site"]] = $napravlen["Img_url_uslugi_site"];
}
foreach ($napravlenia as $napravlen) {
    $napravlenia_type[$napravlen["Position_uslugi_site"]] = $napravlen["Type_uslugi_site"];
}
$projects = get_project($link, $lng);

$img_url;
$img_urls = get_img($link);
foreach ($img_urls as $img_ur) {
    $img_url[$img_ur['Name_img_site']] = $img_ur['Url_img_site'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
    <title>Regulus Robotics Machine</title>
</head>

<body>
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
    <header>
        <div class="bg0"></div>
        <div class="bg_gray" style="background-image: url(<?php print($img_url['general']); ?>) !important;">
            <img class="robo1" src="<?php print($img_url['generalleft']); ?>" alt="">
            <img class="robo2" src="<?php print($img_url['generalright']); ?>" alt="">
        </div>
        <div class="header_bg overflow_unset">
            <div class="container">
                <div class="header_nav">
                    <div class="shadow_up"></div>
                    <div class="container">
                        <nav>
                            <a class="logo_link" href="index.php">
                                <img class="logo logo_light" src="img/logo_light.png" alt="Regulus Robotics Machine Logo">
                                <img class="logo logo_color" src="img/logo.png" alt="Regulus Robotics Machine Logo">
                            </a>
                            <ul>
                                <a href="#s1_1">
                                    <li><?php print($ftitle["16"]); ?></li>
                                </a>
                                <a href="#s3_1">
                                    <li><?php print($ftitle["17"]); ?></li>
                                </a>
                                <a href="#s4_1">
                                    <li><?php print($ftitle["18"]); ?></li>
                                </a>
                                <a href="#s5_1">
                                    <li><?php print($ftitle["19"]); ?></li>
                                </a>
                                <a href="#s7_1">
                                    <li><?php print($ftitle["20"]); ?></li>
                                </a>
                                <a href="">
                                    <li><?php print($ftitle["21"]); ?></li>
                                </a>
                                <a href="#s9_1">
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
                                            <a href="/?lng=ru"><span class="flag"></span></a>
                                        </li>
                                        <li class="lang lang-en <?php if ($lng == 'EN') print('selected'); ?>" title="EN">
                                            <a href="/?lng=en"><span class="flag"></span> </a>
                                        </li>
                                        <li class="lang lang-kz <?php if ($lng == 'KZ') print('selected'); ?>" title="KZ">
                                            <a href="/?lng=kz"><span class="flag"></span></a>
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
                                    <a href="#s1_1">
                                        <li><?php print($ftitle["16"]); ?></li>
                                    </a>
                                    <a href="#s3_1">
                                        <li><?php print($ftitle["17"]); ?></li>
                                    </a>
                                    <a href="#s4_1">
                                        <li><?php print($ftitle["18"]); ?></li>
                                    </a>
                                    <a href="#s5_1">
                                        <li><?php print($ftitle["19"]); ?></li>
                                    </a>
                                    <a href="#s7_1">
                                        <li><?php print($ftitle["20"]); ?></li>
                                    </a>
                                    <a href="">
                                        <li><?php print($ftitle["21"]); ?></li>
                                    </a>
                                    <a href="#s9_1">
                                        <li><?php print($ftitle["22"]); ?></li>
                                    </a>
                                    <div class="language_mobile">

                                        <a href="/?lng=en">
                                            EN
                                        </a>
                                        <a href="/?lng=ru">
                                            RU
                                        </a>
                                        <a href="/?lng=kz">
                                            KZ
                                        </a>
                                    </div>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="gen">
                    <div class="top_subtext" data-aos="fade-down" data-aos-duration="1500"><?php print($ftitle["1"]); ?></div>
                    <h1 data-aos="zoom-in" data-aos-duration="2000"><?php print($ftitle["2"]); ?></h1>
                    <div class="bottom_subtext" data-aos="zoom-in" data-aos-duration="1500"><?php print($ftitle["3"]); ?></div>
                    <div class="gen_buttons" data-aos="zoom-out-up" data-aos-duration="1500">
                        <a class="comp" href="#s1_1"><?php print($ftitle["30"]); ?></a>
                        <a class="ost" href="#s9_1"><?php print($ftitle["23"]); ?></a>
                    </div>
                    <div class="scroll_icon">
                        <div class="scroll_circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="s1_1" id="s1_1">
        <div class="container">
            <h2 data-aos="fade-down"><span><?php print($ftitle["4"]); ?></span></h2>
            <hr data-aos="flip-left">
            <div class="f6to4">
                <div class="caption" data-aos="fade-right">
                    <?php print($ftitle["5"]); ?>
                </div>
                <div class="img_about" style="background: url(<?php print($img_url['about']); ?>); width: 40%;
        height: auto;
        background-size: cover;
        background-position: -250px center;" data-aos="flip-right"></div>
            </div>
        </div>
    </section>
    <section class="s2_1" id="s2_1">
        <div class="bg_fback"></div>
        <img src="<?php print($img_url['feedback']); ?>" class="img_fback" alt="">
        <div class="container">
            <div class="fback_conent">
                <div class="fback_text" data-aos="fade-right">
                    <h2><?php print($ftitle["6"]); ?></h2>
                    <span><?php print($ftitle["7"]); ?></span>
                </div>
                <div class="fback_form" data-aos="flip-right">
                    <h2><?php print($ftitle["24"]); ?></h2>
                    <span><?php print($ftitle["25"]); ?></span>
                    <form action="">
                        <div class="from_input-name">
                            <label for=""><?php print($ftitle["26"]); ?></label>
                            <input type="text" placeholder="Арман">
                        </div>

                        <div class="from_input-number">
                            <label for=""><?php print($ftitle["27"]); ?></label>
                            <input type="text" placeholder="87778001234">
                        </div>
                        <button><?php print($ftitle["28"]); ?></button>

                        <div class="from_input-acept">
                            <input type="checkbox" name="" id="form_acept">
                            <label for="form_acept"><?php print($ftitle["29"]); ?></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="s3_1" id="s3_1">
        <div class="container">
            <h2 data-aos="fade-down"><span><?php print($ftitle["8"]); ?></span> </h2>
            <hr data-aos="flip-left">
            <span class="title_caption" data-aos="fade-up"><?php print($ftitle["9"]); ?></span>
            <div class="directions" data-aos="zoom-in">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="directions_item d_item<?php print($i) ?>" style="background-image: url(<?php print($napravlenia_img[$i]); ?>);">
                        <h3><?php print($napravlenia_title[$i]); ?></h3>
                        <a href="directions.php?num=<?php print($i); ?>&lng=<?php print($lng); ?>"><button><?php print($napravlenia_type[$i]); ?></button></a>
                        <div class="d_shadow"></div>
                    </div>
                <?php } ?>
            </div>
            <a href="https://robotprostore.kz/" class="shop_btn">Перейти в магазин</a>
        </div>
    </section>
    <section class="s4_1" id="s4_1">
        <h2 data-aos="fade-down"><span><?php print($ftitle["10"]); ?></span></h2>
        <hr data-aos="flip-left">
        <span class="title_caption" data-aos="fade-up"><?php print($ftitle["11"]); ?></span>
        <div class="projects" data-aos="zoom-in">
            <?php $i = 1;
            foreach ($projects as $project) { ?>
                <div class="projects_item p_item<?php print($i); ?>" style="background-image: url(<?php print($project["Img_project_site"]); ?>);">
                    <div class="p_shadow">
                        <span class="project_title"><?php print($project["Title_project_site"]); ?></span>
                        <span class="project_direction"><?php print($project["Type_project_site"]); ?></span>
                        <a class="shop_btn project_learn_more" href="/projects.php?id=<?php print($project["uk_project_site"]); ?>&lng=<?php print($lng); ?>">Подорбнее</a>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>
    </section>
    <section class="s5_1" id="s5_1">
        <div class="container">
            <h2 data-aos="fade-down"><?php print($ftitle["12"]); ?></h2>
            <hr data-aos="flip-left">
            <span class="title_caption" data-aos="fade-up"><?php print($ftitle["13"]); ?></span>
            <div class="responsive" data-aos="zoom-in">
                <img src="img/partner1.png" alt="">
                <img src="img/partner2.png" alt="">
                <img src="img/partner3.png" alt="">
                <img src="img/partner4.png" alt="">
                <img src="img/partner5.png" alt="">
                <img src="img/partner6.png" alt="">
                <img src="img/partner7.png" alt="">
                <img src="img/partner8.png" alt="">
                <img src="img/partner9.png" alt="">
                <img src="img/partner10.png" alt="">
            </div>
        </div>
    </section>
    <section class="s7_1" id="s7_1">
        <div class="container">
            <h2 data-aos="fade-down"><?php print($ftitle["14"]); ?></h2>
            <hr data-aos="flip-left">
            <span class="title_caption" data-aos="fade-up"><?php print($ftitle["15"]); ?></span>
            <div class="news">
                <a href="news_more.php" class="news_item n_item1" data-aos="zoom-in">
                    <div class="news_img1">
                        <div class="news_day">
                            20 янв
                        </div>
                    </div>
                    <h4>Lego Educations</h4>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</span>
                    <span class="learn_more">Читать подробнее
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7L7.70711 6.29289L8.41421 7L7.70711 7.70711L7 7ZM1.70711 0.292893L7.70711 6.29289L6.29289 7.70711L0.292893 1.70711L1.70711 0.292893ZM7.70711 7.70711L1.70711 13.7071L0.292893 12.2929L6.29289 6.29289L7.70711 7.70711Z" fill="#D69600" />
                        </svg>
                    </span>
                </a>
                <a href="news_more.php" class="news_item n_item2" data-aos="zoom-in">
                    <div class="news_img2">
                        <div class="news_day">
                            25 фев
                        </div>
                    </div>
                    <h4>CRUZR</h4>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</span>
                    <span href="#" class="learn_more">Читать подробнее
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7L7.70711 6.29289L8.41421 7L7.70711 7.70711L7 7ZM1.70711 0.292893L7.70711 6.29289L6.29289 7.70711L0.292893 1.70711L1.70711 0.292893ZM7.70711 7.70711L1.70711 13.7071L0.292893 12.2929L6.29289 6.29289L7.70711 7.70711Z" fill="#D69600" />
                        </svg>
                    </span>
                </a>
                <a href="news_more.php" class="news_item n_item3" data-aos="zoom-in">
                    <div class="news_img3">
                        <div class="news_day">
                            03 мар
                        </div>
                    </div>
                    <h4>ROBOTICS</h4>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</span>
                    <span href="#" class="learn_more">Читать подробнее
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7L7.70711 6.29289L8.41421 7L7.70711 7.70711L7 7ZM1.70711 0.292893L7.70711 6.29289L6.29289 7.70711L0.292893 1.70711L1.70711 0.292893ZM7.70711 7.70711L1.70711 13.7071L0.292893 12.2929L6.29289 6.29289L7.70711 7.70711Z" fill="#D69600" />
                        </svg>
                </span>
                </a>
            </div>
            <a href="news_list.php" class="news_more">Больше новостей</a>
        </div>
    </section>
    <!-- <section class="s8_1" id="s8_1">
        <div id="map" style="width:100%; height:60vh; filter: grayscale(1);"></div>
    </section> -->
    <footer id="s9_1">
        <div class="container">
            <div class="f3" data-aos="zoom-in-up">
                <div class="f1_about">
                    <h3>О Компании</h3>
                    <span>Компания Regulus Robotics Machine (RRM) создана в 2016-м году в качестве платформы для интернет-магазина роботехнической продукции. Наша продуктовая линейка — это образовательные и сервисные роботы, интерактивное оборудование, цифровые лаборатории, 3D принтеры и программные решения. Мы всегда в погоне за лучшим продуктом и лучшим сервисом.
                        Мы осуществили поставку первых в Казахстане роботов THESPIAN, PEPPER, NAO-V6, ROBOTIS MINI, BIOLOID, CRUZR UPTECH. </span>
                </div>
                <div class="f2_info">
                    <h3>Наши контакты</h3>
                    <span><img src="img/place.png" alt=""> г. Алматы, Казахстан,
                        проспект Гагарина 309, офис 23 <br>
                        г. Нур-Султан, Казахстан, ул.​Тарас
                        Шевченко, 4/1, оф.414c</span>
                    <span><img src="img/phone.png" alt=""> +7 701 800 2178</span>
                    <span><img src="img/email.png" alt=""> info@robotprostore.kz</span>
                    <span><img src="img/insta.png" alt=""> @robotprostore</span>
                </div>
                <div class="f3_feed">
                    <h3>Оставьте заявку</h3>
                    <span>Отправьте нам заявку и<br> наши менеджеры с вами свяжутся.</span>
                    <form action="">
                        <input type="text" placeholder="Введите Ваше имя">
                        <input type="text" placeholder="Введите Ваш номер">
                        <button class="shop_btn">Перейти в магазин</button>
                    </form>
                </div>
            </div>
            <span class="right">© SKIMAKSSS | All Rights Reserved. | 2022</span>
            <ul>
                <a href="#s1_1">
                    <li>О компании</li>
                </a>
                <a href="#s3_1">
                    <li>Навправления</li>
                </a>
                <a href="#s4_1">
                    <li>Проекты</li>
                </a>
                <a href="#s5_1">
                    <li>Партнеры</li>
                </a>
                <a href="#s7_1">
                    <li>Новости</li>
                </a>
                <a href="">
                    <li>Магазин</li>
                </a>
                <a href="#s9_1">
                    <li>Контакты</li>
                </a>
            </ul>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>

</html>