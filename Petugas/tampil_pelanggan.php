<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Pelanggan</h1>
                <form method="POST" action="home.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID PELANGGAN</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELP</TH>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_pelanggan = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan = '$cari' or nama like '%$cari%'");
                    }
                    else{
                        $query_pelanggan = mysqli_query($koneksi, "select * from pelanggan");
                    }
                    while($data_pelanggan = mysqli_fetch_array($query_pelanggan)){
                ?>
                    <tr>
                        <td><?=$data_pelanggan['id_pelanggan']?></td>
                        <td><?=$data_pelanggan['nama']?></td>
                        <td><?=$data_pelanggan['alamat']?></td>
                        <td><?=$data_pelanggan['telp']?></td>
                        <td>
                            <a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Edit</a>
                            <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_pelanggan.php" type="button" class="btn btn-primary">Tambah Pelanggan</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>