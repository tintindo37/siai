<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $gender = $_POST["gender"];
    $imienazw =  $_POST["imienazw"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $urodziny = $_POST["urodziny"];
    if(!empty($gender) && !empty($imienazw) && !empty($number) && !empty($email) && !empty($urodziny)){
        echo "Twoje imię i nazwisko to $imienazw <br>";
        echo "Twoja płeć to $gender <br>";
        echo "Twój numer to $number <br>";
        echo "Twój email to $email <br>";
        echo "Twoje urodziny to $urodziny <br>";
    }
    else{
        echo "Nie podano dannych <br>";
    }
}
else{
    echo "Nie jest post <br>";
}
?>