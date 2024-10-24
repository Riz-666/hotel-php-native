<?php

include('../../konek.php');
session_start();
if (!isset($_SESSION['role'])) {
    echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
              window.location.replace('../../login.php');</script>";
}
    $ik = $_POST['id_kamar'] ?? '';
    $tk = $_POST['tipe_kamar'] ?? '';
    $jk = $_POST['jumlah_kamar'] ?? '';
    $fk = $_POST['fasilitas_kamar'] ?? '';
    $hs = $_POST['harga_sewa'] ?? '';

    $query = "UPDATE tb_kamar SET tipe_kamar='$tk', jumlah_kamar='$jk', fasilitas_kamar='$fk', harga_sewa='$hs' WHERE id_kamar='$ik'";

    $sql = mysqli_query($host, $query);

    if ($sql) {
        echo "<script> alert('Data Berhasil Di Update');
			window.location.replace('v_kamar.php');</script>";
    }

?>