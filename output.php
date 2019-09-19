<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Pembayaran</title>
</head>
<body>
     <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail</div>
                        <div class="card-body">
                            <div class="form-group">
                            <form action="" method="POST">
                            <?php 
                            if (isset($_POST['simpan'])) {
                                $nma = $_POST['nama'];
                                $alama = $_POST['alamat'];
                                $jenis = $_POST['jk'];
                                $tgl = $_POST['tgl'];
                                $jmlh = $_POST['jml'];
                                ?>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah Buku</th>
                                    <th>Tanggal Pembelian</th>
                                </tr>

                                <tr>
                                    <td><?php echo $nma; ?></td>
                                    <td><?php echo $alama; ?></td>
                                    <td><?php echo $jenis; ?></td>
                                    <td><?php echo $jmlh; ?></td>
                                    <td><?php echo $tgl; ?></td>
                                </tr>

                                </table>
                                <center><strong>Daftar Buku Yang Dibeli</strong></center>
                            </div>
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