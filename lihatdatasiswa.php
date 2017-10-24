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

    <title>SISWA</title>

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
<center><h1><font color="violet">DATA SISWA</font></h1></center>
       <p>
                  <center><a href="tambahsiswa.php?id=$data[id]" class="btn btn-success">Tambah Data</a></center>
                </p>
 <center><div class="row">
             <center>   <table class="table table-bordered">
                      <thead>
    <center><th>No</th></center>
    <th>Nis</th>
    <th>Nama</th>
    <th>Jk</th>
    <th>Tempat_lahir</th>
    <th>Tanggal_lahir</th>
    <th>Alamat</th>
    <th>Kelas</th>
    <th>jurusan_id</th>
    <th>Action</th>
   
                      </thead>
                      <tbody>

  <?php
  include('koneksi.php');
  $m = mysqli_query($koneksi,"SELECT siswa.id, siswa.nis, siswa.nama, siswa.jk, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.alamat, kelas.jurusan_id,kelas.kelas as nama_kelas FROM siswa JOIN kelas on kelas.id=siswa.kelas_id");
  $no= 1;
        foreach ($m as $data) {
                                echo '<tr>';
                                echo '<td width=50>'. $no. '</td>';
                                echo '<td width=100>'. $data['nis'] . '</td>';
                                echo '<td width=100>'. $data['nama'] . '</td>';
                                echo '<td width=100>'. $data['jk'] . '</td>';
                                echo '<td width=100>'. $data['tempat_lahir'] . '</td>';
                                echo '<td width=100>'. $data['tanggal_lahir'] . '</td>';
                                echo '<td width=100>'. $data['alamat'] . '</td>';
                                echo '<td width=50>'. $data['nama_kelas'] . '</td>';
                                echo '<td width=50>'. $data['jurusan_id'] . '</td>';
                                echo '<td width=200>';
                                echo '<a class="btn btn-info" href="showsiswa.php?id='.$data['id'].'">show</a>';
                                echo ' ';
                                 echo '<a class="btn btn-success" href="editsiswa.php?id='.$data['id'].'">edit</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" onclick="return confirm('hapus data yang telah di input?') href="deletesiswa.php?id='.$data['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                                $no++;
                       }
                      ?>
 </tbody>
                </table>
                </center>
        </div>              
            </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="BS/dist/js/bootstrap.min.js"></script>
    <script src="BS/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="BS/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>                                               