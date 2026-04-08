<?php 

class Kendaraan {
    public $jenis = "Transportasi Darat";
}

class Mobile extends Kendaraan {
    public $merk;
    private $warna;
    protected $kecepatan;

    function __construct($merk, $warna, $kecepatan) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function getWarna() {
        return $this->warna;
    }
    public function getKecepatan() {
        return $this->kecepatan;
    }
}

$mobil1 = new Mobile("Toyota", "Merah", 120);
echo $mobil1->merk;
echo "\n";
echo $mobil1->getWarna();
echo "\n";
echo $mobil1->getKecepatan();
echo "\n";

$mobil2 = new Mobile("Nissan GTR", "Orange", 150);
echo $mobil2->merk;
echo "\n";
echo $mobil2->getWarna();
echo "\n";
echo $mobil2->getKecepatan();