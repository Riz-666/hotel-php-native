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

    $sql = "SELECT * FROM tb_kamar";
    $query = mysqli_query($host, $sql);


    ?>
    <style>
        .card{
            border-radius: 10px;
        }
        .responsive{
            width: auto;
            height: auto;
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
                    <?php echo "<img src='../images/kamar/$data[image]' class='responsive' />"; ?>
                    <hr>
                    <h1><b><?php echo $data['tipe_kamar'] ?></b></h1>
                    <div class="row">
                        <div class="col">
                            <h3><?php echo $data['fasilitas_kamar'] ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>Harga Mulai Dari </h3>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 style="color:darkorange"><?php echo "= IDR " . $data['harga_sewa'] ?></h3>
                            </div>
                        </div>
                        <a class="btn btn-outline-dark" href="pemesanan.php"><i class="fa fa-paper-plane"></i> Pesan Kamar Ini Sekarang</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </center>
</body>

</html>