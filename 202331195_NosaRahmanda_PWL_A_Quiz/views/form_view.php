<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web Builder Sederhana</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header {
        background: #2c3e50;
        color: white;
        padding: 15px;
        text-align: center;
    }

    .container {
        display: flex;
        flex: 1;
    }

    aside {
        width: 320px;
        background: #ecf0f1;
        padding: 25px;
        border-right: 2px solid #bdc3c7;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #bdc3c7;
    }

    #preview-card {
        width: 70%;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        text-align: center;
        background-color: <?=$profileData['warna'] ?? '#ffffff'?>;
    }

    input,
    textarea {
        width: 100%;
        margin-bottom: 15px;
        padding: 8px;
        box-sizing: border-box;
    }
    </style>
</head>

<body>

    <header>
        <h1>Web Profile Builder</h1>
    </header>

    <div class="container">
        <aside>
            <h3>Konfigurasi Profil</h3>
            <form id="profileForm" method="POST" action="index.php">
                <label>Judul Profil:</label>
                <input type="text" name="judul" id="inJudul" placeholder="Masukkan Judul">

                <label>Deskripsi:</label>
                <textarea name="deskripsi" id="inDeskripsi" rows="4" placeholder="Masukkan Deskripsi"></textarea>

                <label>Warna Tema:</label>
                <input type="color" name="warna" id="inWarna" value="<?= $profileData['warna'] ?? '#ffffff' ?>">

                <button type="submit"
                    style="width:100%; padding:10px; background:#2980b9; color:white; border:none; border-radius:5px; cursor:pointer;">
                    Simpan Profil (PHP OOP)
                </button>
            </form>
        </aside>

        <main>
            <div id="preview-card">
                <h1 id="outJudul"><?= $profileData['judul'] ?? 'Nama Anda' ?></h1>
                <p id="outDeskripsi"><?= $profileData['deskripsi'] ?? 'Deskripsi singkat akan muncul secara dinamis.' ?>
                </p>
            </div>
        </main>
    </div>

    <script>
    const inputs = ['inJudul', 'inDeskripsi', 'inWarna'];
    inputs.forEach(id => {
        document.getElementById(id).addEventListener('input', () => {
            const judul = document.getElementById('inJudul').value;
            const desc = document.getElementById('inDeskripsi').value;
            const warna = document.getElementById('inWarna').value;

            document.getElementById('outJudul').innerText = judul || "Nama Anda";
            document.getElementById('outDeskripsi').innerText = desc || "Deskripsi...";
            document.getElementById('preview-card').style.backgroundColor = warna;
        });
    });

    document.getElementById('profileForm').addEventListener('submit', function(event) {
        const judul = document.getElementById('inJudul').value.trim();
        const deskripsi = document.getElementById('inDeskripsi').value.trim();
        if (judul === "" || deskripsi === "") {
            alert("Validasi Gagal: Semua field (kecuali warna) harus diisi!");
            event.preventDefault(); // Mengambil data dari form gagal dikirim jika kosong (B.1)
        }
    });
    </script>
</body>

</html>