 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

$(document).ready(function($) {

	"use strict";

	$(window).stellar({
    responsive: false,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });

	// Scrollax
  $.Scrollax();


	// loader
	var loader = function() {
		setTimeout(function() {
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	var carousel = function() {
		$('.home-slider').owlCarousel({
			center: true,
	    loop:true,
	    autoplay: true,
	    margin:0,
	    // animateOut: 'slideInDown',
			// animateIn: 'slideInDown',
	    nav:true,
	    autoplayHoverPause: false,
	    items: 1,
	    dots: true,
	    navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"]
	   });
		$('.carousel-testimony').owlCarousel({
			autoplay: true,
			loop: true,
			items:1,
			margin: 15,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 2
				}
			}
		});
	};
	carousel();

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var burgerMenu = function() {

		$('.js-colorlib-nav-toggle').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			if( $('body').hasClass('menu-show') ) {
				$('body').removeClass('menu-show');
				$('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
			} else {
				$('body').addClass('menu-show');
				setTimeout(function(){
					$('#colorlib-main-nav > .js-colorlib-nav-toggle').addClass('show');
				}, 900);
			}
		})
	};
	burgerMenu();

	var counter = function() {

		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});

			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else if ( effect === 'slowFastLeft') {
								el.addClass('slowFastLeft ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});

				}, 100);

			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


   $('#appointment_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});
	$('#appointment_time').timepicker();


initSendMail();
});


function initSendMail(){

$('#sendBtn').click(function() {
    var name = $('#name')[0].value;
    var phone = $('#phone')[0].value;

    var emailBody = "Здраствуйте, у Вас новый заказ на сайте mebellux"
    +"\nИмя: " + name
    + "\nТелефон: " + phone;

//    Email.send({
//        Host : "smtp.elasticemail.com",
//        Username : "mebellux.spb@gmail.com",
//        Password : "b4d967a0-d00b-49ef-95eb-23eca93cae3f",
//        To : 'mebellux.spb@gmail.com',
//        From : "mebellux.spb@gmail.com",
//        Subject: 'This is the subject',
//        Body: emailBody
//    }).then(function() {
//        $('#name').val('');
//        $('#phone').val('');
//        alert("Ваше сообщение отправлено успешно");
//    });

    var formData = new FormData();
    formData.append('emailBody', emailBody);

    $.ajax({
        url: '/mail/contact_me.php',
        type: 'POST',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (result) {
            console.log(result);
            if(result == 'done') {
                $('#name').val('');
                $('#phone').val('');
                alert("Ваше сообщение отправлено успешно");
                window.open("/thank.php");
            }
        }
    });

});

$('#sendBtn1').click(function() {
    var name1 = $('#name1')[0].value;
    var phone1 = $('#phone1')[0].value;
    var text1 = $('#text1')[0].value;
    var mail1 = $('#mail1')[0].value;

    var emailBodyFromContact = "Здраствуйте. У вас новый заказ на сайте mebellux"
    + "\nИмя: " + name
    + "\nТелефон: " + phone1
    + "\nТекст: " + text1
    + "\nMail: " + mail1;

//    Email.send({
//        Host : "smtp.elasticemail.com",
//        Username : "anatomyminsk@gmail.com",
//        Password : "b4d967a0-d00b-49ef-95eb-23eca93cae3f",
//        To : 'mebellux.spb@gmail.com',
//        From : "anatomyminsk@gmail.com",
//        Subject: 'This is the subject',
//        Body: emailBody
//    }).then(function() {
//        $('#name1').val('');
//        $('#phone1').val('');
//        $('#text1').val('');
//        $('#mail1').val('');
//        alert("Ваше сообщение отправлено успешно");
//    });

    var formDataContact = new FormData();
    formDataContact.append('emailBody', emailBodyFromContact);

    $.ajax({
        url: '/mail/contact_me.php',
        type: 'POST',
        data: formDataContact,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (result) {
            console.log(result);
            if(result == 'done') {
                $('#name1').val('');
                $('#phone1').val('');
                $('#text1').val('');
                $('#mail1').val('');
                alert("Ваше сообщение отправлено успешно");
            }
        }
    });

});

}

function scrollToHash(selector) {
  const top = $(selector).offset().top;
  $('html, body').animate({ scrollTop: top }, 500);
}

$('a[href="#portfolio"]').on('click', function(e) {
  if (this.hash.length > 3) {
    // if (this.className.includes('menu')) {
    //   const activeClass = 'header__menu-item-active';
    //   $('.' + activeClass).toggleClass(activeClass);
    //   this.classList.toggle(activeClass);
    // }
    scrollToHash(this.hash);
  }
})


function sendApplication() { 
	var name = $('#name-input')[0].value; 
	if (!name) {
    alert('Укажите имя');
    return;
  }
	var phone = $('#phone-input')[0].value; 
	if (!phone) {
    alert('Укажите телефон');
    return;
  }
	var email = $('#email-input')[0].value; 
			
	var emailBody ='Здраствуйте, у Вас новый заказ на сайте mebellux<br>'+'Имя: ' + name + '<br>Телефон: ' + phone + '<br>Email: ' + email; 
	
	Email.send({ 
		Host : "smtp.elasticemail.com", 
		Username : "mebellux.spb@gmail.com", 
		Password : "b4d967a0-d00b-49ef-95eb-23eca93cae3f", 
		To : 'mebellux.spb@gmail.com', 
		From : "mebellux.spb@gmail.com", 
		Subject: 'This is the subject', 
		Body: emailBody 
	}).then(function() { 
		$('#name-input').val(''); 
		$('#phone-input').val(''); 
		$('#email-input').val(''); 
		$('#application-thank').modal('show');
	}); 
}