<?php
$connection = new PDO('mysql:host=localhost;dbname=potolkiv_mebel;charset=utf8','potolkiv_mebel','Ph&by60V');
$pages = $connection->query("SELECT * FROM potolkiv_mebel.mainPage");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lux Mebel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="star.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
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
                            <li><a href="index.php"><span>Главная</span></a></li>
                            <li class="active"><a href="contact.php"><span>Контакты</span></a></li>
                            <?foreach ($pages as $pagesLol){?>
                                <li><a href="catalog.php?page=<?=$pagesLol['number']?>"><span><?=$pagesLol['name']?></span></a></li>
                            <?}?>
                            <li><a href="Binder1.pdf" target="_blank"><span>Открыть каталог</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="email header_phone"><a href="tel:+78126029707">+7 (812)602-97-07</a>
            <div>г.Санкт-Петербург</div></div>
        <div class="colorlib-navbar-brand text-center">
            <a class="colorlib-logo" href="index.php">
                <img src="images/logo/1.png" alt="ХочуМебельLux">
            </a>
        </div>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    </header>
    <div id="colorlib-page">
        <section class="hero-wrap" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-8 ftco-animate text-center">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Главная</a></span> <span>Контакты</span></p>
                        <h1 class="mb-5 bread">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- END slider -->

        <section class="ftco-section contact-section">
            <div class="container mt-5">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Контактная информация</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3">
                        <p><span>Адрес:</span> Rasbegaevo village</p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Phone:</span> <a href="tel://+781216029707">+7 (812)602-97-07</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Email:</span> <a href="mailto:luxmebel@mail.ru">mebellux.spb@gmail.com</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Instagram:</span> <a href="https://www.instagram.com/meb.lux/?igshid=q007f6m3vkzs">@meb.lux
                            </a></p>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 pr-md-5">
                        <form action="#">
                            <div class="form-group">
                                <input id="name1" type="text" class="form-control" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input id="mail1" type="text" class="form-control" placeholder="Ваш Email(необязательное поле)">
                            </div>
                            <div class="form-group">
                                <input id="phone1" type="text" class="form-control" placeholder="Номер телефона">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="text1" cols="30" rows="7" class="form-control" placeholder="Ваше сообщение"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="sendBtn1"  type="button" value="Отправить" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>
                    <div class="col-md-6" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4076662.1445933525!2d97.52680824158254!3d62.15568303367819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2z0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sby!4v1565307398659!5m2!1sru!2sby"  frameborder="0" height="100%" width="100%" style="border:0; min-height: 300px;" allowfullscreen></iframe></div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
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

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="appointment_name" class="text-black">Full Name</label>
                            <input type="text" class="form-control" id="appointment_name">
                        </div>
                        <div class="form-group">
                            <label for="appointment_email" class="text-black">Email</label>
                            <input type="text" class="form-control" id="appointment_email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="appointment_date" class="text-black">Date</label>
                                    <input type="text" class="form-control" id="appointment_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="appointment_time" class="text-black">Time</label>
                                    <input type="text" class="form-control" id="appointment_time">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="appointment_message" class="text-black">Message</label>
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
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
<script>
// $('#sendBtn1').click(function() {
// var name1 = $('#name1')[0].value;
// var phone1 = $('#phone1')[0].value;
// var text1 = $('#text1')[0].value;
// var mail1 = $('#mail1')[0].value;
//
// var emailBody = 'Здраствуйте. У вас новый заказ на сайте mebellux<br>'+'Имя: ' + name + '<br>Телефон: ' + phone1+ '<br>Текст: ' + text1+ '<br>Mail: ' + mail1;

// Email.send({
// Host : "smtp.elasticemail.com",
// Username : "anatomyminsk@gmail.com",
// Password : "b4d967a0-d00b-49ef-95eb-23eca93cae3f",
// To : 'mebellux.spb@gmail.com',
// From : "anatomyminsk@gmail.com",
// Subject: 'This is the subject',
// Body: emailBody
// }).then(function() {
// $('#name1').val('');
// $('#phone1').val('');
// $('#text1').val('');
// $('#mail1').val('');
// alert("Ваше сообщение отправлено успешно");
// });
// });
</script>

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-456345-bxPSb"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-456345-bxPSb" style="position:fixed; left:-999px;" alt=""/></noscript>




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
</body>
</html>