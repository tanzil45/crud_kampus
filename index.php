<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h3>Data Mahasiswa</h3>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nim']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>