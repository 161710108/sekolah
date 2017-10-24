<!DOCTYPE html>
<html>
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
<center><h1><font color="violet">Kelas</font></h1></center>
<div class="row">
                <center>  <a href="tambahkelas.php?id=$data[id]" class="btn btn-success">Tambah Data</a></center>
                  <br>
                <center>
                <div class="row">
 <table class="table-bordered">
                      <thead>
                        <tr><th>Nomor</th>
                          <th>kelas</th>
                           <th>Jurusan</th>
                            <th>Wali_Kelas</th>
                          <th>Action</th>
                        </tr>
                         </thead>
                      <tbody>
<?php
include('koneksi.php');
  $ma = mysqli_query ($koneksi,"SELECT kelas.id, kelas.kelas as nama_kelas, jurusan.jurusan as nama_jurusan, kelas.wali_kelas from kelas join jurusan on jurusan.id=kelas.jurusan_id ");
  $no = 1; 
  foreach ($ma as $data) {
     echo '<tr>';
                                echo '<td>'. $no. '</td>';
                                echo '<td width=200>'. $data['nama_kelas'] . '</td>';
                                echo '<td width=200>'. $data['nama_jurusan'] . '</td>';
                                echo '<td width=200>'. $data['wali_kelas'] . '</td>';
                                echo '<td width=400>';
                                echo '<a class="btn btn-info" href="showkelas.php?id='.$data['id'].'">show</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="editkelas.php?id='.$data['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deletekelas.php?id='.$data['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                                $no++;
                       }
                      ?>
</table>
</center>
<br>
</body>
</html>  </tbody>
                </table>
                
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