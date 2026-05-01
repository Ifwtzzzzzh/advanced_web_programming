<?php
// Menghubungkan ke model
require_once "models/Mahasiswa.php";
class MahasiswaController {

// Method untuk menampilkan data
    public function index() {
        $model = new Mahasiswa(); // buat object model
        $data = $model->getAll(); // ambil data dari model
        // kirim data ke view
        require "views/mahasiswa_view.php";
    }
    // Method untuk proses tambah data
    public function tambah() {
    // Cek apakah form dikirim dengan method POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari form
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $model = new Mahasiswa();
        // Simpan data ke database
        $model->insert($nama, $jurusan);
        // Redirect ke halaman utama setelah tambah
        header("Location: index.php");
        }
    }
}
?>