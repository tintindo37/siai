<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $gender = $_POST["gender"];
    $imienazw =  $_POST["imienazw"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $urodziny = $_POST["urodziny"]
    if(empty($gender) && empty($imienazw) && empty($number) && empty($email) && empty($urodziny)){
        echo "Twoje imię i nazwisko to $imienazw";
        echo "Twoja płeć to $gender";
        echo "Twój numer to $number";
        echo "Twój email to $email";
        echo "Twoje urodziny to $urodziny";
    }
    else{
        echo "Nie podano dannych";
    }
}
else{
    echo "Nie jest post";
}
?>