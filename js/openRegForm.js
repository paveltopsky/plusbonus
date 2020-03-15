var btnToRegForm = document.querySelector('.open-authorization__btn'),
    regForm = document.querySelector('.reg__form');

btnToRegForm.addEventListener('click', openRegForm);

function openRegForm() {
    regForm.classList.remove('hide');
    btnToRegForm.classList.add('hide');
}

Array.from(document.querySelectorAll('.form__back-img'), function (el) {
    el.onclick = function () {
        closeForm();
    }
})

function closeForm() {
    regForm.classList.add('hide');
    btnToRegForm.classList.remove('hide');
}