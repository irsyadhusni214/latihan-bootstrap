<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <!-- Header -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">IRSyAD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Latihan 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Latihan 2</a>
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
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- End header -->
    
    <!-- Content -->
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Formulir</div>
                    <div class="card-body">
                      <div class="form-group">
                      <form action="" method="POST">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" rows="5"></textarea>
                      </div>
                    <div class="form-group">
                       <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                        <input class="btn btn-danger" type="reset" value="Reset">
                </div>
            </form>

                        <?php
                        if (isset($_POST['simpan'])) {
                            $a = $_POST['nama'];
                            $b = $_POST['alamat'];
                        }
                        ?>
        </div>
    </div>
</div>
</div>
                <div class="row">
                    <div class="col-md-12" style="background:green">
                   <center>
                        <h2>Hasil Formulir</h2> 
                    </center>
                    <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $b; ?></td>
                        </tr>

                    </table>
                    
                    </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    

    <!-- JS -->
     <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- end js -->
</body>
</html>