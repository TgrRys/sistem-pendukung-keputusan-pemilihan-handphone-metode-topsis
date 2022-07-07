<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_alter   = $_POST['id'];
$alternatif = $_POST['nama'];

$ubah = $koneksi->query("UPDATE tab_alternatif SET nama_alternatif ='".$alternatif."' WHERE id_alternatif ='".$id_alter."' ");
if($ubah == true){
    echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
echo "<script>window.location.href = \"alternatif.php\" </script>";
}else{
    echo "Gagal";
}
?>
