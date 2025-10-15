<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah'];

    $sql = "INSERT INTO tbidentitas(nama, kelas, umur, alamat, sekolah) VALUE ('$nama', '$kelas', '$umur', '$alamat', '$sekolah')";
    $result = mysqli_query($koneksi, $sql);

    mysqli_close($koneksi);

    //redirec ke halaman index.php
    header("location: view-data.php");
    exit();
}
    
?>