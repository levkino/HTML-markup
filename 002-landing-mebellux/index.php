<?php
ob_start();
require "pdo/config.php";
require "header.php";
$pages = $connection->query("SELECT * FROM potolkiv_mebel.mainPage");

?>

<head>
    <title>Lux Mebel</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Lux Mebel,Хочу Мебель Lux,Done art,Done Art,done art,Мягкая Мебель на заказ">
    <link rel="shortcut icon" href="star.png" type="image/x-icon">
    <meta name="description" content="Мягкая мебель на заказ, продажа мебели Lux Mebel в Санкт-Петербурге ">
    <META NAME="robots" CONTENT= "index,all">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="/css/template.css" type="text/css" />
    <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
    <script type="text/javascript" src="js/popup_imgs.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/44bfdebe07.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <style>
        #magnify img {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="page">
    <nav id="colorlib-main-nav" class="border" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
            <div class="colorlib-table-cell js-fullheight">
                <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-4"><a href="index.php" class="logo">
                                <img src="images/logo/1.png" alt="ХочуМебельLux" width="80">
                            </a></h1>
                        <ul>
                            <li class="active"><a href="index.php"><span>Главная</span></a></li>
                            <li><a href="contact.php"><span>Контакты</span></a></li>
                            <?foreach ($pages as $pagesLol){?>
                                <li><a href="catalog.php?page=<?=$pagesLol['number']?>&num=1"><span><?=$pagesLol['name']?></span></a></li>
                            <?}?>
                            <li><a href="Binder1.pdf" target="_blank"><span>Открыть каталог</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="header">
        <!-- <div class="email header_phone"><a href="tel:+78126029707">+7 (812)602-97-07</a> -->
        <!-- <div>г.Санкт-Петербург</div></div> -->

        <div class="colorlib-navbar-brand">
            <a class="colorlib-logo ftco-animate" href="index.php">
                <img src="images/logo/1.png" alt="ХочуМебельLux">
            </a>
        </div>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <div class="header__main-text">
            <div class="header__hashtag ftco-animate">#хочумебельlux</div>
            <div class="header__title ftco-animate">Мягкая мебель для дома</div>
            <div class="header__subtitle ftco-animate">Собственное производство по цене мебели из IKEA</div>
            <a href="#portfolio" class="header__button ftco-animate">
                <div class="header__button-text">Портфолио</div>
                <div class="header__button-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.365 11.6148C25.4811 11.4984 25.619 11.406 25.7709 11.343C25.9228 11.28 26.0856 11.2476 26.25 11.2476C26.4144 11.2476 26.5772 11.28 26.7291 11.343C26.8809 11.406 27.0189 11.4984 27.135 11.6148L34.635 19.1148C34.7514 19.2309 34.8437 19.3688 34.9068 19.5207C34.9698 19.6726 35.0022 19.8354 35.0022 19.9998C35.0022 20.1642 34.9698 20.327 34.9068 20.4789C34.8437 20.6307 34.7514 20.7687 34.635 20.8848L27.135 28.3848C26.9003 28.6195 26.5819 28.7514 26.25 28.7514C25.918 28.7514 25.5997 28.6195 25.365 28.3848C25.1303 28.1501 24.9984 27.8317 24.9984 27.4998C24.9984 27.1679 25.1303 26.8495 25.365 26.6148L31.9825 19.9998L25.365 13.3848C25.2486 13.2687 25.1562 13.1307 25.0932 12.9789C25.0302 12.827 24.9977 12.6642 24.9977 12.4998C24.9977 12.3354 25.0302 12.1726 25.0932 12.0207C25.1562 11.8688 25.2486 11.7309 25.365 11.6148Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 20C5 19.6685 5.1317 19.3505 5.36612 19.1161C5.60054 18.8817 5.91848 18.75 6.25 18.75H32.5C32.8315 18.75 33.1495 18.8817 33.3839 19.1161C33.6183 19.3505 33.75 19.6685 33.75 20C33.75 20.3315 33.6183 20.6495 33.3839 20.8839C33.1495 21.1183 32.8315 21.25 32.5 21.25H6.25C5.91848 21.25 5.60054 21.1183 5.36612 20.8839C5.1317 20.6495 5 20.3315 5 20Z"/>
                    </svg> 
                </div>
            </a>
        </div>
    </header>
    <div id="colorlib-page">
        <section class="home-slider owl-carousel">
            <div class="home-slider-item home-slider-item-1"></div>
            <div class="home-slider-item home-slider-item-2"></div>
            <div class="home-slider-item home-slider-item-3"></div>
            <div class="home-slider-item home-slider-item-4"></div>
        </section>
        <!-- END slider -->

        <section class="info" id="section-info">
            <!-- <div class="info-block container">
                <p>Собственное производство LUXовой мягкой мебели для дома по цене мебели из Икеи.
                    Выгода до 70%!</p>
            </div> -->
            <div class="info__container">
                <div class="info__indicators">
                    <div class="info__header ftco-animate" data-animate-effect="fadeInLeft">Наши показатели</div>
                    <div class="info__items">
                        <div class="info__item ftco-animate">
                            <span class="info__item-digit ftco-animate" data-animate-effect="fadeInLeft">800</span>
                            <span class="info__item-name ftco-animate" data-animate-effect="fadeInLeft">Созданных проектов</span>
                            <div class="info__item-line info__item-line_1 ftco-animate" data-animate-effect="slowFastLeft"></div>
                        </div>
                        <div class="info__item">
                            <span class="info__item-digit ftco-animate" data-animate-effect="fadeInLeft">795</span>
                            <span class="info__item-name ftco-animate" data-animate-effect="fadeInLeft">Счастливых клиентов</span>
                            <div class="info__item-line info__item-line_2 ftco-animate" data-animate-effect="slowFastLeft"></div>
                        </div>
                        <div class="info__item">
                            <span class="info__item-digit ftco-animate" data-animate-effect="fadeInLeft">4500</span>
                            <span class="info__item-name ftco-animate" data-animate-effect="fadeInLeft">рабочих часов</span>
                            <div class="info__item-line info__item-line_3 ftco-animate" data-animate-effect="slowFastLeft"></div>
                        </div>
                    </div>
                </div>
                <div class="info_img ftco-animate">
                    <img src="./images/our_numbers.jpg" alt="">
                </div>
            </div>
        </section>
        
        <section class="ftco-counter" id="section-counter">
            <div class="container">
                <!-- <div class="row d-flex">
                    <div class="col-md-7 py-sm-3 py-md-5">
                        <div class="row py-5">
                            <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="800">0</strong>
                                        <span>Созданных проектов</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="795">0</strong>
                                        <span>Счастливых клиентов</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="1200">0</strong>
                                        <span>Рабочих часов</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-center img exp" style="background-image: url(images/image_1.jpg);">
                        <p><a href="#" class="btn btn-white index-btn px-5 py-4" data-toggle="modal" data-target="#modalRequest">Оставить заявку</a></p>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="ftco-services">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <h3 class="ml-3">дизайнерская мебель</h3>
                            <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3"><i class="fab fa-accusoft"></i></span> Кровати</a>

                            <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 "><i class="fas fa-couch"></i></span> Диваны</a>

                            <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3"><i class="fas fa-chair"></i></span> Кресла</a>

                            <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3"><i class="fas fa-border-all"></i></span> Стеновые панели</a>
                        </div>
                    </div>
                    <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

                        <div class="tab-content pl-md-5" id="v-pills-tabContent">

                            <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                                <span class="icon mb-3 d-block"><i class="fab fa-accusoft"></i></span>
                                <h2 class="mb-4">Кровати</h2>
                                <p>При создании кроватей, мы никогда не боролись с конкурентами за самую низкую цену. Это не является нашей целью, так как невозможно сочетать высокое качество + дизайн мирового уровня и самую низкую цену. Не верьте в эти сказки.</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                                <span class="icon mb-3 d-block"><i class="fas fa-couch"></i></span>
                                <h2 class="mb-4">Диваны</h2>
                                <p>В конструкторском бюро эскиз превращается в цифровую модель, затем в процесс включается производство. Здесь, шаг за шагом, из отборной древесины, надежных пружинных блоков, качественных наполнителей и тканей создаются лучшие диваны. Такие красивые, мягкие, стильные — разные.</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                                <span class="icon mb-3 d-block "><i class="fas fa-chair"></i></span>
                                <h2 class="mb-4">Кресла</h2>
                                <p>Мы уверены в том, что развитие компании начинается с развития ее сотрудников, поэтому регулярно посещаем профильные выставки, следим за модными тенденциями и непрерывно ищем новые современные и экономичные решения. Все полученные знания воплощают в жизнь наши дизайнеры-технологи.</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                                <span class="icon mb-3 d-block"><i class="fas fa-border-all"></i></span>
                                <h2 class="mb-4">Стеновые панели</h2>
                                <p>Мягкие стеновые панели обладают свойством шумопоглощения. Поэтому их любят использовать в спальных и кабинетах. А так же такая становая панель будет актуальна на стене с телевизором, если в соседней комнате находится спальня, детская или квартира соседей.</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-quote ftco-animate">
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-7 req-quote d-md-flex py-5 align-items-center img" style="background-image: url(images/bg_1.jpg);">
                        <p><a href="#" class="btn btn-white index-btn py-4 px-4 d-none" data-toggle="modal" data-target="#modalRequest">Начни сейчас</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-services">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <h3 class="ml-3">сотрудничество</h3>
                            <a class="nav-link px-4 active" id="v-pills-mastera-tab" data-toggle="pill" href="#v-pills-mastera" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3"><i class="fab fa-accusoft"></i></span> Дизайнерам</a>

                            <a class="nav-link px-4" id="v-pills-buffeta-tab" data-toggle="pill" href="#v-pills-buffeta" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 "><i class="fas fa-utensils"></i></span> Кафе и ресторанам</a>

                            <a class="nav-link px-4" id="v-pills-fitnessa-tab" data-toggle="pill" href="#v-pills-fitnessa" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3"><i class="fas fa-luggage-cart"></i></span> Поставщикам</a>

                            <!--<a class="nav-link px-4" id="v-pills-receptiona-tab" data-toggle="pill" href="#v-pills-receptiona" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3"><i class="fas fa-border-all"></i></span> Стеновые панели</a>-->
                        </div>
                    </div>
                    <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">

                        <div class="tab-content pl-md-5" id="v-pills-tabContent">

                            <div class="tab-pane fade show active py-5" id="v-pills-mastera" role="tabpanel" aria-labelledby="v-pills-mastera-tab">
                                <span class="icon mb-3 d-block"><i class="fab fa-accusoft"></i></span>
                                <h2 class="mb-4">Дизайнеры</h2>
                                <p>Наша творческая команда всегда открыта для совместной работы с такими же творческими людьми-дизайнерами, архитекторами или представителями дизайн-студий. Мы ценим вашу работу и готовы ее вознаграждать посредством индивидуальных скидок и бонусов о которых вы можете узнать, написав нам о себе на нашу почту!</p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-buffeta" role="tabpanel" aria-labelledby="v-pills-buffeta-tab">
                                <span class="icon mb-3 d-block"><i class="fas fa-utensils"></i></span>
                                <h2 class="mb-4">Кафе и рестораны</h2>
                                <p>Если вы решили обставить свое кофе или ресторан качественной дизайнерской мебелью, то мы всегда рады предложить вам специальную скидку, которая позволит вам приятно сократить расходы на мебель для вашего помещения и использовать сэкономленные средства для улучшения своего сервиса. Просто напишите нам!</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-fitnessa" role="tabpanel" aria-labelledby="v-pills-fitnessa-tab">
                                <span class="icon mb-3 d-block "><i class="fas fa-luggage-cart"></i></span>
                                <h2 class="mb-4">Поставщикам</h2>
                                <p>Если вы производитель или поставщик качественной дизайнерской мебели и хотите предложить нам сотрудничество, мы  с удовольствием рассмотрим ваше предложение, просто напишите нам о себе и своих изделиях!</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>

                            <div class="tab-pane fade py-5" id="v-pills-receptiona" role="tabpanel" aria-labelledby="v-pills-receptiona-tab">
                                <span class="icon mb-3 d-block"><i class="fas fa-border-all"></i></span>
                                <h2 class="mb-4">Стеновые панели</h2>
                                <p>Мягкие стеновые панели обладают свойством шумопоглощения. Поэтому их любят использовать в спальных и кабинетах. А так же такая становая панель будет актуальна на стене с телевизором, если в соседней комнате находится спальня, детская или квартира соседей.</p>
                                <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">Узнать больше</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="ftco-section">
            <div class="container portfolio__wrapper">
                <div class="portfolio__col">
                    <div class="portfolio__header">Портфолио</div>
                    <div class="portfolio__work portfolio__work_1">
                        <div class="imagers" src="images/work01.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 01</h3>
                                </div>
                                <img src="images/work01.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__work portfolio__work_2">
                        <div class="imagers" src="images/work02.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 02</h3>
                                </div>
                                <img src="images/work02.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio__col">
                    <div class="portfolio__work portfolio__work_3">
                        <div class="imagers" src="images/work03.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 03</h3>
                                </div>
                                <img src="images/work03.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__work portfolio__work_4">
                        <div class="imagers" src="images/work04.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 04</h3>
                                </div>
                                <img src="images/work04.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio__col">
                    <div class="portfolio__work portfolio__work_5">
                        <div class="imagers" src="images/work05.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 05</h3>
                                </div>
                                <img src="images/work05.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="portfolio__work portfolio__work_6">
                        <div class="imagers" src="images/work06.jpg">
                            <a class="portfolio ftco-animate" >
                                <div class="d-flex icon justify-content-center align-items-center" >
                                    <span class="ion-md-search"></span>
                                </div>
                                <div class="d-flex heading align-items-end">
                                    <h3>Work 06</h3>
                                </div>
                                <img src="images/work06.jpg" class="img-fluid" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimony-section" id="testimon">
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-4 last-order d-md-flex align-items-start heading-section aside-stretch ftco-animate">
                        <div>
                            <h2 class="mb-4">Отзывы клиентов</h2>
                            <p>Нам важно то, что вы думаете о нас! </p>
                        </div>
                    </div>
                    <div class="col-md-8 first-order ftco-animate">
                        <div class="carousel-testimony owl-carousel">
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5">Грузчики все занесли, очень оперативно собрали и все убрали за собой. Магазин хороший, менеджер постоянно на связи по любым вопросам.<br><br><br></p>
                                        <p class="name">Денис Ковалев</p>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5">Уважаемые господа!Купил кресло London. Приятно иметь дело с команией, которая выполняет свои обязательства чётко и в срок!<br><br><br><br></p>
                                        <p class="name">Игорь Адамонис</p>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5">Купила диван Порту и очень доволна! Комфортный для сна очень хороший! Доставка очень быстрая! Спасибо менеджеру. Все подобрал нам, обслуживание на все 100%! Очень довольны диваном!<br><br></p>
                                        <p class="name">Светлана Сергеева</p>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5" style="background-image: url(images/person_4.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5">Заказывал диван Торонто через сайт, были сомнения конечно.. Вчера доставили диван. Установили, убрали за собой мусор. Без лишних сложностей. Очень довольны покупкой, ваша фирма не разочаровала!</p>
                                        <p class="name">Анатолий Денисюк</p>
                                        <!--<span class="position">Customer</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" style="background: rgba(8, 7, 8, 0.9);" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #4b5663; border:3px solid white;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Сообщение</h5>
                        <button type="button" class="close">
                            <span aria-hidden="true" style="color:white" data-dismiss="modal" aria-label="Close">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form style="padding-top:40px;display: flex; flex-direction: column;justify-content: center;align-items: center;">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Имя:</label>
                                <input id="name" style="font-size:20px;background: none;color:white;min-width: 250px;padding: 20px 70px; border: 1px solid black;" type="text" class="form-control" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Телефон:</label>
                                <input id="phone" style="font-size:20px;background: none;color:white;min-width: 250px; padding: 20px 70px;border: 1px solid black;" type="text" class="form-control" placeholder="Ваш номер телефона">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="font-size:20px;margin-top:10px;padding:15px 30px;border: 1px solid white; color: white; background:none; " id="sendBtn" class="btn btn-primary mb-2 btn btn-primary btn-lg btn-block" data-dismiss="modal" aria-label="Close">ЗАПИСАТЬСЯ</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="contacts">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-4 ftco-animate"></div>
                    <div class="col-md-8 ftco-animate">
                        <div class="contacts__clients-soft">
                            <span>Мы делаем нашим клиентам мягко</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-md-flex contacts-row">
                    <div class="col-md-4 last-order d-md-flex align-items-start heading-section aside-stretch ftco-animate">
                        <div class="contacts__main">
                            <div class="contacts__header">Контакты:</div>
                            <div class="contacts__sub-row">
                                <div>
                                    <div class="contacts__sub">Телефон:</div>
                                    <a href="tel:+78126029707" class="contacts__val">+7 (812) 602-97-07</a>
                                </div>
                                <div>
                                    <div class="contacts__sub">Email:</div>
                                    <a href="mailto:mebellux.spb@gmail.com" class="contacts__val">mebellux.spb@gmail.com</a>
                                </div>
                            </div>
                            <div class="contacts__sub-row">
                                <div>
                                    <div class="contacts__sub">Адрес:</div>
                                    <div class="contacts__val">г.Санкт-Петербург</div>
                                </div>
                                <div>
                                    <div class="contacts__sub">Социальные сети:</div>
                                    <a href="https://www.instagram.com/meb.lux/" class="contacts__val">
                                        <img src="./images/instagram.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ftco-animate">
                        <form class="application" onsubmit="return false">
                            <div class="application__header">Оставить заявку</div>
                            <div class="application__field">
                                <input id="name-input" type="text" class="application__input" placeholder="Имя*"></input>
                            </div>
                            <div class="application__field">
                                <input id="phone-input" type="text" class="application__input" placeholder="Телефон*"></input>
                            </div>
                            <div class="application__field">
                                <input id="email-input" type="text" class="application__input" placeholder="Email"></input>
                            </div>
                            <button class="application__send" onclick="sendApplication()">Отправить заявку</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- <footer class="ftco-footer ftco-bg-dark ftco-section">
        
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-5 text-center">
                        <div class="ftco-footer-widget mb-3">
                            <ul class="ftco-footer-social list-unstyled">
                                <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/meb.lux/"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="ftco-footer-widget">
                            <h2 class="mb-3">Свяжись с нами</h2>
                            <p class="email"><a href="tel:+78126029707">+7 (812)602-97-07</a></p>
                            <p class="email"><a href="#">mebellux.spb@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    </div>
</div>

<div id="application-thank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content application-thank">
        <h1>Спасибо!</h1>
        <span>Мы свяжемся с вами в ближайшее время для уточнее деталей заказа.</span>
        <button onclick="$('#application-thank').modal('hide')">Хорошо</button>
      </div>
    </div>
  </div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    !function () {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?167", t.onload = function () {
            VK.Retargeting.Init("VK-RTRG-456345-bxPSb"), VK.Retargeting.Hit()
        }, document.head.appendChild(t)
    }();
</script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-456345-bxPSb" style="position:fixed; left:-999px;" alt=""/></noscript>


<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '184239732802031');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=184239732802031&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(57453994, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57453994" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158117551-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-158117551-1');
</script>
<?php
require "footer.php";