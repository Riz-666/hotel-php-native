<!DOCTYPE html>
<html>

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
  $ip = $_POST['id_pemesanan'] ?? '';
  $checkin = $_POST['tgl_check_in'] ?? '';
  $checkout = $_POST['tgl_check_out'] ?? '';
  $th = $_POST['total_hari'] ?? '';
  $jk = $_POST['jumlah_kamar'] ?? '';
  $np = $_POST['nama_pemesan'] ?? '';
  $nt = $_POST['nama_tamu'] ?? '';
  $email = $_POST['email'] ?? '';
  $nohp = $_POST['no_hp'] ?? '';
  $hs = $_POST['harga_sewa'] ?? '';
  $eb = $_POST['estimasi_biaya'] ?? '';
  $tp = $_POST['tgl_pemesanan'] ?? '';

  $query = "SELECT * FROM tb_pemesanan";

  $sql = mysqli_query($host, $query);

  ?>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .col {
      color: white;
    }

    .carousel-item {
      height: 500px;
      border-radius: 55px 55px 55px 55px;
    }

    .card {
      border-radius: 20px;
      color: black;
      text-align: left;
    }

    .floating {
      position: fixed;
      bottom: 40px;
      right: 40px;
    }

    thead {
      text-align: center;
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
  <div class="row">
    <div class="col">
      <center>
        <div class="table-responsive">
          <table class="table table-hover table-dark container" border="1px">
            <thead>
              <td>ID PEMESANAN</td>
              <td>TGL CHECK IN</td>
              <td>Tgl CHECK OUT</td>
              <td>TOTAL HARI</td>
              <td>JUMLAH KAMAR</td>
              <td>NAMA PEMESAN</td>
              <td>NAMA TAMU</td>
              <td>EMAIL</td>
              <td>NOMOR TELEFON</td>
              <td>TIPE KAMAR</td>
              <td>HARGA SEWA</td>
              <td>ESTIMASI BIAYA</td>
              <td>TGL PEMESANAN</td>
              <td colspan="2">Aksi</td>
            </thead>
            <tbody>
              <?php
              $no = 1;
              while ($d = mysqli_fetch_array($sql)) {
              ?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tgl_check_in']; ?></td>
                <td><?php echo $d['tgl_check_out']; ?></td>
                <td><?php echo $d['total_hari']; ?></td>
                <td><?php echo $d['jumlah_kamar']; ?></td>
                <td><?php echo $d['nama_pemesan']; ?></td>
                <td><?php echo $d['nama_tamu']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['tipe_kamar']; ?></td>
                <td><?php echo $d['harga_sewa']; ?></td>
                <td><?php echo $d['estimasi_biaya']; ?></td>
                <td><?php echo $d['tgl_pemesanan']; ?></td>
                <td><a class="btn btn-danger btn-sm" href="delete.php?id_pemesanan=<?php echo $d['id_pemesanan']; ?>"><i class="fa fa-trash"></i> Hapus</a></td>
                <td><a class="btn btn-secondary btn-sm" href="cetak.php?id_pemesanan=<?php echo $d['id_pemesanan']; ?>"><i class="fa fa-scroll"> Cetak Bukti</a></td>
            </tbody>
          <?php } ?>
          </table>
        </div>
      </center>
    </div>
  </div>
  <br>
  <br>
  <?php include('../template/footer.php'); ?>
</body>

</html>