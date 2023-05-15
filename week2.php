

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="week2.php" method="GET">

<input type="text" name="username" placeholder="username"> <br> <br>
<input type="password" name="password" id="" placeholder="password"><br> <br>
<input type="submit" value="submit">
</form>



</body>
</html>




<?php


// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 == $variabele2) {
//     echo "De twee waarden zijn gelijk";
// }

// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 != $variabele2) {
//     echo "De twee waarden zijn ongelijk";
// }

$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2){
    echo "De twee waarden zijn gelijk";
}
if($variabele1 != $variabele2){
    echo "De twee waarden zijn ongelijk";<br>
}

$name = $_GET["username"];
$password = $_GET["password"];

echo  " <br>username: " . $name ." <br> password" . $password;

?>

