<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_poin = $_POST['id'];
$poin    = $_POST['poin'];

$ubah = $koneksi->query("UPDATE tab_poin SET poin ='".$poin."' WHERE id_poin='".$id_poin."' ");
if($ubah == true){
    echo "<script>alert('Ubah Data Dengan ID = ".$id_poin." Berhasil') </script>";
echo "<script>window.location.href = \"poin.php\" </script>";
}else{
    echo "Gagal";
}
?>
