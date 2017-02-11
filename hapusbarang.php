<?php
$nomer = $_GET['nomer'];


// koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");

$hapus = "DELETE FROM barang WHERE no = '$nomer'";

//Menghapus Record Database
$hasil = mysqli_query($konek,$hapus);

if($hasil){
	header("location:index-admin.php#list-barang");
}else{
	echo "gagal";
}

?>