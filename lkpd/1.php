<?php

// Kalimat yang akan diperiksa
$kalimat = "Selamat ulang tahun ke-17!";

// Ekspresi reguler untuk mencocokkan simbol-simbol khusus
preg_match_all( '/[^a-zA-Z0-9\s]/', $kalimat, $matches);

if ($matches[0] > 0) {
    //menghilangkan duplikasi simbol, sehingga hanya simbol-simbol unik yang disimpan di dalam array $uniquesymbols
    $uniqueSymbol = array_unique($matches[0]);
    echo "Simbol yg terdapat..". implode(',', $uniqueSymbol);
} else {
    echo "tdk terdapat simbol..";
}
?>