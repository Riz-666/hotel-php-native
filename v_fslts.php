<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kamar</title>
    <?php include('template/header.php'); ?>
    <?php include('konek.php');

    $sql = "SELECT * FROM tb_fasilitas";
    $query = mysqli_query($host, $sql);


    ?>
</head>

<body>
    <?php include('template/navbar.php'); ?>
    <br>
    <br>
    <br>
    <center>
        <h1 style="text-shadow: 0 0 8px #000000; color:white;">Fasilitas Hotel</h1>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {

        ?>
            <div class="card mb-3 container">
                <div class="card-body">
                    <?php echo "<img src='images/fasilitas/$data[image]' />"; ?>
                    <hr>
                    <h1><b><?php echo $data['nama_fasilitas'] ?></b></h1>
                    <div class="row">
                        <div class="col">
                            <h3><?php echo $data['keterangan'] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </center>
</body>

</html>