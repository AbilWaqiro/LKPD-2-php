<?php 

function checkJawaban($nama, ...$arrJawaban){ //array pariadik
$jawaban = ['A','D','C','C','B','A','E','B','A','E']; //array indek
$arrBenar = []; //array indek kosong untuk menampung jawaban data array yg benar dari $arrJawaban atau $key 

    foreach ($jawaban as $key => $value) { //looping untuk array
        if ($arrJawaban[$key] == $value) { //mencocokan dua array antara $arrJawaban atau $key dan $jawaban atau $value
            $arrBenar[$key] = 1; //hasil dari pencocokan, jika ada data yg sama atau ada jawaban yg benar maka akan dintambah 1 poin
        } else {
            $arrBenar[$key] = 0;//hasil dari pencocokan, jika tdk ada jawaban yg benar maka tdk akan dintambah 1 poin
        }

    echo "Nama : ". $nama. "<br>";
    echo "Jumlah jawaban benar : <b>". count(array_keys($arrBenar, 1)). "</b><br>";
    echo "Jumlah jawaban benar : <b>". count(array_keys($arrBenar, 0)). "</b><br>";

    }
}
checkJawaban("ervan", 'A','D','C','C','B','A','E','B','A','E'); //data untuk di transfer ke function checkJawaban($nama, ...$arrJawaban)

?>