<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa fa-user"></i> Hallo, <?php echo $_SESSION['username']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../admin.php"><i class="fa fa-home"></i> Home</a>
            </li>
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
