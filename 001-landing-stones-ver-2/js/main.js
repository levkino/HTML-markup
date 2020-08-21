const mailRecipient = 'ruslan@petromramor.ru';

const isMobile = $(document).width() < 768;
let firstScroll = false;
const menu = document.querySelector('.menu');
const burger = document.querySelector('.burger');
burger.addEventListener('click', function() {
  this.classList.toggle('active');
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');  
});

$(document).ready(function() {
  // Инициализация wow-появлений
  new WOW().init();

  // Инициализация масок ввода
  $('.phone-input').mask("+7 (000) 000-00-00", {placeholder: "+7 (___) ___-__-__"});

  // Инициализация полей выбора файла с формы запроса цены
  $('input[type="file"]').change(function() {
    const textBox = $(this).parent().find('input[type="text"]');
    const closeButton = $(this).parent().find('.calc-form__file-close-img');
    closeButton.show();
    textBox.val(this.value.replace(/^.*[\\\/]/, ''));
    textBox.blur();
  });

  $('.calc-form__file-close-img').click(function(e) {
    const input = $(this).parent().prev();
    const textBox = $(this).prev();
    input.val('');
    textBox.val('');
    $(this).hide();
    e.stopPropagation();
  });

  // Инициализация кнопки заказа звонка с формы запроса цены
  $('.calc-form .calc-form__call-button').click(function() {
    const form = $(this).closest('form');
    const phoneInput = form.find('.calc-form__phone-input');
    if (phoneInput.length && phoneInput.val())
      calcRequest($(this).attr('data'), true);
    else 
      showCallForm();
  });

  // Инициализация кнопки согласия обработки персональных данных
  $('.calc-form__agree-check').change(function() {
    const form = $(this).closest('form');
    const buttonCalc = form.find('.calc-form__send-button');
    const buttonCall = form.find('.calc-form__call-button');
    const phoneInput = form.find('.calc-form__phone-input');
    const isCalc = buttonCalc.length;
    const oldVal = isCalc ? buttonCalc.prop('disabled') : buttonCall.prop('disabled');
    buttonCalc.prop('disabled', !oldVal);
    if (!isCalc || (phoneInput.length && phoneInput.val()) || buttonCall.prop('disabled'))
      buttonCall.prop('disabled', !oldVal);
  });

  // Инициализация табов
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });

  // Инициализация сертификатов
  $(".fancybox-button").fancybox();

  // Инициализация галерей
  $(".stoneBlocks").slick({
    dots: false,
    rows: 2,
    infinite: true,
    centerMode: false,
    centerPadding: '1px',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{ breakpoint: 767, settings: { slidesToShow: 2 }}]
  });
  $(".production__gallery").slick({ dots: true });

  // Мобильная версия
  if (isMobile) {
    $('a[href^="https://wa.me/79992217000"]').attr('href', 'whatsapp://send?phone=79992217000')
  }
});

function scrollToHash(selector) {
  let top = $(selector).offset().top;
  if (isMobile) {
    top -= 50;
    if (selector === '#calc-header')
      top -= 20;
    if (selector === '#map')
      top = $(document).height();
  }
  $('html, body').animate({ scrollTop: top }, 500);
}

$('a[href*="#"]').on('click', function(e) {
  if (this.hash.length > 3) {
    if (this.className === 'menu__item') {
      burger.click();
    } else if (this.className.includes('menu')) {
      const activeClass = 'header__menu-item-active';
      $('.' + activeClass).toggleClass(activeClass);
      this.classList.toggle(activeClass);
    }
    scrollToHash(this.hash);
  }
})


function callRequest(phoneInput) {
  const name = document.querySelector('#call-name').value;
  if (!name) {
    // alert('Укажите имя');
    // return;
  }
  const phone = phoneInput ? phoneInput.val() : document.querySelector('#call-phone').value; 
  if (!phone) {
    $('#modal-need-phone').modal('show');
    return;
  }
  const data = {
    recipient: mailRecipient,
    title: 'Заказ звонка',
    fields: {
      Имя: name,
      Телефон: phone
    }
  };
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/mail-call.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = () => {
    if (xhr.status === 200) {
      $('#modal-call').modal('hide');
      $('#modal-calc').modal('hide');
      $('#modal-thank-you').modal('show');
    } else {
      alert(`Ошибка отправки${xhr.response}`);
    }
  };
  xhr.send(JSON.stringify(data));
  return false;
}

function calcRequest(formNumber, isCallRequest) {
  const question = document.querySelector(`#calc-question${formNumber}`).value;
  if (!question && !isCallRequest) {
    $('#modal-need-question').modal('show');
    return;
  }

  const phone = document.querySelector(`#calc-phone${formNumber}`).value;
  const email = document.querySelector(`#calc-email${formNumber}`).value;
  if (!email && !phone && !isCallRequest) {
    $('#modal-need-email').modal('show');
    return;
  }
  
  const data = {
    recipient: mailRecipient,
    title: 'Запрос цены',
    fields: {
      Вопрос: question,
      'E-mail': email,
      Телефон: phone
    }
  };
  const fileInput = document.querySelector(`#calc-file${formNumber}`);
  const formData = new FormData();
  formData.append("data", JSON.stringify(data));
  formData.append("file", fileInput.files[0]);

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/mail-calc.php');
  xhr.onreadystatechange = () => {
    if (xhr.status === 200) {
      $('#modal-calc').modal('hide');
      $('#modal-thank-you').modal('show');
    } else {
      alert(`Ошибка отправки${xhr.response}`);
    }
  };
  xhr.send(formData);
  return false;
}

function showCallForm() {
  $.fancybox.close();
  $('#modal-calc').modal('hide');
  $('#modal-call').modal('show');
  return false;
}

function showCalcForm() {
  $.fancybox.close();
  $('#modal-calc').modal('show');
  return false;
}

function loadForm(fileName) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/load-form.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = () => {
    if (xhr.status === 200) {
      $('#popupContent').html(xhr.responseText);
      $(".productionGallery").slick({ dots: true });
    } else {
      alert(`Ошибка загрузки данных ${xhr.response}`);
    }
  };
  xhr.send(JSON.stringify({ fileName }));
}

function loadForm2(fileName) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/load-form.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = () => {
    if (xhr.status === 200) {
      $('#popupContent2').html(xhr.responseText);
      $(".catGallery").slick({ dots: true });
      $(".catGallery2").slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{ breakpoint: 651, settings: { slidesToShow: 1 }}]
      });
    } else {
      alert(`Ошибка загрузки данных ${xhr.response}`);
    }
  };
  xhr.send(JSON.stringify({ fileName }));
}

function goToCalcForm() {
  $.fancybox.close();
  scrollToHash('#calc-header');
}

$(window).scroll(function() {
  if (firstScroll)
    return;

  firstScroll = true;

  // Отложенная инициализация карты Яндекса (в целях оптимизации скорости закгрузки сайта)
  $('#map-desktop').append('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abac6de18cbf1c42aed54748ed623618b2a65037d74488ad02cbc37c110d1d8e2&amp;height=670&amp;lang=ru_RU&amp;scroll=true"></script>');
  $('#map-mobile').append('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abac6de18cbf1c42aed54748ed623618b2a65037d74488ad02cbc37c110d1d8e2&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>');
});