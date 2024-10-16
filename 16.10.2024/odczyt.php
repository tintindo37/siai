<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);    
    if($conn->connect_error) die ("General failure");
    $query = "SELECT * FROM koty";
    $res = $conn->query($query);
    if(!$res){die("Brak dostępu");};
    $rows = $res -> num_rows;
    echo "<table><tr><th>id</th><th>rodzina</th><th>Imie</th><th>Wiek</th></tr</table>";
    for ($i=0; $i < $rows; $i++) {
        $r = $res -> fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for ($c=0; $c<4; $c++){
            echo "<td>". htmlspecialchars($r[$c]) ."</td>"; 
        }
        echo "</tr>";
    }
?>
