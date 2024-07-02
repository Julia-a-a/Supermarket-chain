<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./css/style_registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script>
        function validateEmail() {
            var emailField = document.getElementsByName("email")[0];
            var email = emailField.value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailRegex.test(email)) {
                alert("Некорректный адрес электронной почты");
                emailField.focus();
                return false;
            } else {
                return true;
            }
        }

        function validateForm() {
            return validateEmail();
            // Здесь можно добавить другие функции валидации для других полей
        }
    </script>
</head>
<body>
    <div class="form_h">
        <h2>Регистрация</h2>
    </div>
    <form method='POST' action='http://localhost/php/register.php' onsubmit='return validateForm();'>
        <input type="text" name="Name" placeholder="Name" required>
        <input type="text" name="Surname" placeholder="Surname" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="text" name="RepeatPassword" placeholder="RepeatPassword" required>
        <input type="mail" name="email" placeholder="email" required>
        <div class="form-button_two">
            <input type="submit" name="Зарегистрироваться" value="Зарегистрироваться">
        </div>
    </form>
    <script src="scripts/script.js"></script>
</body>
</html>