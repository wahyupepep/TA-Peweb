<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="admin\assets\style.css">
    <script src="..\assets\js\fontawesome.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b) fixed;
    background-repeat: no-repeat;
    height:100%;">
    <!-- Navbar -->
    <?php include('header.php') ?>
    <!-- End Navbar -->

    <div class="container">
        <h1><br>
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
                        <label for=""> List Berita</label>
                    </a>
                </div>
                <div class="col">
                    <a href="#" style="color: black;">
                        <i class="fas fa-folder-plus fa-5x"></i>
                        <br>
                        <label for=""> Upload Bacaan</label>
                    </a>
                </div>
                <div class="col">
                    <a href="#" style="color: black;">
                        <i class="fas fa-file-video fa-5x"></i>
                        <br>
                        <label for="">Upload Video</label>
                    </a>
                </div>
                <div class="col">
                    <a href="#" style="color: black;">
                        <i class="fas fa-paperclip fa-5x"></i>
                        <br>
                        <label for="">Upload Video</label>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>