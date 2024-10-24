<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include('../konek.php');
    session_start();
    if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
              window.location.replace('../login.php');</script>";
    }

    $ip = $_GET['id_pemesanan'] ?? '';
    $query = mysqli_query($host, "DELETE FROM tb_pemesanan WHERE id_pemesanan='$ip'");

    if ($query) {
        echo "<script> alert('Data Berhasil Di Hapus');
			window.location.replace('riwayat.php');</script>";
    }
    ?>
</head>

<body>

</body>

</html>