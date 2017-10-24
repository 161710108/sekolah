<?php
include ('koneksi.php');

$nama    =$_POST['jurusan'];

$tambah  ="INSERT INTO jurusan SET jurusan='$nama'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatajurusan.php");
?>