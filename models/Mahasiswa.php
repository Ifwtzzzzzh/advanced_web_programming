<?php
    require_once 'config/database.php';
    class Mahasiswa {
    //     public function getAll() {
    //         global $conn;
    //         return mysqli_query($conn, "SELECT * FROM mahasiswa");
    //     }

    //     public function insert($nama, $nim, $jurusan) {
    //         global $conn;
    //         $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')"; 
            
    //         mysqli_query($conn, $query);
    //     }
        
    //     public function delete($id) {
    //     global $conn;
    //     mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
    // }

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