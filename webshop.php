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
        Eksempel på kollektionsvisning
    </h1>

    <form method="post">
        <input type="text" name = "filter">
        <button type="submit">sæt max pris</button>
    </form>

    <?php
    for ($i = 0; $i<6; $i++){
        if(isset($_POST["filter"])){
            if(filter($_POST["filter"],$i)==true){
                echo printProduct($i);
            ?>
            <ul>
            <a href="./gallerivisning.php?product=<?php echo $i; ?>">Se produkt</a>
            </ul>
    
            <hr>
            <?php
            }

        } else{
            echo printProduct($i);
            ?>
            <ul>
            <a href="./gallerivisning.php?product=<?php echo $i; ?>">Se produkt</a>
            </ul>
    
            <hr>
            <?php
        }
    }
    ?>
    
</body>
</html>