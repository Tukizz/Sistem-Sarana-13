<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");
//ambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jml_barang = $_POST['jml_barang'];
$barang = $_POST['barang'];
$status = $_POST['status'];
$tgl_pinjam = $_POST['tgl_pinjam'];

$inputmeminjam = "INSERT INTO meminjam(kd_barang,nama,kelas,jumlah_dipinjam,tgl_pinjam,keterangan) VALUES ('$barang','$nama','$kelas','$jml_barang','$tgl_pinjam','$status')";

$hasil = mysqli_query($konek,$inputmeminjam);

if($hasil)
{
	header("location:index.php#list-peminjam");
}else{
	echo $nama;
	echo $kelas;
	echo $jml_barang;
	echo $barang;
	echo $status;
	echo "GAGAL INPUT";
	
}
?>
