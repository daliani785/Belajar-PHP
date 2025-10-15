<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Identitas Siswa</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<?php
include 'config.php'
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <h3 class="card-title text-center mb-4">Form Identitas Siswa</h3>
          
          <!-- form inputan -->
          <form method="post" action="proses.php">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>

            <div class="mb-3">
              <label for="umur" class="form-label">Umur</label>
              <input type="number" class="form-control" id="umur" name="umur" min="5" max="100" required>
            </div>

            <div class="mb-3">
              <label for="alamt" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="mb-3">
              <label for="sekolah" class="form-label">Sekolah</label>
              <input type="text" class="form-control" id="sekolah" name="sekolah" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Simpan</button>
          </form>

          <!-- hasil insert -->
          <div class="mt-3">
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
