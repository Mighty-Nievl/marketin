<?php
$conn = mysqli_connect("localhost", "root", "", "marketin");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$toko = query('SELECT * FROM data_toko');