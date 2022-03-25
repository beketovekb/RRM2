<?php 
require_once 'include/database.php';
require_once 'include/functions.php'; 
    $id = str_replace("%20",' ',$_GET['id']);
    $projects = get_more_info_project($link, "ru", $id);
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
    <title>Regulus Robotics Machine</title>
</head>

<body>
    <div class="stars_window">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>
    <header>
        <div class="header_bg">
            <img class="spectr" src="img/bg_spectr.png" alt="">
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
                            <div class="soc">
                                <a href="https://www.instagram.com/robotprostore/" class="soc">
                                    <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M505,257c0,34.8-0.7,69.7,0.2,104.5c1.5,61.6-37.2,109.2-86.5,130.4c-19.8,8.5-40.6,13-62.1,13c-67.3,0.1-134.7,1-202-0.3   c-50.7-1-92.4-22.2-122.3-64c-15.7-22-23.2-47-23.2-74.1c0-71.7,0-143.3,0-215c0-58.5,28.5-99.4,79.1-126C110.2,14,134.1,9.1,159,9   c65.3,0,130.7-0.4,196,0.2c50.7,0.4,93,19.8,124.2,60.6c17.4,22.8,25.8,49,25.8,77.8C505,184,505,220.5,505,257z M46,257   c0,36.7,0,73.3,0,110c0,16.4,3.8,31.8,12.3,45.7c22.3,36.5,56,54.3,97.8,55c67.1,1,134.3,0.4,201.5,0.2c16.5,0,32.5-3.4,47.4-10.5   c40.6-19.4,63.3-50.3,63.1-96.7c-0.4-71-0.1-142-0.1-213c0-20.1-5.7-38.5-17.6-54.7c-23-31.1-54.8-46.4-92.8-46.8   c-67-0.8-134-0.3-201-0.2c-14.3,0-28.1,2.9-41.5,7.9c-36.8,13.7-71,48.4-69.4,99.5C46.9,188,46,222.5,46,257z"/><path d="M257.6,363c-64.5,0-116.5-51.4-116.6-115.4c-0.1-63,52.3-114.6,116.4-114.6c64.3-0.1,116.5,51.4,116.6,114.9   C374,311.3,321.9,362.9,257.6,363z M257.6,326c43.9,0,79.5-35.1,79.4-78.3c-0.1-42.8-35.7-77.8-79.4-77.8   c-43.9,0-79.7,34.9-79.7,78C178,291.1,213.7,326.1,257.6,326z"/><path d="M387.5,98c13.5,0,24.5,11.5,24.5,25.6c-0.1,14.1-11.2,25.5-24.7,25.4c-13.3-0.1-24.2-11.5-24.2-25.3   C363,109.6,374,98,387.5,98z"/></g></svg>
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
                                                C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
                                        </g>
                                        </svg>
                                </a>
                                <div id="lang_selector" class="language-dropdown">
                                    <label for="toggle" class="lang-flag lang-ru" title="Click to select the language">
                                        <span class="flag"></span>
                                    </label>
                                    <ul class="lang-list">
                                        <li class="lang lang-ru selected" title="RU">
                                        <span class="flag"></span>
                                        </li>
                                        <li class="lang lang-en " title="EN">
                                        <span class="flag"></span>  
                                        </li>
                                        <li class="lang lang-kz" title="KZ">
                                        <span class="flag"></span>
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
                                    <a href="index.php#s1_1">
                                        <li>О компании</li>
                                    </a>
                                    <a href="index.php#s3_1">
                                        <li>Навправления</li>
                                    </a>
                                    <a href="index.php#s4_1">
                                        <li>Проекты</li>
                                    </a>
                                    <a href="index.php#s5_1">
                                        <li>Партнеры</li>
                                    </a>
                                    <a href="index.php#s7_1">
                                        <li>Новости</li>
                                    </a>
                                    <a href="">
                                        <li>Магазин</li>
                                    </a>
                                    <a href="index.php#s9_1">
                                        <li>Контакты</li>
                                    </a>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="gen">
                    <div class="container">
                        <div class="flex_center">
                            <?php foreach($projects as $project){ ?>
                            <div class="flex">
                                <div class="img_directions">
                                    <img src="img/dir_img1.png" alt="">
                                </div>
                                <div class="content_directions">
                                    <h2><?php print($project["Title_project_site"]); ?></h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                    <span>Сроки выполнения от 2-х месяцев</span>
                                </div>
                            </div>
                            <div class="voz">
                                <div class="voz_item">
                                    <img class="voz_img" src="../img/line_fill.png" alt="">
                                    <h4>Заголовок</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid unde vel ut sit quaerat doloribus. Labore quos eum laboriosam.</p>
                                </div>
                                <div class="voz_item">
                                    <img class="voz_img" src="img/pin_alt_fill.png" alt="">
                                    <h4>Заголовок</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid unde vel ut sit quaerat doloribus. Labore quos eum laboriosam.</p>
                                </div>
                                <div class="voz_item">
                                    <img class="voz_img" src="img/bell_fill.png" alt="">
                                    <h4>Заголовок</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid unde vel ut sit quaerat doloribus. Labore quos eum laboriosam.</p>
                                </div>
                                <div class="voz_item">
                                    <img class="voz_img" src="img/tumer_fill.png" alt="">
                                    <h4>Заголовок</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid unde vel ut sit quaerat doloribus. Labore quos eum laboriosam.</p>
                                </div>
                            </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>

</html>