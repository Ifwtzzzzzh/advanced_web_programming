<?php 
class Database {
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;
    public $conn;

    public function __construct($a, $b, $c, $d) {
        $this->dbHost = $a;
        $this->dbUser = $b;
        $this->dbPass = $c;
        $this->dbName = $d;
    }

    function connectMysql() {
       $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    function addBuku($judul, $pengarang, $penerbit, $thnTerbit) {
        $query = "INSERT INTO buku (judul, pengarang, penerbit, thn_terbit) VALUES ('$judul', '$pengarang', '$penerbit', '$thnTerbit')";
        if ($this->conn->query($query) === TRUE) {
            echo "Data buku berhasil ditambahkan.";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }
}
?>