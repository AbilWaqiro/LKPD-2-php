<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Orbitron', sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 20px;
            box-shadow: 0 0 2px black;
            border-radius: 4px 0 4px 0;
            width: 25%;
            padding: 2%;
            margin-left: 2%;
        }

        button {
            border: none;
            background-color: rgb(75, 74, 74);
            color: white;
            padding: 8px;
            width: 150px;
            font-family: 'Orbitron', sans-serif;
            font-weight: bold;
            border-radius: 4px 0 4px 0;
            box-shadow: 0px 2px 5px black;
            cursor: pointer;
        }
        p {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>Masukkan Angka 1</label><br>
                <input type="number" name="angka_1" required><br>
                <label>Masukkan Angka 2</label><br>
                <input type="number" name="angka_2" required><br>
                <label>Pilih Metode</label><br>
                <select name="metode" id="metode" required>
                    <option value="">Pilih Metode</option>
                    <option value="x">x</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value=":">:</option>
                </select><br/><br/>
                <button type="submit">Periksa</button><br><br>
            </form>
    <!--php-->
    <?php 
    $hasil = 0; 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $angka1 = $_POST['angka_1'];
        $angka2 = $_POST['angka_2'];
        $method = $_POST['metode'];

        
        if ($method === "x") {
            $hasil = $angka1 * $angka2;
        } elseif ($method === "+") {
            $hasil = $angka1 + $angka2;
        } elseif ($method === "-") {
            $hasil = $angka1 - $angka2;
        } elseif ($method === ":") {
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = "Error: Division by zero";
            }
        } else {
            $hasil = "Error: Invalid method";
        }
        echo "Hasil : ". $hasil;
    } else {
        $hasil = "Error: Invalid request method";
    }
    ?>
<!--end php-->
</center>
</div>
</body>
</html>
