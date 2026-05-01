<?php
require_once 'controllers/MahasiswaController.php';
    $controller = new MahasiswaController();
    $aksi = $_GET['aksi'] ?? '';
    if ($aksi == 'tambah') {
        $controller->tambah(); 
    } elseif ($aksi == 'hapus') {
        $controller->hapus();
    } else {
        $controller->index();
    }
?>