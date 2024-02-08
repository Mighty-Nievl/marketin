<?php
$title = 'Detail Toko';

if (!isset($_GET['id']) || !isset($_GET['nama']) || !isset($_GET['jenis']) || !isset($_GET['pemilik'])) {
    header('Location: ../X');
    exit;
}

include('../header.php');
?>

<div class="detail-toko">
    <h4>Detail Toko ke-<?= $_GET['id']; ?></h4>
    <ul>
        <li><b><?= $_GET['nama'] ?></b></li>
        <li>Jenis Toko : <?= $_GET['jenis'] ?></li>
        <li>Pemilik Toko : <?= $_GET['pemilik'] ?></li>
    </ul>
</div>

<div class="tambah">
    <a href="tambah.php">
        Tambah data toko
    </a>
</div>

<?php include('../footer.php') ?>