<?php
$nama_user = isset($_GET['nama']) ? $_GET['nama'] : "Mahasiswa";
$nama_dosen = "Ajay Supriadi, M.Kom";
$mahasiswa = [
    ["nama" => "Budi Santoso", "nim" => "12345"], 
    ["nama" => "Siti Aminah", "nim" => "12346"],
    ["nama" => "Andi Wijaya", "nim" => "12347"], 
    ["nama" => "Rina Pratama", "nim" => "12348"],
    ["nama" => "Eko Prasetyo", "nim" => "12349"],
    ["nama" => "Siska Putri", "nim" => "12350"], 
    ["nama" => "Nosa Rahmanda", "nim" => "12351"],
    ["nama" => "Ramadhina Cahya Hartanti", "nim" => "12352"], 
    ["nama" => "Ramadhini Cahya Hartanti", "nim" => "12353"], 
    ["nama" => "Sherlock Holmes", "nim" => "12354"],
    ["nama" => "Sir Arthur Conan Doyle", "nim" => "12349"],
];

$waktu_sekarang = date("d-m-Y H:i:s");
$jumlah_mhs = count($mahasiswa);
$bg_color = ($jumlah_mhs > 5) ? "red" : "white";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Halaman Dinamis - Tugas Mandiri</title>
    <style>
    body {
        font-family: sans-serif;
        margin: 20px;
    }

    table {
        background-color: <?php echo $bg_color;
        ?>;
        border-collapse: collapse;
        width: 50%;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    .info-waktu {
        color: #555;
        margin-top: 20px;
    }
    </style>
</head>

<body>

    <h1>Selamat Datang, <?= htmlspecialchars($nama_user); ?>!</h1>
    <h2>Daftar Mahasiswa (Dinamis)</h2>
    <p>Dosen Pengampu: <strong><?php echo $nama_dosen; ?></strong></p>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nama']; ?></td>
                <td><?= $m['nim']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="info-waktu">
        <p>Total Mahasiswa saat ini: <strong><?= $jumlah_mhs; ?></strong></p>
        <p>Data di-generate pada: <strong><?= $waktu_sekarang;?></strong></p>
        <p><em>(Refresh halaman untuk melihat waktu berubah secara otomatis)</em></p>
    </div>
</body>

</html>