<?php
//koneksi
session_start();
include ("koneksi.php");

//perintah untuk menampilkan hasil edit
$id_poin = $_GET['id_poin'];
$query   = $koneksi->query("SELECT * FROM tab_poin WHERE id_poin = '".$id_poin."'");

while ($row = $query->fetch_array())
  {
    $nama  = $row[1];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK Pemilihan Hp</title>
    <!--Import bootstrapicon.css-->
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />  
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>

    <!--menu-->
    <nav class="navbar navbar-default navbar-custom" style="background-color: #02dfc0;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php" style="color: black;">SPK Pemilihan Hp</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav ">
            <li>
              <a href="kriteria.php" style="color: black;">Kriteria</a>
            </li>
            <li>
              <a href="alternatif.php" style="color: black;">Alternatif</a>
            </li>
            <li>
              <a href="poin.php" style="color: black;">Nilai Alt-Krit</a>
            </li>
            <li>
              <a href="nilmat.php" style="color: black;">Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php" style="color: black;">Hasil Topsis</a>
            </li>
            
          </ul>
          <ul class="right-icon">
									<li><a href="profile_user.php" class="bi bi-person right"></a></li>
								</ul>
        </div>
      </div>
    </nav

    <div class="container">

      <div class="row">
        <!--form poin-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              Edit Nilai
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editp.php" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" name="id" value= <?php echo $_GET['id_poin']; ?> readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="poin" value= <?php echo $nama; ?> >
                    </div>
                    <div class="form-group">
                      <a href="poin.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form poin-->

      </div>
    </div>

 

    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
