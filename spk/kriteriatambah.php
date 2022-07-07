<?php
//koneksi
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = $koneksi->query("SELECT id_kriteria FROM tab_kriteria");
$datakode = $carikode->fetch_array();
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  // $nilaikode = substr($jumlah_data[0], 1);
  // $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = str_pad($kode, 0, STR_PAD_LEFT);
} else {
  $kode_otomatis = "1";
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
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="background-color:  #02dfc0;">
                    Kriteria
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a href="kriteria.php" data-toggle="tab">Tabel Kriteria</a>
                    </li>
                    <li class="active">
                      <a href="kriteriatambah.php" data-toggle="tab">Tambah Kriteria</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!--form kriteria-->
                      <form class="form" action="kriteriatambah.php" method="post">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_krit" value="<?php echo $kode_otomatis; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="nm_krit" placeholder="Nama Kriteria">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="bobot" placeholder="Bobot">
                        </div>
                        <div class="form-group">
                          <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                        </div>
                      </form>
                      <!--form kriteria-->
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    
    <?php

    if (isset($_POST['simpan'])) {
      $id_krit  = $_POST['id_krit'];
      $kriteria = $_POST['nm_krit'];
      $bobot    = $_POST['bobot'];

      $sql    = "SELECT * FROM tab_kriteria";
      $tambah = $koneksi->query($sql);

      if ($row = $tambah->fetch_row()) {

        $masuk = "INSERT INTO tab_kriteria VALUES ('".$id_krit."','".$kriteria."','".$bobot."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Sukses') </script>";
        echo "<script>window.location.href = \"kriteria.php\" </script>";
      }
    }

     ?>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
