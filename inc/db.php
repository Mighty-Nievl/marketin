<?php
// koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "marketin");

// Ambil data dari Database / query data toko
$result = mysqli_query($conn, "SELECT * FROM data_toko");

// Ambil data (fetch) toko dari object result
// mysqli_fetch_row() => Mengembalikan arrray numeric
// mysqli_fetch_assoc() => Mengembalikan arrray associative
// mysqli_fetch_array() => Mengembalikan array num dan assoc
// mysqli_fetch_object() => 

// while ($dtoko = mysqli_fetch_assoc($result)) {
//     print_r($dtoko['Nama Toko']);
//     print_r(' ');
// }

