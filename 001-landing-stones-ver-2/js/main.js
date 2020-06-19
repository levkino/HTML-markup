const mailRecipient = 'tatyana-arh1@bk.ru, ruslan@petromramor.ru';

// const menu = document.querySelector('.menu');
// const burger = document.querySelector('.burger');
// burger.addEventListener('click', function() {
//   this.classList.toggle('active');
//   menu.classList.toggle('active');
//   document.body.classList.toggle('lock');  
// });

// $('.box').click(function(){
//     $(this).addClass('fileFocus');
// });

$(document).ready(function() {
  // Инициализация wow-появлений
  new WOW().init();

  // Инициализация масок ввода
  $('.phone-input').mask("+7 (000) 000-00-00", {placeholder: "+7 (___) ___-__-__"});

  // Инициализация полей выбора файла с формы запроса цены
  $('input[type="file"]').change(function() {
    const textBox = $(this).parent().find('input[type="text"]');
    textBox.attr("placeholder", this.value.replace(/^.*[\\\/]/, ''));
  });

  // Инициализация кнопки заказа звонка с формы запроса цены
  $('.calc-form__call-button').click(function() {
    const form = $(this).closest('form');
    const phoneInput = form.find('.calc-form__phone-input');
    callRequest(phoneInput);
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
    responsive: [{ breakpoint: 651, settings: { slidesToShow: 3 }}]
  });
  $(".production__gallery").slick({ dots: true });
});

function scrollToHash(selector) {
  const top = $(selector).offset().top;
  $('html, body').animate({ scrollTop: top }, 500);
}

$('a[href*="#"]').on('click', function(e) {
  if (this.hash.length > 3) {
    if (this.className.includes('menu')) {
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
    alert('Укажите телефон');
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

function calcRequest(formNumber) {
  const question = document.querySelector(`#calc-question${formNumber}`).value;
  if (!question) {
    alert('Укажите вопрос');
    return;
  }

  const email = document.querySelector(`#calc-email${formNumber}`).value;
  if (!email) {
    alert('Укажите электронную почту');
    return;
  }

  const phone = document.querySelector(`#calc-phone${formNumber}`).value;
  
  const data = {
    recipient: mailRecipient,
    title: 'Запро цены',
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