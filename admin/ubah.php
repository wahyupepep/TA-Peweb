<?php
require 'functions.php';
//get id
$id = $_GET["id"];
$berita = query("SELECT * FROM tb_berita where id = $id")[0];

if (isset($_POST["submitEdit"])) {
    if (edit($_POST) > 0) {
        echo "<script>
                alert ('Barang Berhasil Diubahh!');
                document.location.href = 'list_berita.php';
                </script>";
    } else {
        echo "<script>
            alert ('Barang Gagal Diubah!');
            document.location.href = 'ubah.php';
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
    <title>Edit Berita</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('header2.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <h2 style="margin: 25px 0 0 0;">
            Edit Berita
        </h2>
        <hr>
        <table style=" margin: 25px 0 0 0;">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $berita["id"]; ?>">
                <input type="hidden" name="tanggal">
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <img src="image/<?= $berita["img"]; ?>" alt="" width="90">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gambar">Gambar</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="file" name="img" id="img" value="<?= $berita["img"]; ?>">
                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="Judul Berita">Judul Berita</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="judulBerita" id="judulBerita" size="100px" value="<?= $berita["judul"]; ?>">
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
                            <option value="internasional">Internasional</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleFormControlTextarea1">Berita :</label>

                    </td>
                    <td>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="isiBerita"><?= $berita["isi_berita"]; ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" id="submitEdit" class="btn btn-success" name="submitEdit">Submit</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <br><br>
    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- End Footer -->
</body>

</html>