<?php 
 
 $barang = [

    [
    'nama_barang' => 'pasta gigi',
    'harga_barang' => 18000,
    'jumlah_beli' => 1,
    ],
    [
    'nama_barang' => 'sabun mandi',
    'harga_barang' => 5000,
    'jumlah_beli' => 3,
     ],
     [
    'nama_barang' => 'Aloe vera sheet mask',
    'harga_barang' => 15000,
    'jumlah_beli' => 4,
    ],
    ];

    $price = 0; //untuk menjumlahlahkan semua subprice
    
   echo "Daftar belanjaan : <br>";
   echo "<ol>";

//untuk melopping array
   foreach ($barang as $item) {
       $subprice = $item['harga_barang'] * $item['jumlah_beli'];
       echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subprice, 0, ',', '.') . ",-</li>";
       $price += $subprice;
   }

   echo "</ol>";

   echo 'Total harganya yaitu <b>Rp. ' . number_format($price, 0, ',', '.') . "</b>"; //hasil akhir
?>