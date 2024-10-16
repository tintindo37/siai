<?php
require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);    
    if($conn->connect_error) die ("General failure");
    $query = 'INSERT INTO koty VALUES (NULL, "Europejska", "pixel", 14)';
    $res = $conn->query($query);    
    if(!$res){die("Brak dostępu");}

?>
