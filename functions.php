<?php
function onSave(){
    if (isset($_POST["elMassage"])) {
        $elMassage = $_POST["elMassage"];
    }
    else {
        $elMassage = "off";
    }

    if (isset($_POST["exLegsupp"])) {
        $exLegsupp = $_POST["exLegsupp"];
    }
    else {
        $exLegsupp = "off";
    }
    $productnr = selectProduct();
    $specsArray = [$productnr, 
     $_POST["seatHeight"], 
    $_POST["seatDepth"],
    $_POST["seatWitdh"], 
    $_POST["backHeight"],
    $elMassage,
    $exLegsupp
    ];
    saveToFile($specsArray);
}

function saveToFile($productSpecs){
    $kurvIndhold = getFromFile();
    $kurvIndhold[] = $productSpecs;
    $jsonKurv = json_encode($kurvIndhold);
    file_put_contents("./kurv.json", $jsonKurv);
}

function getFromFile(){
    $jsonKurv = file_get_contents("./kurv.json");
    $KurvArray = json_decode($jsonKurv, true); 
    //print_r($notesArray);
    return $KurvArray;
}

function deleteProduct(){
    $kurvArray = getFromFile();
    unset($kurvArray[$_GET["key"]]);
    $jsonKurv = json_encode($kurvArray);

    file_put_contents("./kurv.json", $jsonKurv);
    header("http://localhost/Semesterprojekt/kurv.php");
}

function selectProduct(){
    $productnr = ($_GET["product"]);
    header("http://localhost/Semesterprojekt/gallerivisning.php");
    return $productnr;
}

function beregnPrisKurv(){
    $prisArray = [14995,27545,14120,14445,10960,7200];
    $samletPris = 0;
    foreach (getFromFile() as $products){
        foreach($products as $placenr => $numProducts){
            if ($placenr == 0){
                $samletPris = $samletPris + $prisArray[$numProducts];
            }
            if ($placenr == 5 && $numProducts == "on"){
                $samletPris = $samletPris + 6000;
            }   
            if ($placenr == 6 && $numProducts == "on"){
                $samletPris = $samletPris + 500;
            }
        } 
    }
    return $samletPris;
}

function printProduct($chairNumber){
    
    $productsArray = [
        ["name" => "Navn: Nobel 8900" , "color" => "Farve: red" , "price" => "Pris: 14995"],
        ["name" => "Navn: Munin 6360" , "color" => "Farve: grey" , "price" => "Pris: 27545"],
        ["name" => "Navn: Bear 6500" , "color" => "Farve: blue" , "price" => "Pris: 14120"],
        ["name" => "Navn: Cantate 6010" , "color" => "Farve: grey" , "price" => "Pris: 14445"],
        ["name" => "Navn: Plus 5920" , "color" => "Farve: blue" , "price" => "Pris: 10960"],
        ["name" => "Navn: Applaus 5610" , "color" => "Farve: grey" , "price" => "Pris: 7200"]
    ];

    if ($chairNumber == 0){
        return($productsArray[0]["name"]. "<br>". 
        $productsArray[0]["color"]. "<br>". 
        $productsArray[0]["price"]);

    }
    
    else if ($chairNumber == 1){
        return($productsArray[1]["name"]. "<br>". 
        $productsArray[1]["color"]. "<br>". 
        $productsArray[1]["price"]);
    }

    else if ($chairNumber == 2){
        return($productsArray[2]["name"]. "<br>". 
        $productsArray[2]["color"]. "<br>". 
        $productsArray[2]["price"]);
    }

    else if ($chairNumber == 3){
        return($productsArray[3]["name"]. "<br>". 
        $productsArray[3]["color"]. "<br>". 
        $productsArray[3]["price"]);
    }

    else if ($chairNumber == 4){
        return($productsArray[4]["name"]. "<br>". 
        $productsArray[4]["color"]. "<br>". 
        $productsArray[4]["price"]);
    }

    else if ($chairNumber == 5){
        return($productsArray[5]["name"]. "<br>". 
        $productsArray[5]["color"]. "<br>". 
        $productsArray[5]["price"]);
    }
    else {
        return("product not found");
    }
}

function filter($maxP,$productnr){
    $prisArray = [14995,27545,14120,14445,10960,7200];
    if($maxP<$prisArray[$productnr]){
        return true;
    } else {
        return false;
    }
}


?>