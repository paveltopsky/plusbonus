var save = document.querySelector('.save');
var input = document.querySelector('.sms-code__form');

save.addEventListener('click', openSmsForm);

function openSmsForm() {
    input.classList.remove('hide');
}