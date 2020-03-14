var save = document.querySelector('.save');
var input = document.querySelector('.sms-code__form');

save.addEventListener('click', openSmsForm);

function openSmsForm() {
    input.classList.remove('hide');
}

// open reg modal

var btnToModalReg = document.querySelector('.reg-btn');
var modalReg = document.querySelector('.reg-modal');

btnToModalReg.addEventListener('click', openRegModal);

function openRegModal() {
    modalReg.classList.add('regModal-show');
}

// show regBtn

var toRegBtn = document.querySelector('.confirm-phone__btn');
var comeInBtn = document.querySelector('.come-in__wrap');

toRegBtn.addEventListener('click', openRegBtn);

function openRegBtn() {
    comeInBtn.classList.remove('hide');
    toRegBtn.classList.add('hide');
}