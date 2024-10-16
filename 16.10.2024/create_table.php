<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);    
    if($conn->connect_error) die ("General failure");
    $query = "CREATE TABLE koty(
        ID smallint not null auto_increment,
        rodzina varchar(32) not null,
        imie varchar(32) not null,
        wiek tinyint not null,
        PRIMARY KEY (ID)
    )";
    $res = $conn->query($query);
    if(!$res){die("Brak dostępu");}
    $res -> close();
    $conn -> close();
?>
