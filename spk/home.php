<?php
//koneksi
session_start();
include "koneksi.php";

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK Pemilihan Hp</title>

    <!-- ===== CSS ===== -->
<link rel="stylesheet" href="tampilan/css/styles.css">
 <!--Import bootstrapicon.css-->
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />  
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

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

    <!-- Info Start -->
		<div style="background-color: white">
			<div class="container" style="margin-top: -20px;">
        <div class="col-md-12">
        <img src="tampilan/image/jumbotron.jpg" width="1300px" height="1200px" alt="">
				<!-- <div class="section-card" style="padding: 36px 0px"> -->
        <div class="row">
		    		<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO SISTEM</h5></center><br>
			    		<p style="text-align: justify; padding-right: 16px;">Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun berbasis web menggunakan PHP + Bootstrap. Sistem ini dibuat sebagai Tugas Ulangan Akhir Semester Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Politeknik Harapan Bersama. </p>
						</div>
			    	<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO METODE</h5></center><br>
							<p style="text-align: justify; padding-left: 16px;">Metode yang digunakan adalah metode TOPSIS. Metode TOPSIS adalah salah satu metode penyelesaian pada sistem pendukung keputusan. Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribuat atau kriteria, dimana setiap atribut saling tidak bergantung satu dengan yang lainnya.
							</p>
							</div>
					
					</div>
				</div>
			</div>
		</div>
		<!-- Info End -->

    
    <!--footer-->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>Copyright &copy; Sistem Pendukung Keputusan Pemilihan Hp 2022.</em>
            </div>
          </div>
        </div>
      </div>
    </footer>
	</div>
    

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
