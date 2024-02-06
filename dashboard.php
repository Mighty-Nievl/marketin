<?php
$title = 'Dashboard';

include('./inc/header.php');
include('./inc/dashboard/dataToko.php');
?>

<h4>Dashboad utama</h4>

<p>Berikut daftar toko milikmu</p>

<div class="daftar-toko">
    <?php foreach($toko as $t) : ?>
    <ul>
        <li>
            <a
                href="./inc/dashboard/detailToko.php?Toko=<?= $t['Toko']; ?>&NamaToko=<?= $t['NamaToko']; ?>&JenisToko=<?= $t['JenisToko']; ?>&PemilikToko=<?= $t['PemilikToko']; ?>">
                <?= $t['NamaToko']; ?>
            </a>
        </li>
    </ul>
    <?php endforeach; ?>
</div>

<?php include('inc/footer.php'); ?>