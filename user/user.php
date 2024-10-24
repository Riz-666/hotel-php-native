<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include('../konek.php');
  include('../template/header.php');

  session_start();
  $user = $_SESSION['username'];
  if (!isset($_SESSION['role'])) {
    echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
			window.location.replace('../login.php');</script>";
  }

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

    td {
      color: #6495ED;
      background: white;
      border-radius: 5px;
      width: 70px;
      text-align: center;
      box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.4);
      padding: 10px;
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
  <div class="text-center container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../assets/images/room1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Reguler Room</h5>
                <p>Choose Your Best Room In Variz Hotel</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/images/room2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Elite Room</h5>
                <p>Choose Your Best Room In Variz Hotel</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/images/room3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Premium Room</h5>
                <p>Choose Your Best Room In Variz Hotel</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col" style="text-align: left;">
        <h3 style="font-size:40px;">Hotel Variz</h3>
        <i class="fa fa-star" style="color: yellow;"></i>
        <i class="fa fa-star" style="color: yellow;"></i>
        <i class="fa fa-star" style="color: yellow;"></i>
        <i class="fa fa-star" style="color: yellow;"></i>
        <i class="fa fa-star" style="color: yellow;"></i>
        4.9 Reviews
      </div>
      <div class="col">
        <h3 style="font-size:40px; text-align:right;">Rp. 550,000+</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">

      </div>
    </div>
    <br>
    <div class="row">
      <div class="col" style="text-align: left;">
        <h5><i class="fa fa-map"></i> jL. PAHLAWAN KEMERDEKAAN<br>
          <p style="font-size:15px;">KOTA BOGOR 16121</p>
        </h5>
      </div>
      <div class="col">
        <h5 style="font-size: 20px; text-align:right;">101 Excelent<br> 1000+ Reviews</h5>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <h1 style="text-align: left;"><b>Hotel Specification</b></h2>
      </div>
    </div>
    <br>
    <br>
    <div class="row" style="font-size: large;">
      <div class="col">
        <center>
          <table>
            <tr>
              <td><i class="fa fa-bed"></i> <br> BED</td>
            </tr>
          </table>
        </center>
      </div>
      <div class="col">
        <center>
          <table>
            <tr>
              <td><i class="fa fa-wifi"></i> <br>WIFI</td>
            </tr>
          </table>
        </center>
      </div>
      <div class="col">
        <center>
          <table>
            <tr>
              <td><i class="fa fa-person-swimming"></i> <br>POOLS</td>
            </tr>
          </table>
        </center>
      </div>
      <div class="col">
        <center>
          <table>
            <tr>
              <td><i class="fa fa-utensils"></i> <br>LUNCH</td>
            </tr>
          </table>
        </center>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Hotel Policies</h5>
            <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima explicabo distinctio, voluptate consectetur, perferendis veniam aperiam fugiat ut vero maxime officiis, temporibus repudiandae rerum odio. Obcaecati nemo saepe eveniet non. </p>
          </div>
        </div>
      </div>
    </div>
    <a class="floating btn btn-lg btn-primary" href="pemesanan.php"><i class="fa fa-paper-plane"></i><b> PESAN SEKARANG</b></a>
    <br>
    <br>
    <?php include('../template/footer.php'); ?>
</body>

</html>