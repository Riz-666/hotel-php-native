<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../../konek.php');
    include('../../template/header.php');

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
    $i = $_FILES['image'] ?? '';

    $sql = "SELECT*FROM tb_kamar";
    $query = mysqli_query($host, $sql);
    ?>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include('../../template/adm_nav.php'); ?>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col">

            <div class="table-responsive">
                <center>
                    <table class="table table-hover table-dark container" border="1px">
                        <thead>
                            <tr>
                            <td colspan="7"><a class="floating btn btn-primary form-control" href="t_kamar.php"><i class="fa fa-plus"></i> Tambah Tipe Kamar</a></td>
                            </tr>   
                            <td>ID KAMAR</td>
                            <td>TIPE KAMAR</td>
                            <td>JUMLAH KAMAR</td>
                            <td>FASILITAS KAMAR</td>
                            <td>HARGA SEWA</td>
                            <td>IMAGE</td>
                            <td>AKSI</td>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                while ($d = mysqli_fetch_array($query)) {
                                ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d['tipe_kamar'] ?></td>
                                    <td><?php echo $d['jumlah_kamar'] ?></td>
                                    <td><?php echo $d['fasilitas_kamar'] ?></td>
                                    <td><?php echo $d['harga_sewa'] ?></td>
                                    <td><?php echo "<img src='../../images/$d[image]' width='60px' />" ?></td>
                                    <td><a class="btn btn-warning btn-sm" href="e_kamar.php?id_kamar=<?php echo $d['id_kamar'] ?>  ?>"><i class="fa fa-edit"></i> Edit</a>
                                        <a class="btn btn-danger btn-sm" href="../delete.php?id_kamar=<?php echo $d['id_kamar'] ?>  ?>"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                    
                </center>
            </div>

        </div>
    </div>
    <br>
    <br>
    <?php include('../../template/footer.php'); ?>
</body>

</html>