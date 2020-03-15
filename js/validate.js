$('.reg__form').on('click', '#enter', function(){
    $('.reg__form input:not([type=button])').removeClass('error'); 
    var hasErrors = false;

    $('.reg__form input:not([type=button])').each(function(){
        if ($(this).val().trim() == '') {
          hasErrors = true;
          $(this).addClass('error');   
        }
        if (!($('.myCheckbox').prop('checked'))) {
            hasErrors = true;
            $('.error__checkbox').removeClass('hide');
        } else {
            $('.error__checkbox').addClass('hide');
        }
    });  
    
    return hasErrors ? false : true; // тут отправка формы либо вернуть false
});

$('.feedback__form').on('click', '#enter1', function(){
    $('.feedback__form input:not([type=button])').removeClass('error'); 
    var hasErrors = false;

    $('.feedback__form input:not([type=button])').each(function(){
        if ($(this).val().trim() == '') {
          hasErrors = true;
          $(this).addClass('error');   
        }
    });  
    
    return hasErrors ? false : true; // тут отправка формы либо вернуть false
});