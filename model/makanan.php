<?php

class Makanan {
    public $nama = "Semangka";
    private $jenis = "Penucui Mulut";
    protected $harga = 15000;

    public function getJenis() {
        return $this->jenis;
    }
}

$makanan1 = new Makanan();
echo $makanan1->nama;
echo "\n";
// echo $makanan1->jenis;
echo $makanan1->getJenis();
echo "\n";
// echo $makanan1->harga;

class Buah extends Makanan {
    public function getHarga() {
        return $this->harga;
    }
}

$buah1 = new Buah();
echo $buah1->getHarga();