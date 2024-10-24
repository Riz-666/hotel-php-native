<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kamar</title>
    <?php
    include('../../konek.php');
    include('../../template/header.php');
    session_start();
    if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
			window.location.replace('../../login.php');</script>";
    }
    $ik = $_GET['id_kamar'] ?? '';
    $sql = "SELECT * FROM tb_kamar WHERE id_kamar='$ik'";
    $query = mysqli_query($host, $sql);

    ?>
</head>

<body>
    <?php include('../../template/adm_nav.php') ?>
    <br>
    <br>
    <br>
    
        <center>
            <div class="card text-center container">
            <form action="proses_edit.php" method="post">
                <div class="card-header">
                    Update Data Kamar
                </div>
                <?php
                $no = 1;
                while ($d = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card-body">

                        <input type="hidden" name="id_kamar" value="<?php echo $d['id_kamar']; ?>">
                        <div class="row">
                            <div class="col">
                                <label>Tipe Kamar</label>
                                <br>
                                <input class="form-control" type="text" name="tipe_kamar" value="<?php echo $d['tipe_kamar'] ?>">
                            </div>
                            <div class="col">
                                <label for="">Jumlah Kamar</label>
                                <br>
                                <input class="form-control" type="number" name="jumlah_kamar" value="<?php echo $d['jumlah_kamar'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Fasilitas Kamar</label><br>
                                <input class="form-control" type="text" name="fasilitas_kamar" value="<?php echo $d['fasilitas_kamar'] ?>">
                            </div>
                            <div class="col">
                                <label for="">Harga Sewa</label><br>
                                <input class="form-control" type="text" name="harga_sewa" value="<?php echo $d['harga_sewa'] ?>">
                            </div>
                        </div>
                        </div>
                    
                    <div class="row">
                            <div class="col">
                                <label for="">Gambar</label><br>
                                <input class="form-control" type="file" name="file" value="<?php echo $d['image'] ?>">
                            </div>
                    </div>'
                    <br>
                    <div class="row">
                            <div class="col">
                            <a class="btn btn-secondary form-control" href="v_kamar.php">Kembali</a>
                                
                            </div>
                            <div class="col">
                            <button class="btn btn-warning form-control" type="submit" name="submit">Update</button>
                            </div>
                        </div>
                <br>
                    <?php } ?>
                    <div class="card-footer">
                        Copyright &copy; Team7
                    </div>
                    </form>
                </div>
        </center>
    
</body>

</html>