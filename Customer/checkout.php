<?php
    session_start();
    include "koneksi.php";
    $keranjang = @$_SESSION['cart'];
    if (count($keranjang) > 0) {
        $tgl_transaksi = date('Y-m-d');
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_pelanggan, tgl_transaksi)
        VALUES ('".$_SESSION['id_pelanggan']."', '".$tgl_transaksi."')");

        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($keranjang as $key => $value) {
                $harga = $value['harga'];
                $qty = $value['qty'];
                $subtotal = $qty*$harga;
                mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal)
                VALUES ('".$id."', '".$value['id_produk']."', '".$qty."', '".$subtotal."')");
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Anda Berhasil Membeli Produk');location.href='transaksi.php'</script>";
        }
        else{
            echo "<script>alert('Gagal Membeli Produk');location.href='keranjang.php'</script>";
        }
    }
?>