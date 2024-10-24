<?php
    include('../konek.php');
    session_start();
    if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
              window.location.replace('../login.php');</script>";
    }

    $if = $_GET['id_fasilitas'] ?? '';
    $query = mysqli_query($host, "DELETE FROM tb_fasilitas WHERE id_fasilitas='$if'");

    if ($query) {
        echo "<script> alert('Data Berhasil Di Hapus');
			window.location.replace('fas/v_fasilitas.php');</script>";
    }
    ?>