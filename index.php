<?php

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
 

<!--PHP BY FAJAR RAMDANI A-->

	<title>Sistem Prasarana 13</title>
</head>
      

<body class="grey lighten-2">


<!-- NAVBAR -->
<div class="navbar-fixed">
  <nav class="nav-extended">
    <div class="nav-wrapper blue-grey darken-2">

      <a class="brand-logo" id="tulisan"><img src="img/Analis_Bdg.png" width="60">Sistem Prasarana 13</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">



      <!-- Dropdown Trigger -->
      <a class='dropdown-button waves-effect waves-light' href='#' data-activates='dropdown1'>MENU</a>

      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <li><a class="waves-effect waves-teal" href="admin-login.php">ADMIN LOGIN</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
        <li></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="admin-login.php">Login Admin</a></li>
        <li><a href="about.html">About</a></li>
      </ul>



      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="waves-effect waves-light" href="#form-pinjam">Form Peminjaman</a></li>
        <li class="tab"><a class="waves-effect waves-light" href="#list-barang">List Barang</a></li>
        <li class="tab"><a class="waves-effect waves-light" href="#list-peminjam">List Peminjam</a></li>
      </ul>
    </div>
  </nav>
</div><!--END NAVBAR-->

<br>
<br>
<br>
<br>


<div id="form-pinjam" class="col s12"><!--ISI CONTENT HALAMAN 1-->
  <div class="container"><!--FORMULIR-->
    <div class="row">
      <div class="col s12">
        <div class="card light-blue lighten-5 z-depth-5" id="kartu">
          <div class="card-content black-text">

  <div class="row">
    <h3 align="center">Formulir Peminjaman</h3>
  </div>

  <!--awal formulir-->
  <div class="container">
    <div class="row">
      <form method="POST" action="pinjembarang.php" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">person_pin</i>
            <input id="first_name" type="text" class="validate" name="nama">
            <label for="first_name" data-error="wrong" data-success="">Nama siswa</label>
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input id="first_name" type="text" class="validate" name="kelas">
            <label for="first_name" data-error="wrong" data-success="">Kelas</label>
          </div>


         
<!-- DROPDOWN OPTION PILIH BARANG-->
  <div class="input-field col s12">
    <select name="barang">
      <option disabled selected><b>Nama barang</b></option>
<?php
 $tampilform = "SELECT * FROM barang";
$hasilform = mysqli_query($konek, $tampilform);

while($dataform=mysqli_fetch_array($hasilform)){
                             
echo "<option>$dataform[kd_barang] | $dataform[nama_barang]</option>";
  }

?>
    </select>
      <label>Barang</label>
  </div>
<!--END DROPDOWN OPTION PILIH BARANG-->

<br>
<br>

          <div class="input-field col s12">
            <input id="last_name" type="number" name="jml_barang">
            <label for="last_name">Jumlah Barang</label>
          </div>

        </div>
      </div>

    <div class="row">
      <i class="material-icons prefix">today</i>
      Tanggal Meminjam
      <input type="date" name="tgl_pinjam" class="datepicker"></input>
    </div>


<!--MODAL PERSYARATAN-->
    <div class="row">
      <p>
      <!-- Modal Trigger -->
      <input class="validate" type="checkbox" name="status" value="belum kembali" id="indeterminate-checkbox">
      <label for="indeterminate-checkbox" data-error="wrong" data-success="right"><a href="#modal1">Setuju Persyaratan>>Baca Selengkapnya</a></label>
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h5><b>Syarat & Ketentuan Peminjaman</b></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
      </div>
          </p>
    </div><!--END MODAL PERSYARATAN-->

<br>
        <div class="row">
          <button class="btn waves- blue-grey darken-1" type="submit" name="action" action="#list-peminjam" onclick="Materialize.toast('Selamat, anda sudah bisa meminjam barang!', 500000)">Submit <i class="material-icons right">send</i>
          </button>
          </form>
        </div>

</div>
</div>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div><!--END CONTENT HALAMAN 1-->



