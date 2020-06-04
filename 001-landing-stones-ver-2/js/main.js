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
    centerMode: true,
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


function callRequest() {
  const name = document.querySelector('#call-name').value;
  if (!name) {
    // alert('Укажите имя');
    // return;
  }
  const phone = document.querySelector('#call-phone').value; 
  if (!phone) {
    alert('Укажите телефон');
    return;
  }
  const data = {
    // recipient: 'tatyana-arh1@bk.ru',
    recipient: 'levkino@yandex.ru',
    // recipient: 'stones@petromramor.ru',
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

  const email = document.querySelector(`#calc-phone${formNumber}`).value;
  if (!email) {
    alert('Укажите электронную почту');
    return;
  }
  
  const data = {
    // recipient: 'tatyana-arh1@bk.ru',
    recipient: 'levkino@yandex.ru',
    // recipient: 'stones@petromramor.ru',
    title: 'Заказ звонка',
    fields: {
      Вопрос: question,
      'E-mail': emails
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