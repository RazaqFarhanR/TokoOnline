<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center">Tambah Petugas<h3>
            <form action = "proses_register.php" method="post">
                Nama :
                <input type="text" name="nama_petugas" value="" class="form-control">
                Username :
                <input type="text" name="username" value="" class="form-control">
                Password :
                <input type="password" name="password" value="" class="form-control">
                Level :
                <input type="text" name="level" value="" class="form-control">
                <input type="submit" name="simpan" value="Daftar" class="btn btn-primary">
            <form>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>