<div id="list-barang" class="col s12"><!-- ISI CONTENT HALAMAN 2-->
  <div class="container">



  

<div class="row"><!--TABLE LIST BARANG-->
  <div class="col s12">
    <div class="card white light-blue lighten-5 z-depth-5"> 
    <div class="container">
    <br><br><br>
      <div class="row"><!--SEARCH BAR-->
      <form class="col s12" action="#list-barang">
        <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name="sb">
            <label for="icon_prefix">Cari Barang</label>
          </div>
            <div class="input-field col s2">
              <input class="waves-effect waves-light btn" type="submit" name="caribarang">
            </div>
        </div>
      </form>
    </div><!--END SEARCH BAR-->
    </div>
    <!-- Judul -->
  <h3 class="card-content black-text" align="center">List Barang</h3>
  <!-- end judul-->

  <div class="container">
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Deskripsi</th>
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

if($jmlhasilbarang <1){
  echo "<thead>";
  echo "<th>Barang yang anda cari tidak ada</td>";
  echo "</td>";

}
//END SEARCHING
while($databarang = mysqli_fetch_array($hasilbarang)){
  echo "<thead>";
  echo "<th>$databarang[kd_barang]</th>";
  echo "<th>$databarang[nama_barang]</th>";
  echo "<th>$databarang[jml_barang]</th>";
  echo "<th>$databarang[deskripsi]</th>";
  echo "</thead>";
}

?>
  </table>
  </div>
  </div>
</div>
          </div>
         </div><!--END TABLE LIST BARANG-->
       </div>    
      </div>
</div>
</div>
</div>

  </div><!--END ISI CONTENT HALAMAN 2-->



<div id="list-peminjam" class="col s12"><!--ISI CONTENT HALAMAN 3-->
  <div class="container">
    



  <div class="row">
    <div class="col s12">
      <div class="card white light-blue light-blue lighten-5 z-depth-5">
    <div class="container"><!--LIST PEMINJAM-->
      <div class="row">
        <div class="col s12">
        <br><br><br>
        <div class="row"><!--SEARCH BAR-->
      <form class="col s12" action="#list-peminjam">
        <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name="sp">
            <label for="icon_prefix">Cari Peminjam</label>
          </div>
      <div class="input-field col s2">
        <input class="waves-effect waves-light btn" type="submit" name="caripeminjam">
      </div>
        </div>
      </form>
    </div><!--END SEARCH BAR-->

        <div class="row"><!--JUDUL-->
  <h3 align="center">Daftar Peminjam Barang</h3>
</div><!--END JUDUL-->
          <table>
            <thead>
              <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Tgl Pinjam</th>
                <th>Ket</th>
              </tr>
            </thead>

<?php

if(isset($_GET['caripeminjam'])){
  $q = $_GET['sp'];
  $tampilpeminjam = "SELECT * FROM meminjam WHERE nama LIKE '%$q%' OR kelas LIKE '%$q%' ORDER BY tgl_pinjam";
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

while($data = mysqli_fetch_array($hasilpeminjam)){
  echo "<thead>";
  echo "<th>$data[nama]</th>";
  echo "<th>$data[kelas]</th>";
  echo "<th>$data[kd_barang]</th>";
  echo "<th>$data[jumlah_dipinjam]</th>";
  echo "<th>$data[tgl_pinjam]</th>";
  echo "<th>$data[keterangan]</th>";
  echo "</thead>";
}

?>
    </table>
    </div>
    </div>
    </div><!--END LIST PEMINJAM-->
</div>
</div>
</div>
</div>
</div>
<!--END ISI CONTENT HALAMAN 3-->





<!--FOOTER-->
      <footer class="page-footer blue-grey darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">SMKN 13 Bandung</h5>
                <p class="grey-text text-lighten-4">Jl. Soekarno Hatta No. Km 10, Jatisari, Buahbatu, Kota Bandung, Jawa Barat 40286</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Telp/Fax : (022) 7318960 - Ext. 114</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">E-Mail : sekretariat@smkn-13bdg.sch.id</a></li>
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