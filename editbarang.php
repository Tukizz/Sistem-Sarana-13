<?php

$kd_barang = @$_GET['kd_barang'];

// koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");

?>


<!DOCTYPE html>
<html lang="en">
<head>

<!--JS-->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/my.js"></script>

<!--CSS-->
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/icon.css">
<link rel="stylesheet" href="css/my.css">
 

	<title>Nyoba Materialize</title>
</head>
<body class="cyan lighten-4">

<!-- NAVBAR <-->
  <div class="navbar-fixed">
<nav class="nav-extended">
    <div class="nav-wrapper blue-grey darken-2 navbar-fixed">
      <a href="#" class="brand-logo"><img src="img/Analis_Bdg.png" width="60"></a>
      <a class="brand-text" id="tulisan">Sistem Prasarana 13</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">



      <!-- Dropdown Trigger -->
  <a class='dropdown-button waves-effect waves-light' href="login.php?op=out">LOGOUT</a>
        <li></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="admin-login.php">Login Admin</a></li>
        <li><a href="badges.html">About</a></li>
      </ul>
    </div>
</nav>
</div>

<br>
<br>

<div id="form-pinjam" class="col s12"><!--ISI CONTENT HALAMAN 1-->

<br>
<br>
<!--ISI CONTENT-->
  <div class="container"><!--FORMULIR-->
    <div class="card light-blue lighten-5 z-depth-5" id="kartu">
      <div class="card-content black-text">
        <div class="container">
          <div class="row">
           <h3 align="center">Edit Data Barang</h3>
          </div>

          <?php
$no = $_GET['nomer'];

// koneksi ke database
$hapus = "SELECT * FROM barang WHERE no = '$no'";

$hasil = mysqli_query($konek,$hapus);

$data = mysqli_fetch_array($hasil);
          ?>
          <div class="row">
            <form class="col s12" method="POST" action="prosesupbarang.php" enctype="multipart/form-data">
        <div class="row">
        <input type="hidden" name="no" value="<?php echo $data['no']; ?>"><br>
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment</i>
            <input id="last_name" type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>">
            <label for="last_name">Kode Barang</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
            <label for="last_name">Nama Barang</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="text" name="jml_barang" value="<?php echo $data['jml_barang']; ?>">
            <label for="last_name">Jumlah Barang</label>
          </div>
        </div>
          </div>


  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="textarea1" type="text" name="deskripsi" class="materialize-textarea"><?php echo $data['deskripsi']; ?></textarea>
      <label for="textarea1">Deskripsi</label>
    </div>
  </div>


  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" value="Kirim">Submit
    <i class="material-icons right">send</i>
    </button>
  </div>
          </form>
</div>
</div>
</div>
</div>
</div><!--END CONTENT HALAMAN 1-->
  
<!--FOOTER-->
<footer class="page-footer blue-grey darken-2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
          <h5 class="white-text">SMKN 13 Bandung</h5>
          <p class="grey-text text-lighten-4">Jl Soekarno-Hatta KM 10</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Contact</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright blue-grey darken-3">
    <div class="container">
      © 2016 Copyright RPL SMKN 13 Bandung
      <a class="grey-text text-lighten-4 right" href="#!">1st Generation</a>
    </div>
  </div>
</footer>
<!--END FOOTER-->
</body>
</html>