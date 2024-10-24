<!DOCTYPE html>
<html lang="en">

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

  if (isset($_POST['submit'])) {
    $ik= $_POST['id_fasilitas'] ?? '';
    $nf = $_POST['nama_fasilitas'] ?? '';
    $ket = $_POST['keterangan'] ?? '';

    $query = "INSERT INTO tb_fasilitas (id_fasilitas,nama_fasilitas,keterangan) VALUES ('','$nf','$ket')";

    if ($d = mysqli_query($host, $query)) {
      echo "<script> alert('Berhasil Menambahkan Fasilitas'); 
    windows.location.replace('v_kamar.php');</script>";
    } else {
      echo "<script> alert('Gagal Menambahkan Fasilitas'); 
    windows.location.replace('t_kamar.php');</script>";
    }
  }
  ?>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .card {
      border-radius: 30px 30px 30px 30px;
    }
  </style>
</head>

<body>
<?php include('../../template/adm_nav.php') ?>
<br>
<br>
<br>
  <div class="card container">
    <div class="card-header">
      <b>Tambahkan Kamar</b> 
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="row" style="text-align: center;">
          <div class="col">
            <input class="form-control" type="hidden" name="id_kamar">

            <label for="tipe_kamar">Nama Fasilitas</label><br>
            <input class="form-control" type="text" name="nama_fasilitas" required>
          </div>
          <div class="col">
            <label for="jumlah_kamar">Keterangan</label><br>
            <input class="form-control" type="text" name="keterangan" required>
          </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col">
                <label for="">Upload Gambar</label>
                <input class="form-control" type="file" name="image">
            </div>
        </div>
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
        <div class="card-footer" style="text-align: center;">
            Copyright &copy; Team7
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
</body>
</html>