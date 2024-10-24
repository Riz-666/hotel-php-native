<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kamar</title>
    <?php include('../template/header.php'); ?>
    <?php include('../konek.php');
      session_start();
      $user = $_SESSION['username'];
      if (!isset($_SESSION['role'])) {
        echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
                window.location.replace('../login.php');</script>";
      }

    $sql = "SELECT * FROM tb_fasilitas";
    $query = mysqli_query($host, $sql);


    ?>
    <style>
        .card{
            border-radius: 10px;
        }
        .floating {
            position: fixed;
            bottom: 40px;
            right: 40px;
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
                <li><a class="dropdown-item" href="v_f_user..php"><i class="fa fa-door-open"></i> Fasilitas Hotel</a></li>
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
    <center>
        <br>
        <br>
        <br>
        <h1 style="text-shadow: 0 0 8px #000000; color:white;">Tipe Kamar Hotel</h1>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {

        ?>
            <div class="card mb-3 container">
                <div class="card-body">
                    <?php echo "<img src='../images/fasilitas/$data[image]' class='responsive' />"; ?>
                    <hr>
                    <h1><b><?php echo $data['nama_fasilitas'] ?></b></h1>
                    <div class="row">
                        <div class="col">
                            <h3><?php echo $data['keterangan'] ?></h3>
                        </div>
                    </div>q
                    <a class="floating btn btn-lg btn-primary" href="pemesanan.php"><i class="fa fa-paper-plane"></i><b> PESAN SEKARANG</b></a>
                </div>
            </div>
        <?php } ?>
    </center>
</body>

</html>