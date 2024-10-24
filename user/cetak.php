<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <?php
    include('../konek.php');
    session_start();
    if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
			window.location.replace('../login.php');</script>";
    }
    $ip = $_GET['id_pemesanan'] ?? '';
    $sql = "SELECT * FROM tb_pemesanan WHERE id_pemesanan='$ip'";
    $query = mysqli_query($host, $sql);
    ?>
</head>
<body>
    <center>
    <table border="1px" style="margin: 30px;  width: 400px;">
        <?php 
        $no=1;
        while($d=mysqli_fetch_array($query)) { ?>
        <tr>
            <td colspan="3"><h1 style="text-align: center;">Bukti Transaksi</h1></td>
        </tr>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td> <?php echo $d['nama_pemesan'];  ?> </td>
        </tr>
        <tr>
            <td>Nama Tamu</td>
            <td>:</td>
            <td> <?php echo $d['nama_tamu'];  ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td> <?php echo $d['email'];  ?> </td>
        </tr>
        <tr>
            <td>No. Telefon</td>
            <td>:</td>
            <td> <?php echo $d['no_hp'];  ?> </td>
        </tr>
        <tr>
            <td>Tipe Kamar</td>
            <td>:</td>
            <td> <?php echo $d['tipe_kamar'];  ?> </td>
        </tr><tr>
            <td>Tanggal Check In</td>
            <td>:</td>
            <td> <?php echo $d['tgl_check_in'];  ?> </td>
        </tr>
        <tr>
            <td>Tanggal Check Out</td>
            <td>:</td>
            <td> <?php echo $d['tgl_check_out'];  ?> </td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td>:</td>
            <td> <?php echo $d['jumlah_kamar'];  ?> </td>
        </tr>
        <tr>
            <td>Harga Sewa</td>
            <td>:</td>
            <td> <?php echo $d['harga_sewa'];  ?> </td>
        </tr>
        <tr>
            <td>Estimasi Biaya</td>
            <td>:</td>
            <td> <?php echo $d['estimasi_biaya'];  ?> </td>
        </tr>
        <?php } ?>
    </table>
    </center>
    <script>
        window.print();
    </script>
</body>
</html>