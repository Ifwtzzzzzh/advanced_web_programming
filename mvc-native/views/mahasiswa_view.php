<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <title>Data Mahasiswa</title>
    <h2>Data Mahasiswa</h2>
    <!-- Form input data -->
    <form method="POST" action="index.php?action=tambah">
        Nama: <input type="text" name="nama" required> <!-- input nama -->
        Jurusan: <input type="text" name="jurusan" required>
        <!-- input jurusan -
->
<button type="submit">Tambah</button>
</form>
<br>
<!-- Tabel menampilkan data -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
            <?php if (isset($data)): ?> <?php while($row = $data->fetch_assoc()): ?> <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td>
                    <a href="?aksi=hapus&id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?> <?php else: ?>
            <tr>
                <td colspan="3">Data not provided by Controller.</td>
            </tr>
            <?php endif; ?>
        </table>
</body>

</html>