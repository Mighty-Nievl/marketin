<?php
$title = 'Dashboard';
include('inc/header.php');
include('../marketin/inc/dashboard/dataToko.php');
?>

<h4>
    Dashboad utama
</h4>

<p>
    Berikut daftar toko milikmu
</p>

<div class="daftar-toko">
    <ul>
        <?php foreach ($daftarToko as $dt) : ?>
            <li>
                <a href="">
                    <?= $dt; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>




<?php include('inc/footer.php'); ?>