

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: sans-serif;
    }
</style>
<body>
<center>
    <h2>Katakter kata</h2>
    <form action="study-casus-5.php" method="post">
        <input type="text" name="kata" id="kata"><br><br>
        <button type="submit">Cek</button>
    </form><br>
<!--PHP-->
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
        $kata = $_POST['kata'];

        if ($kataKata = strlen($kata)) {
            echo "Total karakter : ". $kataKata;
        } else {
            echo "tdk ada karakter";
        }
    }
?>
<!--End PHP-->
<center>
</body>
</html>