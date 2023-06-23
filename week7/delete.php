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




    if (isset($_GET['product_code'])) {

        $productnummer = $_GET['productnummer'];
    
    
    
    
    
        $sql = "DELETE FROM productenn WHERE productnummer = ?";
    
        $stmt= $pdo->prepare($sql);
    
        $stmt->execute([$productnummer]);
    
    
    
    
        echo "product is er niet meer";
    
    
    
    
    } else {
    
        echo "De product is er";
    
    }




?>