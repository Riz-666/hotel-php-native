<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include('../konek.php');
  include('../template/header.php');

  session_start();
  if (!isset($_SESSION['role'])) {
    echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
			window.location.replace('../login.php');</script>";
  }

  if (isset($_POST['submit'])) {
    $ip = $_POST['id_pemesanan'] ?? '';
    $checkin = $_POST['tgl_check_in'] ?? '';
    $checkout = $_POST['tgl_check_out'] ?? '';
    $th = $_POST['total_hari'] ?? '';
    $jk = $_POST['jumlah_kamar'] ?? '';
    $np = $_POST['nama_pemesan'] ?? '';
    $nt = $_POST['nama_tamu'] ?? '';
    $email = $_POST['email'] ?? '';
    $nohp = $_POST['no_hp'] ?? '';
    $tk = $_POST['tipe_kamar'] ?? '';
    $hs = $_POST['harga_sewa'] ?? '';
    $eb = $_POST['estimasi_biaya'] ?? '';
    $tp = $_POST['tgl_pemesanan'] ?? '';

    $query = "INSERT INTO tb_pemesanan (id_pemesanan,tgl_check_in,total_hari,tgl_check_out,jumlah_kamar,nama_pemesan,nama_tamu,email,no_hp,tipe_kamar,harga_sewa,estimasi_biaya,tgl_pemesanan) VALUES ('','$checkin','$th','$checkout','$jk','$np','$nt','$email','$nohp','$tk','$hs','$eb','$tp')";
    $sql = mysqli_query($host,$query);
    if ($sql) {
      echo "<script> alert('Data Berhasil Di tambahkan');
      window.location.replace('riwayat.php');</script>";
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
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa fa-user"></i> Hallo, <?php echo $_SESSION['username']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="user.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-list"></i> Lainnya
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="v_k_user.php"><i class="fa fa-building"></i> Kamar Hotel</a></li>
                <li><a class="dropdown-item" href="v_f_user.php"><i class="fa fa-door-open"></i> Fasilitas Hotel</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="riwayat.php"><i class="fa fa-bookmark"></i> Riwayat Pemesanan</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex nav-item">
            <a class="nav-link" href="../logout.php" style="color:aliceblue;"><i class="fa fa-power-off"></i> Logout</a>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <br>
  <br>

  <div class="card container">
    <div class="card-header">
      Isi Form Untuk Memesan Kamar
    </div>
    <div class="card-body">

      <form action="" method="post">
        <div class="row" style="text-align: center;">
          <div class="col">
            <input class="form-control" type="hidden" name="id_pemesanan">

            <label for="check_in">Tanggal Check In</label><br>
            <input class="form-control" type="date" name="tgl_check_in" required>
          </div>
          <div class="col">
            <label for="check_out">Tanggal Check Out</label><br>
            <input class="form-control" type="date" name="tgl_check_out" required>
          </div>
          <div class="col">
            <label for="jumlah_kamar">Jumlah Kamar</label><br>
            <input class="form-control" type="number" name="jumlah_kamar" required>
          </div>
        </div>

        <hr>
        <div class="row" style="text-align: left;">
          <div class="col">
            <h2><i>Form Pemesanan</i></h2><br>
          </div>
          <div class="row" style="text-align: center;">
            <div class="col">
              <label for="check_in">Nama Pemesan</label><br>
              <input class="form-control" type="text" name="nama_pemesan" required>
            </div>
            <div class="col">
              <label for="check_in">Nama Tamu</label><br>
              <input class="form-control" type="text" name="nama_tamu" required>
            </div>
          </div>
          <div class="row" style="text-align: center;">
            <div class="col">
              <label for="check_in">Email</label><br>
              <input class="form-control" type="text" name="email" required>
            </div>
            <div class="col">
              <label for="check_in">No Hp</label><br>
              <input class="form-control" type="text" name="no_hp" required>
            </div>
          </div>

          <div class="row" style="text-align: center;">
            <div class="col">
              <label for="tipe_kamar">Tipe Kamar</label><br>
              <select class="form-control" name="tipe_kamar" style="text-align: center;">
                <option value=""> -- Pilih Tipe Kamar -- </option>
                <option value="reguler">Reguler</option>
                <option value="premium">Premium</option>
              </select>
            </div>
            <div class="col">
              <label for="check_in">Estimasi</label><br>
              <input class="form-control" type="text" name="estimasi_biaya" readonly>
            </div>
          </div>
          <div class="row" style="text-align: center; margin: 1em auto;">
            <div class="col">
              <button class="btn btn-outline-info form-control" type="submit" name="submit"><i class="fa fa-paper-plane"></i> Konfirmasi Pesanan</button>
            </div>
      </form>
    </div>
  </div>
  </div>
  </div>
</body>

</html>