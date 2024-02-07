<?php
// koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "marketin");

// Ambil data dari Database / query data toko
$result = mysqli_query($conn, "SELECT * FROM data_toko");