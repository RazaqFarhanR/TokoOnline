<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HunterShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keranjang.php">Keranjang</a>
        </li>
      </ul>
        <div class="col-lg-6 col-md-8 mx-auto">
            <form method="POST" action="home.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="Cari Barang Disini" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
      <li class="navbar-nav mb-2 mb-lg-0 nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            <?php echo $_SESSION['nama'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profil.php">Profil</a></li>
            <li><a class="dropdown-item" href="transaksi.php">Transaksi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="proses_logout.php">Logout</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
</body>
</html>    