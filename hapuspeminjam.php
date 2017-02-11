<?php

$no = $_GET['nomer'];

echo $nomor;

// koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");

$hapus = "DELETE FROM meminjam WHERE no = '$no'";

//Mencari FOTO
$hasilfoto = mysqli_query($konek, $carifoto);

//Menghapus Record Database
$hasil = mysqli_query($konek,$hapus);


if($hasil){
	header("location:index-admin.php#list-peminjam");
}else{
	echo "gagal";
}

?>