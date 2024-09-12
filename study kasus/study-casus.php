<?php 

$kalimat = "Wikrama Bogor";
$karakterSerch = "a";

if (preg_match_all('/'.$karakterSerch.'/', $kalimat, $matches)) {
    echo "Karekter yg <b>". $karakterSerch. "</b> muncul sebanyak : <b>" . count($matches[0]) . " kali</b><br>";
} else {
    echo "tidak ada karakter yg anda cari";
}

?>