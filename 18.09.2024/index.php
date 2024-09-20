<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hai Dang Do Hoang">
    <link rel="stylesheet" href="styles.css">
    <title>Kalkulator</title>
    <script src="copyright.js"></script>
</head>
<body>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]); ?>" method="post">
            <input type="number" name="num01" placeholder="Podaj pierwszą liczbę">
            <select name="wybierz">
                <option value="+">+</option>
                <option value="-">-</option> 
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="num02" placeholder="Podaj drugą liczbę">
            <br>
            <button>Kalkuluj</button>
        </form>
    </div>
<?php
    if(isset($_POST["num01"]) && isset($_POST["num02"]) && isset( $_POST["wybierz"])) {
        $num01 = $_POST["num01"];
        $num02 = $_POST["num02"];
        $wybierz = $_POST["wybierz"];  
        echo "liczba pierwsza to " .$num01. "<br>";
        echo "liczba druga to " .$num02. "<br>";
        if ($wybierz ==="+") {
            $obliczenie = $num01+$num02;
            echo "wynik sumy to "  .$obliczenie ;
        }
        if ($wybierz === "-") {
            $obliczenie = $num01-$num02;
            echo "wynik to " .$obliczenie. "<br>";
        }
        if ($wybierz ==="*") {
            $obliczenie = $num01*$num02;
            echo "wynik to " . $obliczenie;
        }
        if ($wybierz ==="/"){
            $obliczenie = $num01/$num02;
            echo "wynik to " .$obliczenie;
        }
        if ($wybierz ==="%"){
            $obliczenie = $num01%$num02;
            echo "wynik to " .$obliczenie;
        }
    }
    ?>   
</body>
</html>