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

    <title>Siswa</title>

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
<form action="simpansiswa.php" method="post">
 <?php
include ('koneksi.php');
    $id   =$_GET['id'];
    $siswa  =mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
    $data =mysqli_fetch_array($siswa);
?>
<center><h3><font face="comic sans ms" color="violet">Tambah Data Siswa</font></h3></center>
<fieldset style="width; 50%; margin; auto;">
<legend>Tambah Data Siswa</legend>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nis</span>
  <input nis=number  type="number" name="nis" class="form-control" placeholder="nis" aria-describedby="sizing-addon1" onkeypress="return hanyaangka" required/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nama</span>
  <input type="text" name="nama" class="form-control" placeholder="nama" aria-describedby="sizing-addon1" required/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Jenis Kelamin</span>
  <input type="radio" name="jk" value="perempuan" aria-describedby="sizing-addon1" required/>Perempuan
  <input type="radio" name="jk" value="laki-laki" aria-describedby="sizing-addon1" required/>Laki-laki
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Tampat_lahir</span>
  <input type="text" name="tempat_lahir" class="form-control" placeholder="tempat_lahir" aria-describedby="sizing-addon1" required/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Tanggal_lahir</span>
  <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal_lahir" aria-describedby="sizing-addon1" required/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Alamat</span>
  <input type="text" name="alamat" class="form-control" placeholder="alamat" aria-describedby="sizing-addon1" required/>
</div>
<br>
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" name="kelas" placeholder="kelas" aria-describedby="sizing-addon1" required/>kelas</span>
 
  <select class="form-control"
  <?php
        include('koneksi.php');
        $kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
        ?>
        <select name="kelas">
          <?php
            foreach ($kelas as $dt) {
          ?>
          <option value="<?php echo $dt['id'];?>"><?php echo $dt['kelas']?></option>
          <?php
            }
          ?>
        </select>
</div>
<br>
<br>
<center><button type="submit" class="btn btn-info" value="Simpan" />Simpan</button>||
  <button type="reset"  class="btn btn-danger" value="reset" onclick="return confirm ('Hapus Data Yang Telah Diinput?')">Reset</button></center>  
      
    </form>
    <br>
    <center><a class="btn btn-primary" href="lihatdatasiswa.php">&Lt; Tabel Siswa </a></center>

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