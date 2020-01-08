<?php
require 'admin/functions.php';
$berita = mysqli_query($conn, "SELECT * FROM tb_berita WHERE kategori = 'Nasional'");
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
    <!-- <link rel="stylesheet" href="..\assets\css\bootstrap.min.css"> -->
    <!-- Navbar -->
    <?php include('header.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <!-- -->
        <div class="row">
            <div class="col">
                <hr size='100px' width='100%' align='right' style="margin: 30px 0 0 0;">
            </div>
            <div class="col">
                <h1 class="text-center">Berita Nasional</h1>
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
                        <div class="col-md-3">
                            <a href="#">
                                <center>
                                    <img class="img-fluid rounded mb-3 mb-md-0" src="admin/image/<?= $news["img"]; ?>" alt="" style="width: 100%; height:100%;">
                                </center>
                            </a>
                        </div>
                        <div class="col-md-9">
                            <a href="post.php?id=<?= $news["id"]; ?>">
                                <h5>
                                    <?= $news["judul"]; ?>
                                </h5>
                            </a>
                            <div class=" text-justify">
                                <p>
                                    <?php
                                    echo substr($news['isi_berita'], 0, 200);
                                    ?>
                                </p>

                            </div>
                            <a class="btn btn-sm btn-primary" href="post.php?id=<?= $news["id"]; ?>">Baca Selengkapnya...</a>
                            <hr>
                        </div>

                        <?php $i++; ?>
                        <?php if ($i == 5) {
                            break;
                        } ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Related Post
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php $i = 1; ?>
                        <?php foreach ($berita as $news) : ?>
                            <li class="list-group-item">
                                <a href="post.php?id=<?= $news["id"]; ?>">
                                    <?= $news["judul"]; ?>
                                </a>
                            </li>
                            <?php $i++; ?>
                            <?php if ($i == 6) {
                                break;
                            } ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- End Footer -->
</body>

</html>