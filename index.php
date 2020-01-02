<?php
require 'admin/functions.php';
$berita = mysqli_query($conn, "SELECT * FROM tb_berita");
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

    <title>Home</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header.php') ?>
    <!-- End Navbar -->
    <div class="container">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets\img\sample.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, explicabo quaerat nemo voluptate fugiat magnam eligendi esse tempora id error praesentium accusamus inventore sed deserunt, dolore rem corrupti natus totam!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets\img\sample.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, explicabo quaerat nemo voluptate fugiat magnam eligendi esse tempora id error praesentium accusamus inventore sed deserunt, dolore rem corrupti natus totam!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets\img\sample.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, explicabo quaerat nemo voluptate fugiat magnam eligendi esse tempora id error praesentium accusamus inventore sed deserunt, dolore rem corrupti natus totam!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- -->
        <div class="row">
            <div class="col">
                <hr size='100px' width='100%' align='right' style="margin: 30px 0 0 0;">
            </div>
            <div class="col">
                <h1 class="text-center"><b>Kampung</b>Sholawat</h1>
            </div>
            <div class="col">
                <hr size='100px' width='100%' align='right' style="margin: 30px 0 0 0;">
            </div>
        </div>
        <!-- -->
        <div class="row">
            <div class="col-8">
                <div class="card-group">
                    <?php $i = 1; ?>
                    <?php foreach ($berita as $news) : ?>
                        <div class="card">
                            <img src="admin/image/<?= $news["img"]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $news["judul"]; ?></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="admin/image/<?= $news["img"]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $news["judul"]; ?></h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->

</body>

</html>