<?php
function query($query) {
    $conn = mysqli_connect("localhost", "root", "", "marketin");
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$toko = query('SELECT * FROM data_toko');