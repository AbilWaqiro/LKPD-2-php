<?php

function cari_jenis_koins($jumlah, $koin, $index = 0, $solusi = []) {
    if ($jumlah == 0) {
        return [$solusi];
    }
    if ($jumlah < 0 || $index >= count($koin)) {
        return [];
    }

    $kombinasi = [];

    $kombinasi = array_merge($kombinasi, cari_jenis_koins($jumlah, $koin, $index + 1, $solusi));

    $koinSekarang = $koin[$index];
    $solusiBaru = array_merge($solusi, [$koinSekarang]);
    $kombinasi = array_merge($kombinasi, cari_jenis_koins($jumlah - $koinSekarang, $koin, $index, $solusiBaru));

    return $kombinasi;
}

// Daftar koin yang tersedia
$koin = [1, 5, 10, 25, 50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 3000];

// Jumlah uang yang ingin dicapai (dalam satuan terkecil, misalnya sen)
$jumlah = 325500; // jika dalam satuan sen

// Menampilkan semua kombinasi koin untuk jumlah uang tertentu
$hasil = cari_jenis_koins($jumlah, $koin);

if ($hasil) {
    echo "Kombinasi koin untuk jumlah $jumlah:\n";
    foreach ($hasil as $solusi) {
        echo implode(', ', $solusi) . "\n";
    }
} else {
    echo "Tidak ada kombinasi koin yang dapat mencapai jumlah $jumlah.\n";
}

?>
