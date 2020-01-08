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
                    <center>
                        <img class="card-img-top " src="admin/image/<?= $data["img"]; ?>" alt="Card image cap" style="margin: 30px; width:600px" />
                    </center>
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
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        New Post
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
                <div class="card" style="width: 18rem;margin:15px 0 0 0;">
                    <div class="card-header">
                        Kategori
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="daerah.php">
                                Daerah
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="nasional.php">
                                Nasional
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="internasional.php">
                                Internasional
                            </a>
                        </li>
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