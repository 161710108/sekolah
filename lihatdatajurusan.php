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

    <title>Jurusan</title>

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
<center><h1><font color="violet">Jurusan</font></h1></center>
                  <center>  <a href="tambahjurusan.php?id=$data[id]" class="btn btn-success">Tambah Data</a></center>
                  <br>
                  <center>
 <div class="row">
                <table class="table-bordered">
                      <thead>
                        <tr><th>Nomor</th>
                          <th>Jurusan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi,"select * from jurusan");
        $no= 1;
        foreach ($ma as $data) {
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo '<td width=500>'. $data['jurusan'] . '</td>';
                                echo '<td width=500>';
                                echo '<a class="btn btn-info" href="showjurusan.php?id='.$data['id'].'">Show</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="editjurusan.php?id='.$data['id'].'">Edit</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deletejurusan.php?id='.$data['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                                $no++;
                       }
                      ?>
                      </tbody>
                </table>
                
        </div>
        </center>
                        
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