<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hai Dang Do Hoang">
    <title>Kalkulator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="numer jeden">
        <select name="wybierz">
            <option value="+">+</option>
            <option value="-">-</option> 
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num02" placeholder="numer dwa">
        <button>Kalkuluj</button>
    </form>
<?php
    $num01 = $_POST["num01"];
    $num02 = $_POST["num02"];
    $wybierz = $_POST["wybierz"];  
    echo "liczba 1 to " .$num01. "<br>";
    echo "liczba 2 to " .$num02. "<br>";
    if ($wybierz ==="+") {
        $obliczenie = $num01+$num02;
        echo "wynik sumy to"  .$obliczenie ;
    }
    if ($wybierz === "-") {
        $obliczenie = $num01-$num02;
        echo "wynik to" .$obliczenie. "<br>";
    }
    if ($wybierz ==="*") {
        $obliczenie = $num01*$num02;
        echo "wynik to" . $obliczenie;
    }
    if ($wybierz ==="/"){
        $obliczenie = $num01/$num02;
        echo "wynik to" .$obliczenie;
    }
    ?>   
</body>
</html>