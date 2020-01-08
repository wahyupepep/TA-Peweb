<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';
if (isset($_POST["submitZawiyah"])) {

    if (tambahZawiyah($_POST) > 0) {
        echo "<script>
                alert ('Jadwal Zawiyah Berhasil Ditambah!');
                document.location.href = 'zawiyah.php';
                </script>";
    } else {
        echo "<script>
                alert ('Berita Gagal Ditambah!');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Berita</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header2.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Zawiyah</li>
            </ol>
        </nav>
        <h2 style="margin: 25px 0 0 0;">
            Tambah Zawiyah
        </h2>
        <hr>
        <table style=" margin: 25px 0 0 0;">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tanggal">
                <tr>
                    <td>
                        <label for="Tempat Zawiyah">Tempat</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="tempatZawiyah" id="tempatZawiyah" size="100px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Waktu Zawiyah">Waktu</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="waktuZawiyah" id="waktuZawiyah" size="100px">
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="date" name="tanggalZawiyah" id="tanggalZawiyah">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        <button type="submit" id="submitZawiyah" class="btn btn-success" name="submitZawiyah">Submit</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- End Footer -->
</body>

</html>