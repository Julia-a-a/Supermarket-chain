<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
    <title>ОАЗИС</title>
    <link rel="stylesheet" href="./css/style_avtorization.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <form action='http://localhost/php/login.php' method="post">
    <div class="form">
        <div class="container">
            <div class="form_h">
                <h2>Вход</h2>
            </div>
            <div class="form-text"><!--Блок полями ввода и текстом-->
            <ul>           
                <li><input type="mail" name="Email" placeholder="email" required></li>
                <li><input type="password" name="Password" placeholder="password" required> </li>
                <li><a> Нет аккаунта? Регистрация ниже</a></li>
               <!--  <div class="g-recaptcha" data-sitekey="your_site_key"></div>-->
            </ul>
            </div>
                <div class="form-button"> <!--Блок c кнопками к форме-->
            <input type="submit" value="Войти" class="form-button_two">
            <a href="register_form.php"   class="form-button_two">Зарегистрироваться <a>
                </div>
        </div>
    </div>
    </form>
</body>
