<?php
require 'admin/functions.php';
$id = $_GET["id"];
// $berita = "SELECT * FROM tb_berita WHERE id = $id";
$berita = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id = $id");
$data   = mysqli_fetch_assoc($berita);
// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets\style.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\bootstrap.js"></script>
    <title></title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <div class="row" style="margin: 10px 0 0 0;">
            <div class="col-md-8">
                <div class="card mb-4">

                    <div class="card-header">
                        Posted on <?= $data['tanggal']; ?>
                    </div>
                    <img class="card-img-top" src="admin/image/<?= $data["img"]; ?>" alt="Card image cap" />
                    <div class="card-body">
                        <h2 class="card-title">
                            <?= $data['judul']; ?>
                        </h2>
                        <p class="card-text text-justify">
                            <?= $data['isi_berita'] ?>
                        </p>
                        <!-- <a href="#" class="btn btn-primary">Read More &rarr;</a> -->
                    </div>
                    <?php if ($data['video'] == 1) : ?>
                        <div class="video text-center">
                            <iframe width="560" height="315" src="<?= $data['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
            <div class=" col-md-4">
                <div class="card my-0">
                    <h5 class="card-header ">text</h5>
                    <div class="list-group">
                        <!-- <a href="#" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </a> -->
                        <a href="#" class="list-group-item list-group-item-action">
                            Dapibus ac facilisis in
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Dapibus ac facilisis in
                        </a>
                    </div>
                    </span>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- End Footer -->
</body>

</html>