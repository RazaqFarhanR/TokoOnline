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
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HunterShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tampil_produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_pelanggan.php">Data Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proses_logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>    