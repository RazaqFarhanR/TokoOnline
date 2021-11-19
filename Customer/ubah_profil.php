<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_detail_profil = mysqli_query($koneksi, "SELECT * FROM pelanggan where id_pelanggan = '".$_SESSION['id_pelanggan']."'");
        $data_pelanggan = mysqli_fetch_array($query_detail_profil);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Profil</h1>
            <div class="card-body">
                <form method="POST" action="proses_Ubah_profil.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="<?=$data_pelanggan['nama']?>" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" row="3" placeholder="Masukkan Alamat" required><?=$data_pelanggan['alamat']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp</label>
                        <input type="number" class="form-control" name="telp" value="<?=$data_pelanggan['telp']?>" placeholder="Masukkan nomor telpon" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>