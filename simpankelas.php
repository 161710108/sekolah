<?php
include ('koneksi.php');

$id=$_POST ['id'];
$kelas = $_POST['kelas'];
$id_jurusan = $_POST['jurusan'];
$wali_kelas = $_POST['wali_kelas'];

$kelas = "INSERT INTO kelas SET kelas= '$kelas', jurusan_id='$id_jurusan', wali_kelas='$wali_kelas'";
mysqli_query($koneksi,$kelas);
header("location:lihatdatakelas.php");
?>