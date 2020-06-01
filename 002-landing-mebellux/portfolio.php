<?php
ob_start();
require "pdo/config.php";
require "header.php";
$pages = $connection->query("SELECT * FROM mainPage");
$pages = $pages->fetchAll();
foreach ($pages as $pageLol) {
    if ($_GET['page']==$pageLol['number']){
        $pageName=$pageLol['name'];
    }
}
$products = $connection->query("SELECT * FROM catalog");
$products =$products->fetchAll();
?>

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
                        <h1 class="mb-4">
                            <a href="index.php" class="logo">
                                <img src="images/logo/1.png" alt="ХочуМебельLux" width="80">
                            </a>
                        </h1>
                        <ul>
                            <li><a href="index.php"><span>Главная</span></a></li>
                            <li><a href="contact.php"><span>Контакты</span></a></li>
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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Главная</a></span> <span><?=$pageName?></span></p>
                        <h1 class="mb-5 bread"><?=$pageName?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- END slider -->

        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 heading-section ftco-animate mb-3">
                                <h2 class="mb-4">Portfolio</h2>
                                <p>Ваши поиски кончаются здесь. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="display: flex;flex-wrap: wrap;justify-content: space-around;">
                        <?foreach ($products as $productLol){
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="javascript: void(0)" class="portfolio ftco-animate">
                                    <div class="d-flex icon justify-content-center align-items-center">
                                        <span class="ion-md-search"></span>
                                    </div>
                                    <div class="d-flex heading align-items-end">
                                        <h3>
                                            "<?=$productLol['name']?>"
                                        </h3>
                                    </div>
                                    <img src="<?=$productLol['image']?>" class="img-fluid" alt="Colorlib Template">
                                </a>
                                <h3><?=$productLol['name']?></h3>
                                <div><?=$productLol['content']?></div>
                            </div>
                        <?}?>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <?/*for($i=1;$i<=$num_pages;$i++) {
                                    echo '<a href="'.$_SERVER['PHP_SELF'].'?'.'?num='.$i*$per_page.'">'.$i."</a>\n";
                                }*/?>
                                <!--<li><a href="krovati.html">&lt;</a></li>
                                <li class="active" ><span><a href="portfolio.html">1</a></span></li>
                                <li ><a href="krovati2.html">2</a></li>
                                <li ><a href="krovati2.html">&gt;</a></li>-->
                            </ul>
                        </div>
                    </div>
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

                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i></a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    </div>

    <!--ЗАЯВКА НА ЗВОНОК--> <div class="modal fade in" style="background: rgba(8, 7, 8, 0.9); display: none;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 			<div class="modal-dialog" role="document"> 				<div class="modal-content" style="background-color: #e9e9e9;"> 					<div class="modal-body"> 					<h5 style="text-align:center;font-size:20px;">ЗАЯВКА НА ЗВОНОК</h5> 						<form style="padding-top:10px;display: flex; flex-direction: column;justify-content: center;align-items: center;"> 							<div class="form-group col-sm-10"> 								<label for="recipient-name" class="col-form-label">Ваше имя:</label> 								<input id="name" style="font-size:15px;background: white;color:black;min-width: 250px;" type="text" class="form-control col-sm-10" placeholder="Укажите Ваше имя"> 							</div> 							<div class="form-group col-sm-10"> 								<label for="message-text" class="col-form-label">Ваш телефон<span style="color:red;">*</span>:</label> 								<input id="phone" style="font-size:15px;background: white;color:black;min-width: 250px;" type="text" class="form-control col-sm-10" placeholder="Укажите Ваш телефон"> 							</div> 							 							<button style="font-size:20px;margin-top:10px;padding:15px 30px; color: white; background:#377FF8;border:none;border-radius:5px; " id="sendBtn" data-dismiss="modal" aria-label="Close">отправить заявку</button> 						</form> 					</div> 				</div> 			</div> 		</div>    <!--КОНЕЦ ЗАЯВКИ НА ЗВОНОК-->
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
<!--СКРИПТ ТОЖЕ НАДО ПОДКЛЮЧИТЬ ДЛЯ МОДАЛКИ-->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    //$('#sendBtn').click(function() {
    //    var name = $('#name')[0].value;
    //    var phone = $('#phone')[0].value;
    //    var emailBody ='Здраствуйте, у Вас новый заказ на сайте mebellux<br>'+'Имя: '
    //    + name + '<br>Телефон: ' + phone;
    //    Email.send({
    //        Host : "smtp.elasticemail.com",
    //        Username : "anatomyminsk@gmail.com",
    //        Password : "b4d967a0-d00b-49ef-95eb-23eca93cae3f",
    //        To : 'mebellux.spb@gmail.com',
    //        From : "anatomyminsk@gmail.com",
    //        Subject: 'This is the subject',
    //        Body: emailBody
    //    }).then(function() {
    //        $('#name').val('');
    //        $('#phone').val('');
    //        alert("Ваше сообщение отправлено успешно");
    //    });
    //});
    </script>    <!--КОНЕЦ СКРИПТА-->

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