<?php
$title = 'Detail Toko';
include('./dataToko.php');
include('../header.php');
?>

<div class="detail-toko">
    <h4>Detail Toko <?= $_GET['Toko']; ?><br></h4>
    Nama Toko : <b><?= $_GET['NamaToko'] ?></b><br>
    Jenis Toko : <?= $_GET['JenisToko'] ?><br>
    Pemilik Toko : <?= $_GET['PemilikToko'] ?><br>
</div>

<?php include('../footer.php') ?>