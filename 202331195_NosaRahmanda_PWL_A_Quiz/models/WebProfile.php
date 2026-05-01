<?php
class WebProfile {
    public $judul;
    public $deskripsi;
    public $warna;

    public function __construct($judul, $deskripsi, $warna) {
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->warna = $warna;
    }

    public function tampilkan() {
        return [
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'warna' => $this->warna
        ];
    }
}