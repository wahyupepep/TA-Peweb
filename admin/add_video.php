<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';
if (isset($_POST["submitBerita"])) {

    if (video($_POST) > 0) {
        echo "<script>
                alert ('Berita Berhasil Ditambah!');
                document.location.href = 'list_video.php';
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
    <script src="https://cdn.tiny.cloud/1/slnbjgoluq6lrwwub8hkjhpz5kl6p6xsjkh3xvq2z5ryjmz0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Tambah Video</title>
    <script>
        tinymce.init({
            selector: '#isiBerita'
        });
    </script>
</head>

<body>
    <!-- Navbar -->
    <?php include('header2.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Video</li>
            </ol>
        </nav>
        <h2 style="margin: 25px 0 0 0;">
            Tambah Video
        </h2>
        <hr>
        <table style=" margin: 25px 0 0 0;">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tanggal">
                <tr>
                    <td>
                        <label for="Judul Berita">Judul Berita</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="judulBerita" id="judulBerita" size="100px" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kategoriBerita">Kategori Berita</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select class="custom-select" id="inputGroupSelect01" name="kategoriBerita">
                            <option selected>Choose...</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Daerah">Daerah</option>
                            <option value="Internasional">Internasional</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        Link Berita
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="linkVideo" id="linkVideo" size="100px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" id="submitBerita" class="btn btn-success" name="submitBerita">Submit</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <br><br>
</body>
<!-- Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->

</html>