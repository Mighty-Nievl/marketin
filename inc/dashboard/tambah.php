<?php
$title = 'Tambah Data Toko';
require('../header.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $pemilik = $_POST['pemilik'];

    $query = "INSERT INTO data_toko VALUES ('', '$nama', '$jenis', '$pemilik') ";
    mysqli_query($conn, $query);
}
?>

<h4>Tambah Data Toko</h4>
<div class="tambah-toko">
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Tuliskan nama Toko yang ingin ditambahkan">
            </li>
            <li>
                <label for="jenis">Jenis</label>
                <input type="text" name="jenis" id="jenis" placeholder="Tuliskan jenis tokonya">
            </li>
            <li>
                <label for="pemilik">Pemilik</label>
                <input type="text" name="pemilik" id="pemilik" placeholder="Tuliskan nama pemilik tokonya">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</div>

<?php require('../footer.php') ?>