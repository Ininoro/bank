<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style='background-image:url()'>

<a href="index.php" style='text-decoration:none'>
    <div class="header_logo">
            <img src="./img/logo.png" alt="" class="logo-pic">
            <p>Единый городской финансовый центр</p>
        </div>
    </a>

    <form action="vendor/signup.php" method="POST">
    <h1 class='auth_H1'>Регистрация</h1>

        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
        <label>Введите код</label>
        <input type="password" name="token" placeholder="Введите код" required>
        <button class='auth_button' type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href=".//login.php">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

        
    </form>

</body>
</html>