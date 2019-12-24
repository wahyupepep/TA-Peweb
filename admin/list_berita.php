<?php
require 'functions.php';
$berita = mysqli_query($conn, "SELECT * FROM tb_berita");
// while ($fetch = mysqli_fetch_array($berita)) {
//     echo selengkapnya($fetch["isi_berita"]);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <title>list Berita</title>
</head>

<body style="background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b) fixed;
    background-repeat: no-repeat;
    height:100%;">
    <?php include "header2.php"; ?>
    <div class="container">
        <table class="table table-bordered table-striped" style="margin: 10px 0 0 0;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($berita as $news) : ?>
                    <tr>
                        <td>
                            <?= $i; ?>
                        </td>
                        <td>
                            <img src="image/<?= $news["img"]; ?>" width="50">
                        </td>
                        <td>
                            <?= $news["judul"]; ?>
                        </td>
                        <td>
                            <?= $news["kategori"]; ?>
                        </td>

                        <td>
                            <a href="ubah.php?id=<?= $news["id"]; ?>">
                                <button type="submit" name="ubah" class="btn btn-light">Ubah</button>
                            </a>
                            <a href="hapus.php?id=<?= $news["id"]; ?>">
                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                        <td>
                            <?= $news["tanggal"]; ?>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>