<?php
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
function tambah($data)
{
    global $conn;
    $judulBerita = htmlspecialchars($data["judulBerita"]);
    $kategoriBerita = htmlspecialchars(($data["kategoriBerita"]));
    $isiBerita = htmlspecialchars($data["isiBerita"]);
    $tanggal = date("Y-m-d H:i:s");
    $img = upload();
    if (!$img) {
        return false;
    }
    // var_dump($isiBerita);

    //query input
    $query = "INSERT INTO tb_berita VALUES ('','$img','$judulBerita','$kategoriBerita','$isiBerita','$tanggal')";

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
    if ($ukuranFile > 1000000) {
        echo "<script>
                    alert(' Ukuran terlalu besar!');
                    </script>";
        return false;
    }
    if (isset($_FILES["image"])) {
        move_uploaded_file($tmpName, "image/$namaFileBaru");
        return $namaFileBaru;
    }
}
