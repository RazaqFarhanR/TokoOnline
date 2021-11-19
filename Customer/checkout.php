<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {

        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi)
        VALUES ('".$_SESSION['id_pelanggan']."', '".$_SESSION['id_petugas']."', '".date('Y-m-d', mktime(0,0,0,date('m')))."')");

    if ($query_transaksi) {
        $id = mysqli_insert_id($koneksi);
        foreach ($cart as $key => $value) {
            mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_detail_transaksi, id_transaksi, id_produk, qty, subtotal)
            VALUES ('".$id."', '".$value['id_transaksi']"', '".$value['id_produk']."', '".$value['qty']."', '".$value['subtotal']"')");
    }

            unset($_SESSION['cart']);
            echo "<script>alert('Transaksi Anda Berhasil');location.href='transaksi.php'</script>";
        }
        else{
            echo "<script>alert('Transaksi Gagal');location.href='keranjang.php'</script>";
        }
    }
?>