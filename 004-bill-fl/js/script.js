let advantages = document.querySelectorAll('.advantage');
let spy = document.querySelector('.selected');
const advantagesTooltips = document.querySelectorAll('.advantage-tooltip');

let currentActive = 0;
let height = 150;
let currentTopPosition = 0;

const clearAllActive = () => {
  advantages.forEach(advantage => {
    advantage.classList.remove('active');
    advantage.classList.remove('active-tab-mobile')
  });
  advantagesTooltips.forEach(tooltip => {
    tooltip.classList.add('d-none');
  })
}

advantages.forEach((advantage, i) => {
  advantage.addEventListener('click', (e) => {

    currentTopPosition = height * i;
    spy.style.top = currentTopPosition + 'px';
    clearAllActive();
    advantage.classList.add('active');
    advantage.classList.add('active-tab-mobile');
    advantagesTooltips[i].classList.remove('d-none');
  })
})

const menuBtn = document.querySelector('#menu-btn');
const menu = document.querySelector('#menu');

menuBtn.addEventListener('click', () => {
  menuBtn.classList.toggle('burger_open');
  menu.classList.toggle('menu_open');
});

$(document).ready(function () {
  const marquee = $('.partners__logos');
  if (marquee.length) {
    const isMobile = $(document).width() < 768;
    const row = $('.partners__logos .row');
    row.width(isMobile ? 3 * marquee.width() : marquee.width());
    row.css('flex-direction', 'row');
    marquee.css('overflow', 'hidden');
    marquee.marquee({
      duration: isMobile ? 5000 : 10000,
      gap: 0,
      delayBeforeStart: 0,
      startVisible: true,
      duplicated: true
    });
  }
})

var btn = $('#buttongoup');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


const toggleModal = () => {
  const modal = document.querySelector('#modal');
  modal.classList.toggle('modal_visible');
}

document.querySelector('#close-icon').addEventListener('click', () => {
  toggleModal();
})

const form = document.querySelector('#form');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  let name = form.querySelector('#name').value;
  let email = form.querySelector('#email').value;
  let phone = form.querySelector('#phone').value;
  let companyName = form.querySelector('#company-name').value;
  let site = form.querySelector('#site').value;
  let message = form.querySelector('#message').value;

  let body = new FormData(form);



  let response = await fetch('/mail.php', {
    method: 'POST',
    body
  })

  response = await response.json();

  this.toggleModal();
})