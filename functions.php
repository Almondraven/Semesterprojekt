<?php
function onSave(){
    if (isset($_POST["elMassage"])) {
        $elMassage = $_POST["elMassage"];
    }
    else {
        $elMassage = "off";
    }
    if (isset($_POST["exLegsupp"])) {
        $exLegsupp = [$_POST["exLegsupp"]];
    }
    else {
        $exLegsupp = "off";
    }
    $productnr = 0;
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


function printProduct($chairNumber){
    
    $productsArray = [
        ["name" => "Nobel 8900" , "color" => "red" , "price" => 14995],
        ["name" => "Munin 6360" , "color" => "grey" , "price" => 27545],
        ["name" => "Bear 6500" , "color" => "blue" , "price" => 14120],
        ["name" => "Cantate 6010" , "color" => "grey" , "price" => 14445],
        ["name" => "Plus 5920" , "color" => "blue" , "price" => 10960],
        ["name" => "Applaus 5610" , "color" => "grey" , "price" => 7200]
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

function filter(){

}


?>