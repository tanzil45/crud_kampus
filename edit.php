<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");
$data  = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id='$id'");

    if ($update) {
        echo "<script>alert('Data Berhasil Diupdate'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal Update Data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h3>Edit Data Mahasiswa</h3>
    <form method="POST">
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?= $data['nim']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="<?= $data['prodi']; ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>