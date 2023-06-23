<?php

$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "connext to database $db";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}











       session_start();
if (isset($_POST['knop'])) {
    if (isset($_POST['naam']) && isset($_POST['email'])) {
 

       $_SESSION['naam'] =  $_POST['naam'];
       $_SESSION['email'] = $_POST['email'];
        header('location:variable.php');
    }
}
 



// $stmt = $pdo->query("SELECT * FROM productenn ORDER BY productnummer");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<input type="text" name="naam" placeholder="naam">
<input type="email" name="email" id="" placeholder="email">
<input type="submit" name="knop">
</form>
</body>
</html>