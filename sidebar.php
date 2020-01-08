<?php
require 'admin/functions.php';
$berita = mysqli_query($conn, "SELECT * FROM tb_berita");
?>
<div class="card" style="width: 18rem;">
    <div class="card-header">
        New Post
    </div>
    <ul class="list-group list-group-flush">
        <?php $i = 1; ?>
        <?php foreach ($berita as $news) : ?>
            <li class="list-group-item"> <?= $news["judul"]; ?>
            </li>
            <?php $i++; ?>
            <?php if ($i == 5) {
                break;
            } ?>
        <?php endforeach; ?>
    </ul>
</div>