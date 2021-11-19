<?php
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama = $_POST["nama"];
    $alamat= $_POST["alamat"];
    $telp = $_POST["telp"];

    include "koneksi.php";
    $update=mysqli_query($koneksi,"update pelanggan set nama='".$nama."', alamat='".$alamat."', telp='".$telp."' where id_pelanggan ='".$id_pelanggan."' ") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update Profil');location.href='profil.php';</script>";    
        } else {
            echo "<script>alert('Gagal update profil');location.href='ubah_profil.php?id_pelanggan=".$_SESSION."';</script>";
        }
?>