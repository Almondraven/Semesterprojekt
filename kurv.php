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
        <?php foreach(getFromFile() as $key => $product){
            
            foreach($product as $placenr => $numProducts){
                
                if ($placenr == 0){
                    echo printProduct($numProducts)."<br>";
                }
                else if($placenr == 1) {
                    echo "Sædehøjde: ". $numProducts."<br>";
                }
                else if($placenr == 2) {
                    echo "Sædedybde: ". $numProducts."<br>";
                }
                else if($placenr == 3) {
                    echo "Sædebredde: ".$numProducts."<br>";
                }
                else if($placenr == 4) {
                    echo "Ryghøjde: ". $numProducts."<br>";
                }
                else if($placenr == 5) {
                    if ($numProducts=="on"){
                        echo "elektrisk masssage +6000 kroner "."<br>";
                    }
                }
                else if($placenr == 6) {
                    if ($numProducts=="on"){
                        echo "ekstra benstøtte +500 kroner "."<br>";
                    }
                }
                
            } 
            ?>
            <a href="?key=<?php echo $key; ?>" >slet</a>
            <hr>
        <?php }?>
    </ul>
    <?php
        echo "samlet pris ". beregnPrisKurv();
    ?>
    <ul>
        <a href="./webshop.php">Gå til kollektion</a>
    </ul>
</body>
</html>