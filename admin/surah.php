<?php
require 'functions.php';
$surah = mysqli_query($conn, "SELECT * FROM tb_surah");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">

    <title>List Berita</title>
</head>

<body>
    <?php include "header2.php"; ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Surah Al-Qur'an</li>
            </ol>
        </nav>
        <h2 style="margin: 25px 0 0 0;">
            Surah Al-Qur'an
        </h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered" style="margin: 10px 0 0 0;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($surah as $surat) : ?>
                    <tr>
                        <td>
                            <?= $i; ?>
                        </td>
                        <td>
                            <?= $surat["judul"]; ?>
                        </td>
                        <td>
                            <a href="ubah.php?id=<?= $surat["id"]; ?>">
                                <button type="submit" name="ubah" class="btn btn-sm btn-primary">Ubah</button>
                            </a>
                            <a href="delete.php?id=<?= $surat["id"]; ?>">
                                <button type="submit" name="hapus" class="btn btn-sm btn-danger" Onclick="return ConfirmDelete();"> Delete</button>
                            </a>
                        </td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
</body>

</html>