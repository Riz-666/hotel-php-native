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
    $if = $_GET['id_fasilitas'] ?? '';
    $sql = "SELECT * FROM tb_fasilitas WHERE id_fasilitas='$if'";
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
            <form action="edit.php" method="post">
                <div class="card-header">
                    Update Data Fasilitas
                </div>
                <?php
                $no = 1;
                while ($d = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card-body">

                        <input type="hidden" name="id_fasilitas" value="<?php echo $d['id_fasilitas']; ?>">
                        <div class="row">
                            <div class="col">
                                <label>Nama Fasilitas</label>
                                <br>
                                <input class="form-control" type="text" name="nama_fasilitas" value="<?php echo $d['nama_fasilitas'] ?>">
                            </div>
                            <div class="col">
                                <label for="">Keterangan</label>
                                <br>
                                <input class="form-control" type="text" name="keterangan" value="<?php echo $d['keterangan'] ?>">
                            </div>
                        </div>
                            <div class="col">
                                <label for="">Gambar</label><br>
                                <input class="form-control" type="file" name="file" value="<?php echo $d['image'] ?>">
                            </div>
                    </div>'
                    <br>
                    <div class="row">
                            <div class="col">
                            <a class="btn btn-secondary form-control" href="v_fasilitas.php">Kembali</a>
                                
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