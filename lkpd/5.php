<?php 

//array index 
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bilangan = array_merge($bil1, $bil2); //untuk mencocokan 2 array
$unique = array_unique($bilangan); //hasil setelah di cocok kan

rsort($unique); //untuk menyusun array dari besar - kecil

echo "Hasil : ";

echo  implode(',', $unique); //untuk membuat celah di setiap nilai array
?>