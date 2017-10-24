<?php
include ('koneksi.php');
$nis  = $_POST['nis'];
$nama = $_POST['nama'];
$jk   = $_POST['jk'];
$tm   = $_POST['tempat_lahir'];
$tgl  = $_POST['tanggal_lahir'];
$al   = $_POST['alamat'];
$kls  = $_POST['kelas'];

$tambah="INSERT INTO siswa SET nis='$nis', nama='$nama', jk='$jk', tempat_lahir='$tm',tanggal_lahir='$tgl', alamat='$al', kelas_id='$kls'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatasiswa.php");
?>
