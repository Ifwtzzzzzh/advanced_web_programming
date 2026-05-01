<?php
    // Memanggil controller
    require_once "controllers/MahasiswaController.php";
    // Membuat object controller
    $controller = new MahasiswaController();
    // Mengecek parameter URL (?action=...)
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    // Routing sederhana
    if ($action == 'tambah') {
    $controller->tambah(); // jalankan fungsi tambah
    } else {
    $controller->index(); // default tampil data
    }
?>