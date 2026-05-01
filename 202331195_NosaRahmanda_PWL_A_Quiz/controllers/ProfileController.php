<?php
require_once 'models/WebProfile.php';

class ProfileController {
    public function index() {
        $profileData = null;
        $obj1 = new WebProfile("Sample 1", "Deskripsi 1", "#ff0000");
        $obj2 = new WebProfile("Sample 2", "Deskripsi 2", "#00ff00");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile = new WebProfile(
                $_POST['judul'], 
                $_POST['deskripsi'], 
                $_POST['warna']
            );
            $profileData = $profile->tampilkan();
        }
        include 'views/form_view.php';
    }
}