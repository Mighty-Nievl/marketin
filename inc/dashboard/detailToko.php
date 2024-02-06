<?php
include('./inc/header.php');
$title = 'Detail Toko';
// include('./inc/dashboard/dataToko.php');
?>

<div class="detail-toko">
    <b>Detail</b>
    <b>Toko <?= $_GET["Toko"]; ?></b>
    <?php foreach($toko as $t) : ?>
    <ul>
        <li>Nama Toko : <?= ($t['NamaToko']); ?></li>
        <li>Jenis Toko : <?= ($t["JenisToko"]); ?></li>
        <li>Pemilik Toko: <?= ($t['PemilikToko']); ?></li>
    </ul>
    <?php endforeach; ?>
</div>

<?php include('../footer.php') ?>