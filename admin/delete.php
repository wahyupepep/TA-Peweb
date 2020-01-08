<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';
$id = $_GET["id"];
if (delete($id) > 0) {
    echo "<script>
    alert('Berhasil Dihapus !');
    document.location.href = 'list_berita.php';
    </script>";
}
