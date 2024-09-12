<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Input Kalimat: <input type="text" id="kalimat" name="kalimat">
        <input type="submit" value="Kirim">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kalimat yang akan diperiksa
        $kalimat = $_POST['kalimat'];

        // Ekspresi reguler untuk mencocokkan simbol-simbol khusus
        preg_match_all('/[\-\!\@\#\$\%\^\&\*\(\)\_\+\=\{\}\[\]\:\;\"\'\<\>\,\.\?\/\|\\\`\~]/', $kalimat, $symbolMatches);
        preg_match_all('/\d/', $kalimat, $numberMatches);

        $uniqueSymbols = array_unique($symbolMatches[0]);
        $containsSymbols = !empty($uniqueSymbols);
        $containsNumbers = !empty($numberMatches[0]);

        echo "<b>Kalimat Sebelum nyA :</b> ". $kalimat. "<br>";

        if ($containsSymbols) {
            echo "Simbol yang terdapat: " . implode('', $uniqueSymbols) . "<br>";
        } else {
            echo "Tidak terdapat simbol.<br>";
        }

        if ($containsNumbers) {
            $uniqueNumbers = array_unique($numberMatches[0]);
            echo "Angka yang terdapat: " . implode('', $uniqueNumbers);
        } else {
            echo "Tidak terdapat angka.";
        }
    }
    ?>
</body>
</html>
