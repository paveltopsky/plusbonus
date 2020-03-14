var btnToFeedbackForm = document.querySelector('.open-partner__btn'),
    feedbackForm = document.querySelector('.feedback__form');

btnToFeedbackForm.addEventListener('click', openFeedbackForm);

function openFeedbackForm() {
    feedbackForm.classList.remove('hide');
    btnToFeedbackForm.classList.add('hide');
}