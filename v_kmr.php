<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kamar</title>
    <?php include('template/header.php'); ?>
    <?php include('konek.php');

    $sql = "SELECT * FROM tb_kamar";
    $query = mysqli_query($host, $sql);


    ?>
    <style>
        .card{
            border-radius: 55px;
        }
    </style>
</head>

<body>
    <?php include('template/navbar.php'); ?>
    <br>
    <br>
    <br>
    <center>
        <h1 style="text-shadow: 0 0 8px #000000; color:white;">Tipe Kamar Hotel</h1>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {

        ?>
            <div class="card mb-3 container">
                <div class="card-body">
                    <?php echo "<img src='images/kamar/$data[image]' />"; ?>
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
                    </div>
                </div>
            </div>
        <?php } ?>
    </center>
</body>

</html>