<?php
require 'functions.php';
if (isset($_POST["submitBacaan"])) {

    if (uploadBacaan($_POST) > 0) {
        echo "<script>
                alert ('Surah Berhasil Ditambah!');
                document.location.href = 'surah.php';
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
    <title>Upload Bacaan</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header2.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upload Bacaan</li>
            </ol>
        </nav>
        <h2 style="margin: 25px 0 0 0;">
            Upload Bacaan
        </h2>
        <hr>
        <table style=" margin: 25px 0 0 0;">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tanggal">
                <tr>
                    <td>
                        <label for="Judul Bacaan">Judul Bacaan</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="judulBacaan" id="judulBacaan" size="100px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bacaan">Upload</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="file" name="bacaan" id="bacaan">
                    </td>

                </tr>

                <tr>
                    <td>
                        <button type="submit" id="submitBacaan" class="btn btn-success" name="submitBacaan">Submit</button>
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