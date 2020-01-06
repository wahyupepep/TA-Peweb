<?php
error_reporting(0);

$conn = mysqli_connect("localhost", "root", "", "db_kampungsholawat");
//cek koneksi db
// if (!$conn) {
//     die("error");
// } else {
//     echo "sukses";
// }
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function create($data)
{
    global $conn;
    $judulBerita = htmlspecialchars($data["judulBerita"]);
    $kategoriBerita = htmlspecialchars(($data["kategoriBerita"]));
    $isiBerita = htmlspecialchars($data["isiBerita"]);
    $time = date("Y-m-d H:i:s");
    $img = upload();
    if (!$img) {
        return false;
    }
    // var_dump($isiBerita);

    //query input
    $query = "INSERT INTO tb_berita VALUES ('','$img','$judulBerita','$kategoriBerita','$isiBerita','$time')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $judulBerita = htmlspecialchars($data["judulBerita"]);
    $kategoriBerita = htmlspecialchars(($data["kategoriBerita"]));
    $isiBerita = htmlspecialchars($data["isiBerita"]);
    $imgLama = htmlspecialchars($data["img"]);
    // cek apakah gambar di ganti
    if ($_FILES['img']['error'] === 4) {
        $foto = $imgLama;
    } else {
        $foto = upload();
    }
    // query insert data
    $query = "UPDATE tb_berita SET
       judul = '$judulBerita',
       img = '$foto',
       kategori = '$kategoriBerita',
       isi_berita = '$isiBerita'
       WHERE id = $id
       ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    if ($error === 4) {
        echo " <script>
                alert('Tidak ada Gambar!');
                </script>";
        return false;
    }

    // cek gambar yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert(' Tolong upload gambar!');
                </script>";
        return false;
    }
    //cek ukuran gambar
    if ($ukuranFile > 2000000) {
        echo "<script>
                    alert(' Ukuran terlalu besar!');
                    </script>";
        return false;
    }
    if (isset($_FILES["img"])) {
        move_uploaded_file($tmpName, "image/$namaFileBaru");
        return $namaFileBaru;
    }
}
function delete($id)
{
    global $conn;
    $delete = "DELETE FROM tb_berita WHERE id = $id";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

function uploadBacaan($data)
{
    global $conn;
    $judulBacaan = htmlspecialchars($data["judulBacaan"]);
    $surah = uploadSurah();
    if (!$surah) {
        return false;
    }
    // var_dump($isiBerita);

    //query input
    $query = "INSERT INTO tb_surah VALUES ('','$judulBacaan','$surah')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function uploadSurah()
{
    $namaFile = $_FILES['bacaan']['name'];
    $ukuranFile = $_FILES['bacaan']['size'];
    $error = $_FILES['bacaan']['error'];
    $tmpName = $_FILES['bacaan']['tmp_name'];
    $dirUpload = "upload/bacaan/";

    if ($error === 4) {
        echo " <script>
                alert('Tidak ada Gambar!');
                </script>";
        return false;
    }

    // cek gambar yang diupload adalah gambar
    $ekstensiGambarValid = ['mp3', 'wav'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert(' Tolong upload gambar!');
                </script>";
        return false;
    }
    //cek ukuran gambar 5<B
    if ($ukuranFile > 5000000) {
        echo "<script>
                    alert(' Ukuran terlalu besar!');
                    </script>";
        return false;
    }
    // $terUpload = move_uploaded_file($tmpName, $dirUpload . $namaFile);
    // if ($terUpload) {
    //     echo "Upload berhasil!<br/>";
    // } else {
    //     echo "Upload Gagal!";
    // }

    move_uploaded_file($tmpName, 'upload/bacaan/' . $namaFile);
    return $namaFile;

    // if (isset($_FILES["bacaan"])) {
    // }
}

function tambahZawiyah($data)
{
    global $conn;
    $tempatZawiyah = htmlspecialchars($data["tempatZawiyah"]);
    $waktuZawiyah = htmlspecialchars(($data["waktuZawiyah"]));
    $tglZawiyah = htmlspecialchars($data["tanggalZawiyah"]);

    $query = "INSERT INTO tb_zawiyah VALUES ('','$tempatZawiyah','$waktuZawiyah','$tglZawiyah')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function post($id)
{
}
