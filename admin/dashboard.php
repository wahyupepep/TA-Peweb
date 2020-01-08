<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="admin\assets\style.css">
    <script src="..\assets\js\fontawesome.js" crossorigin="anonymous"></script>
    <title>Dashboard Admin</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header2.php') ?>
    <!-- End Navbar -->

    <div class="container">
        <nav aria-label="breadcrumb" style="margin: 0px 0 0 0 ;">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
                <a href="logout.php">
                    <button type="button" class="btn btn-sm btn-danger" style="margin: -25px 0 0 1000px;">Logout</button>
                </a>
            </ol>
        </nav>

        <h1>
            Selamat Datang di Admin Panel <b>Kampung</b>Sholawat
        </h1>
        <div class="Menu text-center" style="padding: 50px 0 0 0;">
            <div class="row">
                <div class="col">
                    <a href="add_berita.php" style="color: black;">
                        <i class="fas fa-plus-square fa-5x"></i>
                        <br>
                        <label for="">Tambah Berita</label>
                    </a>
                </div>
                <div class="col">
                    <a href="list_berita.php" style="color: black;">
                        <i class="fas fa-trash-alt fa-5x"></i>
                        <br>
                        <label for="">List Berita</label>
                    </a>
                </div>
                <div class="col">
                    <a href="zawiyah.php" style="color: black;">
                        <i class="far fa-calendar-alt fa-5x"></i>
                        <br>
                        <label for="">Kelola Zawiyah</label>
                    </a>
                </div>
                <div class="col">
                    <a href="list_video.php" style="color: black;">
                        <i class="fab fa-youtube fa-5x"></i>
                        <br>
                        <label for="">Kelola Video</label>
                    </a>
                </div>
                <div class="col">
                    <a href="add_video.php" style="color: black;">
                        <i class="fas fa-file-video fa-5x"></i>
                        <br>
                        <label for="">Tambah Video</label>
                    </a>
                </div>
                <!-- <div class="col">
                    <a href="surah.php" style="color: black;">
                        <i class="fas fa-folder-plus fa-5x"></i>
                        <br>
                        <label for="">Surah Al-Qur'an</label>
                    </a>
                </div>
                <div class="col">
                    <a href="upload_bacaan.php" style="color: black;">
                        <i class="fas fa-paperclip fa-5x"></i>
                        <br>
                        <label for="">Upload Bacaan</label>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div style="margin:230px 0 0 0;">
        <?php include('footer.php') ?>
    </div>
    <!-- End Footer -->
</body>

</html>