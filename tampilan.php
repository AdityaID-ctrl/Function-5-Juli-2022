<?php
include "koneksi.php";

    $qBarang="SELECT * FROM tb_barang";
    
    $data=mysqli_query($kon, $qBarang);
    
    foreach($data->fetch_all() as $row) {
        echo $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
    }
?>

<button onclick="location.href='input-stok.php'">Input barang</button>