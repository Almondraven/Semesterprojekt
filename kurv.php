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
<body bgcolor="#ceff33">
    <h1>
        Kurv
    </h1>
    <ul>
        <?php foreach(getFromFile() as $key => $product){?>
            <?php 
            
            foreach($product as $placenr => $numProducts){
                
                if ($placenr == 0){
                    echo printProduct($numProducts)."<br>";
                }
                else{
                    echo $numProducts."<br>";
                }
                
            } 
            ?>
            <a href="?key=<?php echo $key; ?>" >slet</a>
            <hr>
        <?php }?>
    </ul>
    <ul>
        <a href="./webshop.php">Gå til kollektion</a>
    </ul>
</body>
</html>