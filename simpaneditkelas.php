<?php 
include ('koneksi.php');
$id =$_POST['id'];
$kelas =$_POST['kelas'];
$id_jurusan=$_POST['jurusan'];
$wali_kelas=$_POST['wali_kelas'];
$edit ="UPDATE  kelas SET kelas='$kelas', jurusan_id='$id_jurusan', wali_kelas='$wali_kelas'  WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdatakelas.php");

?>