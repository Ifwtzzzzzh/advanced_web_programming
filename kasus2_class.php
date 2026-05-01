<?php 
class Database {
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    public $conn;

    function __construct($a, $b, $c, $d) {
        $this->dbhost = $a;
        $this->dbuser = $b;
        $this->dbpass = $c;
        $this->dbname = $d;
    }

    function connectivityMysql() {
        $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
        echo "Koneksi berhasil!";
    }
}
?>