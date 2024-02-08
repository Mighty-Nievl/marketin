<?php
$title = 'Dashboard';
include('inc/header.php');

?>

<h4>Dashboad utama</h4>
<p>Berikut daftar toko milikmu</p>
<div class="daftar-toko">
    <?php foreach ($toko as $t) : ?>
        <ul>
            <li>
                <a href="./inc/dashboard/detail.php?id=<?= $t['id']; ?>&nama=<?= $t['nama']; ?>&jenis=<?= $t['jenis']; ?>&pemilik=<?= $t['pemilik']; ?>">
                    <?= $t['nama']; ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</div>

<?php include('inc/footer.php'); ?>