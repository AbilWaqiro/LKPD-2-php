<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Hari dan Pembayaran</title>
</head>
<body>
    <form method="post" action="">
        Input Pembayaran: <input type="text" id="pembayaran" name="pembayaran">
        <input type="submit" value="Hitung">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mengambil nilai pembayaran dari form
         $pembayaran = $_POST['pembayaran']; 

        // Nama hari dalam bahasa Inggris
        $namaHari = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        // Persentase diskon
        $diskonHariPersen = 7 / 100; 
        $diskonPembayaranPersen = 5 / 100; 

        //untuk Mendapatkan hari, disini hari yg saya mau adalah hari selasa
        $hari = date('5');
        
        //untuk Mendapatkan nama hari berdasarkan array indeks
        $hariIni = $namaHari[$hari];

        // Inisialisasi total diskon
        $totalDiskon = 0;

        //kondisi untuk cek apakah hari ini Jumat dan total belanja lebih dari 100.000
        if ($hariIni === 'Friday') {
            if ($pembayaran > 100000) {
                $diskonHari = $pembayaran * $diskonHariPersen;
                $diskonPembayaran = $pembayaran * $diskonPembayaranPersen;
                $totalDiskon = $diskonHari + $diskonPembayaran;
            } else {
                $totalDiskon = $pembayaran * $diskonHariPersen;
            }
        } else {
            if ($pembayaran > 100000) {
                $totalDiskon = $pembayaran * $diskonPembayaranPersen;
            } else {
                $totalDiskon = 0;
            }
        }

        $totalBelanja = $pembayaran - $totalDiskon; //untuk mengurangi total pembayaran jika mendapat diskon

        // Menampilkan hasil
        echo "Hari: " . $hariIni . "<br>";
        echo "Total Belanja: " . number_format($pembayaran, 3) . "<br>";
        echo "Total yang Harus Dibayar: " . number_format($totalBelanja, 3) . "<br>";
    }
    ?>
</body>
</html>
