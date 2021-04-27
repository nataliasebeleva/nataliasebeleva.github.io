/*
    Авторизация
 */

$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/profile.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

/*
    Получение аватарки с поля
 */

let avatar = false;

$('input[name="avatar"]').change(function (e) {
    avatar = e.target.files[0];
});

/*
    Регистрация
 */

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    let cut_symbol = full_name.replace(/[^а-яё\d\-\s]/gi,'');
    let check_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    if(full_name != cut_symbol) { 
        $('.msg').css('display', 'block');
        $('.msg').html("ФИО должно содержать только русские буквы, дефисы и пробелы");
        $(`input[name="full_name"]`).addClass('error');
    }   
    else if(check_email != true) {
        $('.msg').css('display', 'block');
        $('.msg').html("Email введен некорректно");
        $(`input[name="email"]`).addClass('error');
    }
    else {    
        let formData = new FormData();
        formData.append('login', login);
        formData.append('password', password);
        formData.append('password_confirm', password_confirm);
        formData.append('full_name', full_name);
        formData.append('email', email);
        formData.append('avatar', avatar);


        $.ajax({
            url: 'vendor/signup.php',
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            success (data) {

                if (data.status) {
                    document.location.href = '/index.php';
                } else {

                    if (data.type === 1) {
                        data.fields.forEach(function (field) {
                            $(`input[name="${field}"]`).addClass('error');
                        });
                    }

                    $('.msg').removeClass('none').text(data.message);

                }

            }
        });
    }
});
