
<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background-image:url('')">

<a href="index.php" style='text-decoration:none; color:black;'>
    <div class="header_logo">
            <img src="./img/logo.png" alt="" class="logo-pic">
            <p>Единый городской финансовый центр</p>
        </div>
    </a>
    <form action="vendor/signin.php" method="post">
        
        <h1 class='auth_H1'>Авторизация</h1>

        
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин" required>
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль"required>
                <button class='auth_button' type="submit">Войти</button>
                    
                <p>
            У вас нет аккаунта? - <a className="footer_a" href="/register.php">зарегистрируйтесь</a>!
             </p>
                  
                </div>
      
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);

            print_r($check_user);
    print_r($user);
        ?>

       

    </form>

</body>
</html>