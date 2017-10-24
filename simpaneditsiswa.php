<?php
include ('koneksi.php');

$id   = $_POST['id'];
$nis  = $_POST['nis'];
$nama = $_POST['nama'];
$jk   = $_POST['jk'];
$tm   = $_POST['tempat_lahir'];
$tgl  = $_POST['tanggal_lahir'];
$al   = $_POST['alamat'];
$kls  = $_POST['kelas_id'];

$edit ="UPDATE siswa SET nis='$nis', nama='$nama', jk='$jk', tempat_lahir='$tm', tanggal_lahir='$tgl', alamat='$al', kelas_id='$kls' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdatasiswa.php");
?>