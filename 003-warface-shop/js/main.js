const menu = document.querySelector('.menu');
const burger = document.querySelector('.burger');
burger.addEventListener('click', function() {
  this.classList.toggle('active');
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');  
});

const randomItems = document.querySelectorAll('.random-one__item');
randomItems.forEach(elm => {
  elm.addEventListener('click', function() {
    randomItems.forEach(elm2 => elm2.classList.remove('active'));
    elm.classList.toggle('active');
  });
});

function syncPosition(el) {
  var count = el.item.count - 1;
  var current = Math.round(el.item.index - (el.item.count / 2) - .5);
  if (current < 0)
    current = count;
  if (current > count)
      current = 0;
  const sync2 = $("#slider-thumb");
  sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
  var onscreen = sync2.find('.owl-item.active').length - 1;
  var start = sync2.find('.owl-item.active').first().index();
  var end = sync2.find('.owl-item.active').last().index();
  if (current > end)
    sync2.data('owl.carousel').to(current, 100, true);
  if (current < start)
    sync2.data('owl.carousel').to(current - onscreen, 100, true);
}

function syncPosition2(el) {
  var number = el.item.index;
  $("#slider").data('owl.carousel').to(number, 100, true);
}

$("#slider-thumb").on("click", ".owl-item", function(e) {
  e.preventDefault();
  var number = $(this).index();
  $("#slider").data('owl.carousel').to(number, 300, true);
});

document.addEventListener("DOMContentLoaded", function() {
  const modalbox = $(".modalbox");
  if (modalbox.length) {
    modalbox.fancybox();
  }

  const slider = $("#slider");
  if (slider.length) {
    slider.owlCarousel({
      items: 1,
      nav: true,
      slideSpeed: 2000,
      autoplay: false, 
      dots: true,
      loop: true,
      responsiveRefreshRate: 200
    }).on('changed.owl.carousel', syncPosition);
  }

  const sliderThumb = $("#slider-thumb");
  if (sliderThumb.length) {
    sliderThumb.owlCarousel({
      items: 3,
      nav: true,
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: 3,
      responsiveRefreshRate: 100
    }).on('changed.owl.carousel', syncPosition2);
  }
});