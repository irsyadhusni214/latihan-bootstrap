<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "<h1><center>Selamat Datang " . $_SESSION['login'] . "</h1></center>";
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>PPBD</title>
</head>
<body>
<!-- heading -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Pendaftaran</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <?php echo $_SESSION['login'] ?>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>
    </form>
  </div>
</nav>
<!-- End Heading -->

<!-- Content -->
<div class="container">
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Formulir Pendaftaran</div>
                    <div class="card-body">
                    <div class="form-group">
                        <form action="" method="POST">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" row="5">
                    </div>

                    <div>
                        <label for="">Jenis Kelamin</label><br>
                       <input type='radio' name='jk' value='Laki-Laki'/>Laki-Laki
                       <p><input type='radio' name='jk' value='perempuan' />Perempuan</p>
                    </div>

                    <div>
                        <label for="">Asal Sekolah</label>
                        <input type="text" name="asal" class="form-control">
                    </div>

                    <div>
                        <label for="">Nilai Bahasa Indonesia</label>
                        <input type="number" name="indo" class="form-control">
                    </div>

                    <div>
                        <label for="">Nilai Matematika</label>
                        <input type="number" name="mtk" class="form-control">
                    </div>

                    <div>
                        <label for="">Nilai IPA</label>
                        <input type="number" name="ipa" class="form-control">
                    </div>

                    <div>
                        <label for="">Nilai Bahasa Inggris</label>
                        <input type="number" name="inggris" class="form-control"><br>
                    </div>
                    <button type="submit" name="smpn" value="Simpan" class="btn btn-success">Simpan</button>
                    <input type="reset" value="Reset" class="btn btn-danger">
                    <?php
                    echo "Bila Anda Ingin Logout Klik <a href='logout.php'>Disini</a> Untuk Logout";
                    ?>
                    </form>
                    <?php
                    if (isset($_POST['smpn'])) {
                        $a = $_POST['nama'];
                        $b = $_POST['alamat'];
                        $c = $_POST['jk'];
                        $d = $_POST['asal'];
                        $e = $_POST['indo'];
                        $f = $_POST['mtk'];
                        $g = $_POST['ipa'];
                        $h = $_POST['inggris'];

                        $hasil = ($e + $f + $g + $h) / 4;
                    }

                    ?>
                </div>
            </div>
        </div>
         <div class="row">
                    <div class="col-md-12" style="background:green">
                   <center>
                        <h2>Hasil Pendaftaran</h2> 
                    </center>
                    <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Bahasa Indonesia</th>
                            <th>Nilai Matematika</th>
                            <th>Nilai IPA</th>
                            <th>Nilai Bahasa Inggris</th>
                            <th>Rata Rata</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $b; ?></td>
                            <td><?php echo $c; ?></td>
                            <td><?php echo $d; ?></td>
                            <td><?php echo $e; ?></td>
                            <td><?php echo $f; ?></td>
                            <td><?php echo $g; ?></td>
                            <td><?php echo $h; ?></td>
                            <td><?php echo $hasil; ?></td>
                            <td><?php if ($hasil >= 65) {
                                    echo "Anda Di terima";
                                } else {
                                    echo "Anda Tidak Di terima";
                                } ?></td>
                        </tr>

                    </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php 
} else {
    die("Anda Belum Login, Silahkan Login Terlebih Dahulu <a href='log.php'>Disini</a> Untuk Login");
} ?>