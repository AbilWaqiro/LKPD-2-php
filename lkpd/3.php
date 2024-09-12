<?php

// Nilai awal yang akan diperiksa
$number = 90;

//untuk Loop dari 1 sampai nilai $number
for ($i = 1; $i <= $number; $i++) {
    //untuk Cek apakah $i adalah pembagi dari $number
    if ($number % $i == 0) {
        //untuk menampilkan pembagi dan hasil baginya
        echo $number . ":" . $i . "=" . ($number / $i) . "\n" . "<br>";
    }
}
 
?>
