<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");
//ambil data dari form
$no = $_POST['no'];
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$jml_barang = $_POST['jml_barang'];
$deskripsi = $_POST['deskripsi'];

$update = "UPDATE barang SET kd_barang = '$kd_barang', nama_barang = '$nama_barang', jml_barang ='$jml_barang', deskripsi =  '$deskripsi'
WHERE no = $no";


$hasil = mysqli_query($konek,$update);

//apabila query untuk input data benar
if($hasil)
{
	header("location:index-admin.php#list-barang");
}else{
	header("Update Barang GAGAL");
}
?>