<!DOCTYPE html>
<html lang="en">
<head>

	<!--JS-->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/my.js"></script>
<script src="js/nouislider.min.js"></script>
<!--CSS-->
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/icon.css">
<link rel="stylesheet" href="css/my.css">
<link rel="stylesheet" href="css/nouislider.min.css">
 

	<title>Login Admin | Sistem Prasarana</title>
</head>
<body class="cyan lighten-4">

<!-- NAVBAR -->

<nav><!--NAV-->
<div class="navbar-fixed z-depth-3">
  <div class="nav-wrapper  blue-grey darken-1">
    <a class="brand-logo" id="tulisan"><img src="img/Analis_Bdg.png" width="60">Sistem Prasarana 13</a>
  </div>
  </div>
</nav>
<!-- NAV END-->

<!--login form -->
<div class="section"></div>
  <main>
    <center>
    <div class="row">
      <div class="col s12"> 
      <img src="img/Analis_Bdg.png" style="width: 160px;">
      <div class="section"></div>
    </div>
      <h5 class="indigo-text" style="font-color: #aa023a !important">Login Form Admin</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row z-depth-2" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="POST" action="login.php?op=in">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              <i class="material-icons prefix">account_circle</i>
                <input class='validate' type='text' name="username"></input>
                <label style="text-align: left" for='email'>Username

                </label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              <i class="material-icons prefix">lock</i>
                <input class='validate' type='password' name="psw"></input>
                <label style="text-align: left" for='password'>Password</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>

                <button type='submit' name='btn_login' class='col s12 btn btn-large  blue-grey darken-2 waves-effect waves-light'>Login</button>

              </div>
            </center>
          </form>
        </div>
      </div>
     
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <!--end login form-->
       <div class="page-footer">
       <footer class="page-footer blue-grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">SMKN 13 Bandung</h5>
                <p class="grey-text text-lighten-4"> Jl. Soekarno Hatta No.Km.10, Jatisari, Buahbatu, Kota Bandung, Jawa Barat 40286.</p>
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
          <div class="footer-copyright blue-grey darken-4">
            <div class="container">
            © 2016 Copyright Team Petrucini
            <a class="grey-text text-lighten-4 right">RPL 1st Generation SMKN 13 Bandung</a>
            </div>
          </div>
        </footer>
  </div>


</body>
</html>