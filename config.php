<?php
// koneksi database
$koneksi = mysqli_connect("localhost", "root", "root", "dbidentitas");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>