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
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
  

 
    $stmt = $pdo->query("SELECT * FROM productenn");

   
    while ($row = $stmt->fetch()) {
        echo "Productnummer: " . $row["productnummer"] . "<br>";
        echo "Prijs per stuk: " . $row["prijs_per_stuk"] . "<br>";
        echo "Omschrijving: " . $row["omschrijving"] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());

}

        session_start();
    
        $naam = $_SESSION['naam'];
        $email = $_SESSION['email'];
        echo "welkom"  . " " .$naam . '<br>' . $email;






        

?>
