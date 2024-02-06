<?php
$tabel = mysqli_fetch_assoc($result);
?>

<a
    href="./inc/dashboard/detailToko.php?Toko=<?= $tabel['Toko']; ?>&NamaToko=<?= $tabel['NamaToko']; ?>&JenisToko=<?= $tabel['JenisToko']; ?>&PemilikToko=<?= $tabel['PemilikToko']; ?>">
    <?= $tabel['NamaToko']; ?>
</a>

Toko <?= $tabel['Urutan'] ?>mu <br>
Nama Toko : <?= $tabel['Nama'] ?> <br>
Jenis Toko : <?= $tabel['Jenis'] ?> <br>
Pemilik Toko : <?= $tabel['Pemilik'] ?> <br>