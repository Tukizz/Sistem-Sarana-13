<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "sistemprasarana");
$userid=$_POST['username'];
$psw = $_POST['psw'];
$op = $_GET['op'];



if ($op=="in") {
 
$tampil = "SELECT * FROM tabeluser WHERE username ='$userid' AND password = '$psw'";

$cek= mysqli_query($koneksi,$tampil);

if (mysqli_num_rows($cek)==1) {
	//jika berhasil isi data di cek

	$c = mysqli_fetch_array($cek);
	$_SESSION['username'] = $c['username'];
	$_SESSION['level'] = $c['level'];

	if ($c['level']=="admin") {
		header("location:index-admin.php");
	}
	
}else{
	header("location:faillogin.php");
}


}else if($op=="out"){

	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:index.php");


}





 ?>
