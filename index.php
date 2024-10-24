<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <style>
    .carousel-item {
      height: 500px;
    }

    .col {
      color: white;
    }
  </style>
</head>

<body>
  <?php include('konek.php'); ?>
  <?php include('template/header.php'); ?>
  <?php include('template/navbar.php'); ?>

  <div class="text-center">
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
              <img src="assets/images/room1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/room2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/room3.jpg" class="d-block w-100" alt="..." style="height: 500px;">
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
    <div class="row">
      <div class="col">
        <h3 style="font-size: 100px;">HOTEL</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h1 style="font-size: 200px;">VARIZ</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h5 style="font-size: 30px;">Your Best Partner For Staycation</h5>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <a type="button" class="btn btn-primary btn-lg" style="background-color:white; color:#6495ED;" href="login.php">LOGIN</a>
      </div>
      <div class="col">
        <a type="button" class="btn btn-primary btn-lg" style="background-color:white; color:#6495ED;" href="login.php">DAFTAR</a>
      </div>
    </div>
    </br>
    </br>
    <?php include('template/footer.php'); ?>
</body>

</html>