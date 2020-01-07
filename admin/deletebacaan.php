<?php
require 'functions.php';
$id = $_GET["id"];
if (deleteBacaan($id) > 0) {
    echo "<script>
    alert('Berhasil Dihapus !');
    document.location.href = 'surah.php';
    </script>";
}
