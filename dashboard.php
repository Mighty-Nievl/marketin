<?php
$title = 'Dashboard';
include('inc/header.php');
?>

<h4>Dashboad utama</h4>
<p>Berikut daftar toko milikmu</p>
<div class="daftar-toko">
    <?php while( $tabel = mysqli_fetch_assoc($result) ) : ?>
    <ul>
        <li>
            <a
                href="./inc/dashboard/detail.php?id=<?= $tabel['id']; ?>&Urutan=<?= $tabel['Urutan']; ?>&Nama=<?= $tabel['Nama']; ?>&Jenis=<?= $tabel['Jenis']; ?>&Pemilik=<?= $tabel['Pemilik']; ?>">
                <?= $tabel['Nama']; ?>
            </a>
        </li>
    </ul>
    <?php 
    endwhile; 
?>
</div>

<?php include('inc/footer.php'); ?>