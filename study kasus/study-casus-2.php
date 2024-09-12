<?php

$number = 100;
$lipat3 = 3;
$lipat5 = 5;

for ($i = 1; $i <= $number; $i++) {
    if ($bagi = $i % $lipat3 == 0 && $bagi = $i % $lipat5 == 0) {
        echo "FizzBuzz <br>";
    } elseif ($bagi = $i % $lipat3 == 0) {
        echo "Fizz <br>";
    } elseif ($bagi = $i % $lipat5 == 0) {
        echo "Buzz <br>";
    }
    else {
        echo $i ."<br>";
    }
}
 
?>