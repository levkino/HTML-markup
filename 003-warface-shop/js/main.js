const menu = document.querySelector('.menu');
const burger = document.querySelector('.burger');
burger.addEventListener('click', function() {
  this.classList.toggle('active');
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');  
});

document.addEventListener("DOMContentLoaded", function() {
  
});