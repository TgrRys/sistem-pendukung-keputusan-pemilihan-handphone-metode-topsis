<?php
//koneksi
include "koneksi.php";
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
  header("location: home.php");
}
$pesan = NULL;
if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
        $pesan = '<div class="alert alert-danger" role="alert">Login Gagal! Username atau Password Salah!</div>';
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="tampilan/css/styles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SPK Pemilihan Hp</title>
</head>

<body>
    <div class="login">
        <h3 style="text-align: center;">Sistem Pendukung Keputusan Pemilihan Hp</h3>
        <div class="login__content">
            <div class="login__img">
                <img src="https://image.freepik.com/free-vector/login-concept-illustration_114360-739.jpg" alt="">
            </div>

            <div class="login__forms">
                <form action="home.php" class="login__registre" id="login-in">
                    <h1 class="login__title">Sign In</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input" required>
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input" required>
                    </div>

                    <a href="home.php" class="login__forgot">Forgot password?</a>

                    <!-- <a href="index.php" class="login__button">Sign In</a> -->
                    <div class="d-grid gap-2">
                        <input type="submit" class="login__button" name="login" value="Sign In" />
                    </div>


                </form>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="tampilan/js/main.js"></script>
</body>

</html>