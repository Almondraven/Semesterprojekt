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
    <title>Document</title>
</head>
<body bgcolor="33ffa4">
    <h1>
        Gallerivisning
    </h1>
    
    <?php
        echo printProduct(selectProduct());
    ?>
    <form method="post">
    Sædehøjde (mellem 30 og 50)
    <input type="text" name="seatHeight"> cm <br><br>
    Sædedybde (mellem 30 og 50)
    <input type="text" name="seatDepth"> cm <br><br>
    Sædebredde (mellem 30 og 50)
    <input type="text" name="seatWitdh"> cm <br><br>
    ryghøjde (mellem 30 og 50)
    <input type="text" name="backHeight"> cm <br><br>
    elektrisk massage
    <input type="checkbox" name="elMassage"> +6000 kroner <br><br>
    ekstra benstøtte
    <input type="checkbox" name="exLegsupp"> +500 kroner <br><br>
    <button type="submit">Tilføj til kurv</button>   
    </form>
    <hr>
    <ul>
        <a href="./kurv.php">Gå til kurv</a>
    </ul>
    <hr>
    <ul>
        <a href="./webshop.php">Gå tilbage</a>
    </ul>
</body>
</html>