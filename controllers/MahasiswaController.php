<?php
require_once 'models/Mahasiswa.php'; 
    class MahasiswaController {
        // public function index() {
        //     $model = new Mahasiswa();
        //     $data = $model->getAll(); 
        //     require 'views/index.php'; 
        // }
        
        // public function tambah() {
        //     $model = new Mahasiswa();
        //     $nama = $_POST['nama'];
        //     $nim = $_POST['nim'];
        //     $jurusan = $_POST['jurusan'];
        //     $model->insert($nama, $nim, $jurusan);
        //     header("Location: index.php");
        // }
        
        // public function hapus() {
        //     $model = new Mahasiswa();
        //     $id = $_GET['id']; // ambil id dari URL
        //     $model->delete($id); // hapus data
        //     header("Location: index.php");
        // }

        // NATIVE
        public function index() {
            $model = new Mahasiswa(); 
            $data = $model->getAll(); 
            require "views/mahasiswa_view.php";
        }
        public function tambah() {
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