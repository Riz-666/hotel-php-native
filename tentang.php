<!DOCTYPE html>
<html>
    <head>
      <title>Tentang</title>
        <style>
            body{
                position: relative;
                background-image: url("images/bg.jpg");
                background-size: cover;
                
            }
            .card{
                background-color: #8B0000;
            }
            button{
                background-color: #8B0000;
                color:darkgray;
            }
            h5,p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php include('template/header.php') ?>
        <?php include('template/navbar.php') ?>
          <br>
          <div class="card text-center container">
                    <div class="nav nav-tabs" id="nav-tab">
                        <button class="nav-item nav-link active btn-outline-light" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"><i class="fa fa-book"></i> VISI DAN MISI</button>
                        <button class="nav-item nav-link btn-outline-light" id="nav-kontak-tab" data-toggle="tab" href="#nav-kontak" role="tab"><i class="fa fa-phone"></i> CONTACT</button>
                    </div>
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"">
                        <h4><b>VISI DAN MISI</b></h4>
                        <br>
                        <h5><b>VISI :</b></h5>
                        <p>Menjadi manajemen hotel yang inovatif dengan sumber daya manusia yang berkualitas dengan standar internasional dan keramahtamahan khas Indonesia.</p> <br>
                        <h5><b>MISI :</b></h5>
                        <p>1. Mengembangkan produk dan pelayanan berkualitas yang secara konsisten memenuhi bahkan melebihi harapan konsumen<br>
                        2. Mengembangkan sumber daya manusia berkualitas yang kompeten, dinamis dan mampu secara kreatif mempertahankan pelayanan yang bermutu tinggi. <br>
                        3. Memantapkan posisi pasar yang kuat melalui kinerja yang proaktif dan kompetitif dalam memenuhi kebutuhan konsumen.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-kontak" role="tabpanel">
                        <h4><b>Kontak</b></h4>
                        <p><i class="fab fa-instagram"></i> Instagram : @variz.hotels</p>
                        <br>
                        <p><i class="fab fa-facebook"></i> Facebook : Varis Hotels </p>
                        <br>
                        <p><i class="fab fa-whatsapp"></i> Whatsapp : 0838-XXXX-XXXX</p>
                    </div>
                </div>
            </div>
    
            </div>
          </div>
          
          </body>