<?php
// Jumlah Rupiah yang ingin dikonversi
$rupiah = 1750; // Anda dapat mengganti nilai ini dengan jumlah Rupiah yang Anda inginkan

$coins = [1000, 500, 200, 100];
$result = [];

// Menghitung jumlah koin
foreach ($coins as $coin) {
    $result[$coin] = intdiv($rupiah, $coin); // Menghitung jumlah koin
    $rupiah = $rupiah % $coin; // Sisa rupiah setelah diambil koin
}

// Menampilkan hasil
echo "Jumlah koin yang diperlukan: <br>";
foreach ($result as $coin => $count) {
    echo "Koin Rp $coin : $count <br>";
}
?>
