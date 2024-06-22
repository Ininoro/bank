<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}


$connect = new mysqli('localhost', 'root', '', 'site');// Подключается к базе данных 
$query=mysqli_query($connect, "SELECT * FROM `form`");

if (isset($_POST['fullname']) != $_SESSION['fullname'] ) {

    $fullname = $_POST["fullname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $selector = $_POST["selector"];
    $date = date("Y-m-d H:i:s");
    $query=$connect->query("INSERT INTO `form` (`id`,`fullname`, `number`, `email`, `selector`, `date`) 
    VALUES (NULL, '$fullname', '$number', '$email', '$selector', '$date')");
      header('Location:/'); 
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body">

<form method='POST' class='admin_block'>
  
<a href="vendor/logout.php" class="logout">Выход</a>
<?php
echo '<h1 class="admin_h1-1">Здравствуйте, ' . $_SESSION['user']['login'] . '</h1>';

?>
<div class="table_block">
<?php



$comments = $connect->query("SELECT * FROM form ORDER BY `form`.`date` DESC");

echo '<h1 class="admin_h1">Текущие заявки:</h1>';


echo "
            <table class=admin_table <tr><th>ФИО</th><th>Номер</th><th>Почта</th><th>Услуга</th><th>Дата</th><tr>
";


    while ($comments=mysqli_fetch_assoc($query))
    {
        echo "<tr>";
        echo "<td class='td_text'>" . $comments['fullname'] . "</td>";
        echo "<td class='td_text'> <a href=tel:'" . $comments['number'] . "'>" . $comments['number'] . "</td>";
        echo "<td class='td_text'>" . $comments['email'] . "</td>";
        echo "<td class='td_text'>" . $comments['selector'] . "</td>";
        echo "<td class='td_text'>" . $comments['date'] . "</td>";
        echo "<?tr>";
       
    }
    echo "</table> ";
    
$query->free();

 ?>
</div>
        


    </form>



    
</body>
</html>