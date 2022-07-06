<?php

include "koneksi.php";

function addStock($kon, $sql) {
    $hasil=mysqli_query($kon, $sql);
    
    if ($hasil) {
        echo "Data Berhasil Ditambahkan";
        return true;
    }else {
        echo "Data Gagal Ditambahkan";
        return false;
    }

    
}
$nama_barang=$_POST['barang'];
$jumlah_stok=$_POST['stok'];
$tgl=date("Y-m-d H:i:s");

if($jumlah_stok > 10) {
    echo "Gagal";
} else {
    $sql="INSERT INTO tb_barang (barang, jumlah_stok, tanggal_buat) VALUES ('$nama_barang', '$jumlah_stok', '$tgl')";
    
    
    if(addStock($kon, $sql)) {
        header('Location: ./input-stok.php');
    } else {
        echo "Gagal";
        sleep(3);
        header('Location: ./input-stok.php');
    }
}


?>