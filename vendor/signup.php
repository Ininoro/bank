<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'site');
$query=mysqli_query($connect, "SELECT * FROM `users`");

if (isset($_POST['login']) != $_SESSION['login'] ) {

    $login = $_POST["login"];
    $password = $_POST["password"];
    $password_confirm=$_POST["password_confirm"];
    $token = $_POST["token"];

    
    }

    if ($password === $password_confirm) {


        $password = password_hash($password);

        $query=$connect->query("INSERT INTO `users` (`id`,`login`, `password`, `token`) 
        VALUES (NULL, '$login', '$password', '$token')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>

