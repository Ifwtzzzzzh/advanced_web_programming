<?php
require_once "config/database.php";
class Mahasiswa {
    public function getAll() {
        global $conn; 
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        return $result;
    }
    // Fungsi untuk menambahkan data
    public function insert($nama, $jurusan) {
            global $conn;
            $query = "INSERT INTO mahasiswa2(nama, nim, jurusan) VALUES ('$nama', '$jurusan')"; 
            mysqli_query($conn, $query);
    }
}
?>