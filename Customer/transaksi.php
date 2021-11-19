<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>History Transaksi</h1>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">TANGGAL TRANSAKSI</th>
                    <th scope="col">SUB TOTAL</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $query_transaksi = mysqli_query($koneksi, "SELECT * FROM transaksi 
                    where id_pelanggan = '".$_SESSION['id_pelanggan']."' ORDER BY id_transaksi DESC");
                    $no=0;
                    while($data_transaksi=mysqli_fetch_array($query_transaksi)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_transaksi['tgl_transaksi']?></td>
                        <td>
                            <ol>
                            <?php
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_transaksi['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['nama_produk']."</li>";
                            }
                            ?>
                            </ol>
                        </td>
                        <td>
                            <ol>
                            <?php
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_transaksi['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['harga']."</li>";
                            }
                            ?>
                            </ol>
                        </td>
                        <?php
                        $query_cek_terima = mysqli_query($koneksi, "SELECT * FROM transaksi
                        WHERE id_transaksi = '".$data_transaksi['id_transaksi']."'");
                        if (mysqli_num_rows($query_cek_terima) > 0) {
                            $data_terima = mysqli_fetch_array($query_cek_terima);
                            echo "<td>";
                            echo "<label class='alert alert-success'>
                                Sudah diterima<br></label>";
                            echo "</td>";
                            echo "<td></td>";
                        }
                        else{
                            echo "<td><label class='alert alert-danger'>Belum diterima<br></label></td>";
                            echo "<td><a href='kembali.php?id=".$data_transaksi['id_transaksi']."' class='btn btn-warning'
                            onclick='return confirm('Apakah anda yakin sudah menerima barang Anda?')'>Sudah</a></td>";
                        }
                        ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>


</body>
</html>