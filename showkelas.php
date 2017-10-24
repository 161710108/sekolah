<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="BS/favicon.ico">

    <title>Kelas</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="BS/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="BS/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="lihatdatajurusan.php">Jurusan</a></li>
  <li role="presentation"><a href="lihatdatakelas.php">Kelas</a></li>
  <li role="presentation"><a href="lihatdatasiswa.php">Siswa</a></li>
</ul>
<?php
include('koneksi.php');
$id =$_GET['id'];
$b = mysqli_query($koneksi,"SELECT kelas.id, kelas.kelas as nama_kelas, jurusan.jurusan as nmjurusan, kelas.wali_kelas FROM kelas join jurusan on jurusan.id=kelas.jurusan_id WHERE kelas.id='$id'");
$data = mysqli_fetch_array($b);
  ?>
    <center><h3><font face="comic sans ms" color="violet">Show Data Kelas</font></h3></center>
<fieldset style="width; 50%; margin; auto;">
<legend>Show Data Kelas</legend>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Kelas</span>
  <input type="text" name="kelas" class="form-control"  value="<?php echo $data['nama_kelas'];?>"  placeholder="kelas" aria-describedby="sizing-addon1" readonly/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Jurusan</span>
  <input type="text" name="jurusan" class="form-control"  value="<?php echo $data['nmjurusan'];?>"  placeholder="Jurusan" aria-describedby="sizing-addon1" readonly/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Wali_Kelas</span>
  <input type="text" name="wali_kelas" class="form-control"  value="<?php echo $data['wali_kelas'];?>"  placeholder="wali_kelas" aria-describedby="sizing-addon1" readonly/>
</div>
<br>
<br>
    <center><a class="btn btn-primary" href="lihatdatakelas.php">&Lt; Tabel Kelas </a></center>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="BS/dist/js/bootstrap.min.js"></script>
    <script src="BS/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="BS/assets/js/ie10-viewport-bug-workaround.js"></script>
    </fieldset>
</body>
</html>                                               