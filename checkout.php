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
<body bgcolor="a333ff">
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
            <hr>
        <?php }?>
    </ul>
    <?php
        echo "samlet pris ". beregnPrisKurv();
    ?>
    <form method = "get"> 
  <label for="payment" name = "payment">Vælg betalingsmetode:</label>
  <select id="payment" name="payment">
    <option value="mastercard">Mastercard</option>
    <option value="dankort">Dankort</option>
    <option value="mobilepay">Mobielpay</option>
    <option value="paypal">Paypal</option>
  </select>
  <button type="submit">Betal</button>
</form>
<?php
    if ($_GET["payment"] == "mastercard"){
        echo "Her udfyldes mastercards betalingsformular";
    }
    if ($_GET["payment"] == "dankort"){
        echo "Her udfyldes dankort betalingsformular";
    }
    if ($_GET["payment"] == "mobilepay"){
        echo "Her udfyldes mobilepays betalingsformular";
    }
    if ($_GET["payment"] == "paypals"){
        echo "Her udfyldes paypals betalingsformular";
    }
?>
<hr>
    <form method="post">
        Skriv din mail <input type="text" name = "mail">
        <button type="submit">Send bekræftigelses mail</button>
    </form>
    <hr>
    <?php
        if (isset($_POST["mail"])){
            mail($_POST["mail"],"bekræftigelses mail 1 semester", "bekræftigelses mail sendt fra prototype webshop");
        }
    ?>
    <ul>
        <a href="./webshop.php">Gå til kollektion</a>
    </ul>
</body>
</html>