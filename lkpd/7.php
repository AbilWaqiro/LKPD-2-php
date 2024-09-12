<?php

function wrapText($text) {
    $count = str_split($text); //untuk Membagi teks menjadi array karakter

    if (count($count) > 50) { //untuk Memeriksa apakah panjang teks lebih dari 50 karakter
        $text = substr($text, 0 , 50); //untuk Memotong teks menjadi 50 karakter pertama
        $text .= "..."; //untuk Menambahkan ellipsis di akhir teks yang dipotong
    }

    echo $text; // Menampilkan teks
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

echo "<b>Kalimat awal : </b> " . $kata . "</br>"; //untuk Menampilkan kalimat awal dengan format HTML

wrapText($kata); //untuk Memanggil fungsi wrapText dengan teks sebagai parameter
?>
