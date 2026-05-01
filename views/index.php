<!DOCTYPE html>
<html>

<body>
    <h2>Data Mahasiswa I</h2>
    <!-- Form tambah data -->
    <form method="POST" action="?aksi=tambah">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="nim" placeholder="NIM">
        <input type="text" name="jurusan" placeholder="Jurusan">
        <button type="submit">Tambah</button>
    </form>
    <hr>
    <!-- Tabel data -->
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
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