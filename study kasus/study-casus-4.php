<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
<center>
<?php
    $angka = 0;
    $hasil = "";

    function isPrima($n){
        if($n <= 1) return false;
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0) return false;
        }
        return true;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $angka = $_POST["angka"];
        $hasil = (isPrima($angka));
        if($hasil){
            echo "$angka adalah bilangan prima";
        }else{
            echo "$angka bukan bilangan prima";
        };
    }
?>

    <form action="study-casus-4.php" method="post">
        <input type="number" name="angka" id="angka" required><br><br>
        <button type="submit">Cek</button>
    </form>
<center>
</body>
</html>