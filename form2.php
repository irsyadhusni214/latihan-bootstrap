<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Judul Buku</title>
</head>
<body>
<h1><center>Assalaam Book Store</center></h1>
     <!-- content -->
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Judul Buku</div>
                        <div class="card-body">
                            <div class="form-group">
                            <form action="output.php" method="POST">
                            <?php 
                            if (isset($_POST['proses'])) {
                                $nma = $_POST['nama'];
                                $alama = $_POST['alamat'];
                                $jenis = $_POST['jk'];
                                $tgl = $_POST['tgl'];
                                $jmlh = $_POST['jml'];
                                for ($a = 0; $a < $jmlh; $a++) {
                                    ?>
                            <input type="hidden" name="nma" value="<? $nma ?>">
                            <input type="hidden" name="alama" value="<? $alama ?>">
                            <input type="hidden" name="jenis" value="<? $jenis ?>">
                            <input type="hidden" name="tgl" value="<? $tgl ?>">
                            <input type="hidden" name="jmlh" value="<? $jmlh ?>">
                            
                            <label for="">Judul</label>
                            <input type="text" name="judul[]" class="form-control">                 
                            </div>

                            <div>
                            <label for="">Kode Buku</label>
                            <input type="text" name="kode[]" class="form-control">
                            </div>

                            <div>
                            <label for="">Pengarang</label><br>
                            <input type="text" name="pengarang[]" class="form-control"><br>
                            </div>

                            <div>
                            <label for="">Jenis Buku</label>
                            <select name="jenis[]">
                            <option value = "Fiksi">Fiksi</option>
                            <option value = "Horror">Horror</option>
                            <option value = "Novel">Novel</option>
                            <option value = "Cergam">Cergam</option>
                            <option value = "Komik">Komik</option>
                            </select>
                            </div>

                            <div>
                            <br><label for="">Harga Buku</label>
                            <input type="number" name="harga[]" class="form-control"><br>
                            <hr style="color:red;">
                             <?php 
                        } ?>
                            </div>      
                            <button type="submit" name="simpan" value="Simpan" class="btn btn-outline-success">Proses</button>
                            <input type="reset" value="Reset" class="btn btn-outline-danger">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
} ?>