<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Profil</h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-8">
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td><?=$data_pelanggan['nama']?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?=$data_pelanggan['alamat']?></td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td><?=$data_pelanggan['telp']?></td>
                        </tr>
                        <tr>
                            <td><a href="ubah_profil.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"class="btn btn-success">Edit</a></td>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>