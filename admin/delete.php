    <?php
    include('../konek.php');
    session_start();
    if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
              window.location.replace('../login.php');</script>";
    }

    $ik = $_GET['id_kamar'] ?? '';
    $query = mysqli_query($host, "DELETE FROM tb_kamar WHERE id_kamar='$ik'");

    if ($query) {
        echo "<script> alert('Data Berhasil Di Hapus');
			window.location.replace('kamar/v_kamar.php');</script>";
    }
    ?>