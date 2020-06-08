const menu = document.querySelector('.menu');
const burger = document.querySelector('.burger');
burger.addEventListener('click', function() {
  this.classList.toggle('active');
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');  
});

$('.telephoneInput').mask("+7 (000) 000-00-00", {placeholder: "+7 (___) ___-__-__"});

$('.box').click(function(){
    $(this).addClass('fileFocus');
});

$(document).on('ready', function() {
  $(".stoneBlocks").slick({
    dots: false,
    rows: 2,
    infinite: true,
    centerMode: true,
    centerPadding: '1px',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 651,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
  $(".productionGallery").slick({
    dots: true
  });
  $(".objectsGallery").slick();
});