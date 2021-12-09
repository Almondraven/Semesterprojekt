<?php
if (isset($_POST["seatHeight"]) 
&& isset($_POST["seatDepth"])
&& isset($_POST["seatWitdh"]) 
&& isset($_POST["backHeight"])){
    onSave();
}
if(isset($_GET["key"])){
    deleteProduct();
}
if(isset($_GET["product"])){
    selectProduct();
}
?>