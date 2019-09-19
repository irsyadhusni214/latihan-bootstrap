<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Assalaam Book Store</title>
</head>
<body>
    <h1><center>Assalaam Book Store</center></h1>

    <!-- content -->
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pembelian Buku</div>
                        <div class="card-body">
                            <div class="form-group">
                            <form action="form2.php" method="POST">
                            <label for="">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control">                 
                            </div>

                            <div>
                            <label for="">Alamat</label>
                            <textarea name="alamat" row="5" class="form-control"></textarea>
                            </div>

                            <div>
                            <label for="">Jenis Kelamin</label><br>
                            <input type='radio' name='jk' value='Laki-Laki'/>Laki-Laki
                            <input type='radio' name='jk' value='perempuan' />Perempuan</p>
                            </div>

                            <div>
                            <label for="">Tanggal Pembelian</label>
                            <input type="date" name="tgl" class="form-control"><br>
                            </div>

                            <div>
                            <label for="">Jumlah Buku</label>
                            <input type="number" name="jml" class="form-control"><br>
                            </div>
                            <input type="submit" name="proses" value="Simpan" class="btn btn-outline-success">
                            <input type="reset" value="Reset" class="btn btn-outline-danger">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>