<?php

include('../../konek.php');
session_start();
if (!isset($_SESSION['role'])) {
    echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
              window.location.replace('../../login.php');</script>";
}
    $if = $_POST['id_fasilitas'] ?? '';
    $nf = $_POST['nama_fasilitas'] ?? '';
    $ket = $_POST['keterangan'] ?? '';

    $query = "UPDATE tb_fasilitas SET nama_fasilitas='$nf', keterangan='$ket' WHERE id_fasilitas='$if'";

    $sql = mysqli_query($host, $query);

    if ($sql) {
        echo "<script> alert('Data Berhasil Di Update');
			window.location.replace('v_fasilitas.php');</script>";
    }

?>