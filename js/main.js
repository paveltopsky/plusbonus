var save = document.querySelector('.save');
var input = document.querySelector('.sms-code__form');

function openSmsForm() {
    input.classList.remove('hide');
}

// open registration form

var btnToFormReg = document.querySelector('.open-authorization__btn');
var formReg = document.querySelector('.reg__form');

btnToFormReg.addEventListener('click', openRegModal);

function openRegModal() {
    formReg.classList.add('regModal-show');
    btnToFormReg.classList.add('hide');
}

// show regBtn

var toRegBtn = document.querySelector('.confirm-phone__btn');
var comeInBtn = document.querySelector('.come-in__wrap');

toRegBtn.addEventListener('click', openRegBtn);

function openRegBtn() {
    comeInBtn.classList.remove('hide');
    toRegBtn.classList.add('hide');
}