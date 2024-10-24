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
    $ik= $_POST['id_kamar'] ?? '';
    $tk = $_POST['tipe_kamar'] ?? '';
    $jk = $_POST['jumlah_kamar'] ?? '';
    $fk = $_POST['fasilitas_kamar']?? '';
    $hs = $_POST['harga_sewa']?? '';

    $query = "INSERT INTO tb_kamar (id_kamar,tipe_kamar,jumlah_kamar,fasilitas_kamar,harga_sewa) VALUES ('','$tk','$jk','$fk','$hs')";

    if ($d = mysqli_query($host, $query)) {
      echo "<script> alert('Berhasil Menambahkan Kamar'); 
    windows.location.replace('v_kamar.php');</script>";
    } else {
      echo "<script> alert('Gagal Menambahkan Kamar'); 
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

            <label for="tipe_kamar">Tipe Kamar</label><br>
            <input class="form-control" type="text" name="tipe_kamar" required>
          </div>
          <div class="col">
            <label for="jumlah_kamar">Jumlah Kamar</label><br>
            <input class="form-control" type="number" name="jumlah_kamar" required>
          </div>
        </div>
          <div class="row" style="text-align: center;">
          <div class="col">
            <label for="fasilitas_kamar">Fasilitas Kamar</label><br>
            <input class="form-control" type="text" name="fasilitas_kamar" required>
          </div>
          <div class="col">
            <label for="harga_sewa">Harga Sewa</label><br>
            <input class="form-control" type="text" name="harga_sewa" required>
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
                <a class="btn btn-secondary form-control" href="v_kamar.php">Kembali</a>
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