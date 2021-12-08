<?php
include("./functions.php");
include("./controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Funiture's webshop</title>
</head>

<body bgcolor="#ffcccb"> 
    <h1>
        Eksempel på gallerivisning
    </h1>
    <?php
    for ($i = 0; $i<6; $i++){
        echo printProduct($i);
        ?>
        <ul>
        <a href="./gallerivisning.php">Se produkt</a>
        </ul>
        <hr>
        <?php
        
    }
    
    ?>
    
</body>
</html>