<?php
$title = 'Detail Toko';

if( !isset($_GET['Urutan']) || !isset($_GET['Nama']) || !isset($_GET['Jenis']) || !isset($_GET['Pemilik'])) {
    header('Location: ../X');
    exit;
}

include('../header.php');
?>

<div class="detail-toko">
    <h4>Detail Toko <?= $_GET['Urutan']; ?><br></h4>
    Nama Toko : <b><?= $_GET['Nama'] ?></b><br>
    Jenis Toko : <?= $_GET['Jenis'] ?><br>
    Pemilik Toko : <?= $_GET['Pemilik'] ?><br>
</div>

<?php include('../footer.php') ?>