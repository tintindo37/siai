<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);    
    if($conn->connect_error) die ("General failure");

?>
