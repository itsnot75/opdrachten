<?php
echo $_GET['voornaam'] . $_GET['achternaam'] . $_GET['leeftijd'] . $_GET['adres'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
<input type="text" name="voornaam" placeholder="naam"> <br><br>
<input type="text" name="achternaam" placeholder="achternaam"> <br><br>
<input type="text" name="leeftijd" placeholder="leeftijd"><br><br>
<input type="text" name="adres" placeholder="adres"><br><br>
<input type="submit" value="submit">


    </form>




</body>
</html>