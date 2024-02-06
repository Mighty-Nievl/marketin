<?php

$title = 'Detail Toko';

$namaToko = ["Karunia Indah", "Damai Sejahtera", "Wulan Fashion"];

$toko = [
    [
        'Toko' => 'Pertama',
        'NamaToko' => $namaToko[0],
        'JenisToko' => 'Bangunan',
        'PemilikToko' => 'RezalH'
    ],
    [
        'Toko' => 'Kedua',
        'NamaToko' => $namaToko[1],
        'JenisToko' => 'Elektronik',
        'PemilikToko' => 'Totok AN'
    ],
    [
        'Toko' => 'Ketiga',
        'NamaToko' => $namaToko[2],
        'JenisToko' => 'Fashion',
        'PemilikToko' => 'Wulan'
    ],
];

include('../header.php');
?>

<div class="detail-toko">
    <h4>Detail Toko <?= $_GET['Toko']; ?><br></h4>
    Nama Toko : <b><?= $_GET['NamaToko'] ?></b><br>
    Jenis Toko : <?= $_GET['JenisToko'] ?><br>
    Pemilik Toko : <?= $_GET['PemilikToko'] ?><br>
</div>

<?php 
include('../footer.php') ?>