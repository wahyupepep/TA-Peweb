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
                    <img class="d-block w-100" src="http://localhost/UAS-PEWEB/admin/image/5e146c48c572c.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="http://localhost/UAS-PEWEB/post.php?id=34">
                            <h5>Bacaan Sholawat Sebagai Hadiah Ulang Tahun Mawlana Syaikh Mustafa</h5>
                        </a>
                        <p>Pada 25 Januari 2016 ,Bertepatan dengan Milad Hari kelahiran Guru Kami Tercinta Syaikh Mustafa Mas ud ,sebagai bentuk kecintaan para murid berinisiatif untuk memberikan kado kepada Beliau</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/UAS-PEWEB/admin/image/5e14718e1f474.jpg    " alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="http://localhost/UAS-PEWEB/post.php?id=35">
                            <h5>Mawlid Nabi Muhammad SAW,Merayakan Kembalinya Nur Muhammad Dalam Diri<h5>
                        </a>
                        <p>

                            Cikampek,1 Mei 2016.(selalu) Ada sisi kemuliaan didalam diri kita, karena ada Nur Sayyidina Muhammad, kita mengikuti Maulid Nabi besar Muhammad SAW ini, hakikat sebenarnya kita sedang merayakan kem
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/UAS-PEWEB/admin/image/5e156aa7f307d.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="http://localhost/UAS-PEWEB/post.php?id=39">
                            <h5>India: Fear grips Muslim-majority town of Rampur
                                <h5>
                        </a>
                        <p>
                            UTTAR PRADESH, India (AA) : Fear has gripped the Muslim-majority town of Rampur, 250 kilometers (150 miles) northwest of Indian capital New Delhi, as police have booked 141 people and are hunting
                        </p>
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
                        <?php if ($i == 6) {
                            break;
                        } ?>
                    <?php endforeach; ?>
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
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- End Footer -->
</body>

</html>