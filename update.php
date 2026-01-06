<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbidentitas WHERE id='$id'");
    $siswa = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $sekolah = $_POST['sekolah'];

        mysqli_query($koneksi, "UPDATE tbidentitas 
        SET nama='$nama', kelas='$kelas', umur='$umur', alamat='$alamat', sekolah= '$sekolah'
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Data Siswa</h2>

        <form method="post">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($siswa['nama']); ?>" required>

            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= htmlspecialchars($siswa['kelas']); ?>" required>

            <label>Umur</label>
            <input type="number" name="umur" value="<?= htmlspecialchars($siswa['umur']); ?>" required>

            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($siswa['alamat']); ?>" required>

            <label>Sekolah</label>
            <input type="text" name="sekolah" value="<?= htmlspecialchars($siswa['sekolah']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>