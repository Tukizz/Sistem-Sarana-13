<?php

$konek = mysqli_connect("localhost", "root", "", "sistemprasarana");

session_start();

//cek apakah user sudahh login
if (!isset($_SESSION['username'])) {
  header ("location:index.php");

}
//cek level admin
if ($_SESSION['level']!="admin") {
  die("Anda bukan admin");
}


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

<!--PHP BY FAJAR RAMDANI A-->
 
<title>Admin | Sistem Prasarana 13</title>

</head>
<body class="cyan lighten-4">

<!-- NAVBAR <-->
  <div class="navbar-fixed">
<nav class="nav-extended">
    <div class="nav-wrapper blue-grey darken-2 navbar-fixed">
       <a class="brand-logo" id="tulisan"><img src="img/Analis_Bdg.png" width="60">Sistem Prasarana 13</a>
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



      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active waves-effect waves-light" href="#form-pinjam">Input Data Barang</a></li>
        <li class="tab"><a class="waves-effect waves-light" href="#list-barang">List Barang</a></li>
        <li class="tab"><a class="waves-effect waves-light" href="#list-peminjam">List Peminjam</a></li>
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
           <h3 align="center">Input Data Barang</h3>
          </div>
          <div class="row">
            <form class="col s12" method="POST" action="inputbarang.php" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment</i>
            <input id="last_name" type="text" name="kd_barang">
            <label for="last_name">Kode Barang</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" name="nama_barang">
            <label for="last_name">Nama Barang</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="text" name="jml_barang">
            <label for="last_name">Jumlah Barang</label>
          </div>
        </div>
          </div>


  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="textarea1" name="deskripsi" class="materialize-textarea"></textarea>
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

<br>
<br>

<div id="list-barang" class="col s12"><!-- ISI CONTENT HALAMAN 2-->
  <!--JUDUL-->
  <div class="container">
    <div class="row"><!--SEARCH BAR-->
      <form class="col s12" action="#list-barang">
        <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name="sb">
            <label for="icon_prefix">Cari Barang</label>
          </div>
        <div class="input-field col s2">
          <input class="waves-effect waves-light btn blue" type="submit" name="caribarang">
        </div>
        </div>
      </form>
    </div>
  <div class="card-content black-text">
    <h3 align="center">List Barang</h3>
  </div>
  <div class="row">
    <div class="col s12">
      <div class="card white light-blue light-blue lighten-5 z-depth-5"> 

        <div class="container">
          <div class="row">
             <table>
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Deksripsi</th>
                    <th>Action</th>
                  </tr>
                </thead>

<?php

if(isset($_GET['caribarang'])){
  $q = $_GET['sb'];
  $tampilbarang = "SELECT * FROM barang WHERE nama_barang LIKE '%$q%' OR kd_barang LIKE'%$q%' ORDER BY nama_barang";
}else{
  $tampilbarang = "SELECT * FROM barang ORDER BY nama_barang";
}

$hasilbarang = mysqli_query($konek, $tampilbarang);
$jmlhasilbarang = mysqli_num_rows($hasilbarang);


while($databarang = mysqli_fetch_array($hasilbarang)){
  echo "<thead>";
  echo "<th>$databarang[kd_barang]</th>";
  echo "<th>$databarang[nama_barang]</th>";
  echo "<th>$databarang[jml_barang]</th>";
  echo "<th>$databarang[deskripsi]</th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn red' href='hapusbarang.php?nomer=$databarang[no]'><i class='material-icons prefix'>delete</i></a></th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn green' href='editbarang.php?nomer=$databarang[no]'><i class='material-icons prefix'>settings</i></a></th>";
  echo "</thead>";
}

?>
              </table>
        </div>
      </div>
    </div>
  </div>
</div>



  </div>
  </div><!--END ISI CONTENT HALAMAN 2-->




<div id="list-peminjam" class="col s12"><!--ISI CONTENT HALAMAN 3-->
  <div class="container">
    <div class="row"><!--SEARCH BAR-->
      <form class="col s12" action="#list-peminjam">
        <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name="sp">
            <label for="icon_prefix">Cari Peminjam</label>
          </div>
        <div class="input-field col s2">
          <input class="waves-effect waves-light btn blue" type="submit" name="caripeminjam">
        </div>
        </div>
      </form>
    </div>

  <div class="row">
    <h3 align="center">Daftar Peminjam Barang</h3>
  </div>

  <div class="row">
    <div class="col s12">
      <div class="card white light-blue light-blue lighten-5 z-depth-5">
    
  <div class="container">
    <div class="row">
      <div class="col s12">
    <table>
      <thead>
        <tr>
          <th data-field="id">Nama</th>
          <th data-field="kelas">Kelas</th>
          <th data-field="name">Barang</th>
          <th>Tgl Pinjam</th>
          <th data-field="price">Ket</th>
          <th data-field="aksi">Action</a></th>
        </tr>
      </thead>

<?php

if(isset($_GET['caripeminjam'])){
  $q = $_GET['sp'];
  $tampilpeminjam = "SELECT * FROM meminjam WHERE nama LIKE '%$q%' OR kelas LIKE'%$q%' ORDER BY tgl_pinjam";
}else{
  $tampilpeminjam = "SELECT * FROM meminjam ORDER BY tgl_pinjam";
}

$hasilpeminjam = mysqli_query($konek, $tampilpeminjam);
$jmlhasilpeminjam = mysqli_num_rows($hasilpeminjam);

if($jmlhasilpeminjam <1){
  echo "<thead>";
  echo "<th>Peminjam yang anda cari tidak ada</td>";
  echo "</td>";
}

while($data=mysqli_fetch_array($hasilpeminjam)){
  echo "<thead>";
  echo "<th>$data[nama]</th>";
  echo "<th>$data[kelas]</th>";
  echo "<th>$data[kd_barang]</th>";
  echo "<th>$data[tgl_pinjam]</th>";
  echo "<th>$data[keterangan]</th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn red' href='hapuspeminjam.php?nomer=$data[no]'><i class='material-icons prefix'>delete</i></a></th>";
  echo "</thead>";
}

?>
      </table>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
  </div><!--END ISI CONTENT HALAMAN 3-->



  
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
          <li><a class="grey-text text-lighten-3" href="#!">Telp/Fax : (022) 7318960 - Ext. 114</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">LE-Mail : sekretariat@smkn-13bdg.sch.id</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright blue-grey darken-3">
    <div class="container">
      © 2016 Copyright Team Petrucini
      <a class="grey-text text-lighten-4 right" href="#!">RPL 1st Generation SMKN 13 Bandung</a>
    </div>
  </div>
</footer>
<!--END FOOTER-->
</body>
</html>