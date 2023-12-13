<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
<form action="vendor/signup.php" method="post">
    <label for="full_name">ФИО</label>
    <input type="text" name="full_name" id="full_name" placeholder="Введите имя">

    <label for="login">Логин</label>
    <input type="text" name="login" id="login" placeholder="Введите логин">

    <label for="email">Почта</label>
    <input type="email" name="email" id="email" placeholder="Введите почту">

    <label for="password">Пароль</label>
    <input type="password" name="password" id="password" placeholder="Пароль">

    <label for="password_confirm">Подтверди пароль</label>
    <input type="password" name="password_confirm" id="password_confirm" placeholder="Подтверждение пароля">
    <button>Зарегистрироваться</button>

    <p>У вас уже есть аккаунт? <a href="Index.php">Войти</a></p>
</form>
</body>
</html>