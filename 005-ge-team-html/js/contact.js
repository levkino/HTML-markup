const inputName = document.querySelector('.request__name');
const inputEmail = document.querySelector('.request__email');
const inputMessage = document.querySelector('.request__message');
const submitButton = document.querySelector('.request__sumbit');
submitButton.addEventListener('mouseover', () => {
  if (!inputName.value) {
    inputName.classList.add('error');
  }
  if (!inputEmail.value) {
    inputEmail.classList.add('error');
  }
  if (!inputMessage.value) {
    inputMessage.classList.add('error');
  }
});
submitButton.addEventListener('mouseout', () => {
  inputName.classList.remove('error');
  inputEmail.classList.remove('error');
  inputMessage.classList.remove('error');
});

$('.request__message').autosize();