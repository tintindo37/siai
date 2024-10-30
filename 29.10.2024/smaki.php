<?php
if(isset($_POST["imie"]) && isset($_POST["smak"])){
    $imie = $_POST["imie"];
    $smak =  $_POST["smak"];

    echo "Hej $imie, Twoja ulubionw smaki to:";
    foreach ($smak as $x){
        echo "<br> $x";
    }
}
  

?>
