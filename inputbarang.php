<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");

//ambil data dari form
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$jml_barang = $_POST['jml_barang'];
$deskripsi = $_POST['deskripsi'];

$input = "INSERT INTO barang(kd_barang,nama_barang,jml_barang,deskripsi) VALUES ('$kd_barang','$nama_barang','$jml_barang','$deskripsi')"; 

$hasil = mysqli_query($konek,$input);

if($hasil)
{
	header("location:index-admin.php");
}else{
	
	echo $kd_barang;
	echo $nama_barang;
	echo $jml_barang;
	echo $deskripsi;
	echo "GAGAL INPUT";
	
}
?>
