<?php
$title = 'Dashboard';
include('./inc/header.php');
include('./inc/dashboard/dataToko.php');
?>

<h4>
    Dashboad utama
</h4>

<p>
    Berikut daftar toko milikmu
</p>

<div class="daftar-toko">
    <ul>
        <?php foreach ($toko as $t) : ?>
        <li>
            <a href="./inc/dashboard/detailToko.php?Toko=<?= $t['Toko'] ?>">
                <?= $t['Toko']; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include('inc/footer.php'); ?>