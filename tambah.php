<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')");

    if ($simpan) {
        echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal Menyimpan Data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h3>Tambah Data Mahasiswa</h3>
    <form method="POST">
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Contoh: 2023001" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" placeholder="Contoh: Teknik Informatika" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>