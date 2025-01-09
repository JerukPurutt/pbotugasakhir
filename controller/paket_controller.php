<?php
require_once 'model/paket_model.php';

class PaketController {
    private $paket;

    public function __construct() {
        $this->paket = new ModelPaket();
    }

    public function listPaket() {
        $pakets = $this->paket->getAllPaket();
            include 'views/admin/paket_list.php'; // View untuk admin
    }

    public function addPaket() {
        // Pastikan metode ini tidak menerima argumen
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_paket   = $_POST['nama_paket'] ?? null;
            $stok         = $_POST['stok'] ?? null;
            $harga_paket  = $_POST['harga_paket'] ?? null;
            $durasi       = $_POST['durasi'] ?? null;
            $gambar_paket = $_FILES['gambar_paket']['name'] ?? null;
        //    var_dump($gambar_paket);
            if (!empty($gambar_paket)) {
                $targetDir = "gambar/";
                $targetFile = $targetDir . basename($gambar_paket);
                move_uploaded_file($_FILES["gambar_paket"]["name"], $targetFile);
            }
            // Simpan data
            $this->paket->createPaket($nama_paket, $stok, $harga_paket,$durasi,$gambar_paket);
            // Redirect ke halaman daftar paket
            header("Location: index.php?modul=paket&fitur=list");
            exit;
            } else {
            // Jika bukan POST, tampilkan form input
            include 'views/admin/paket_input.php';
        }
    }

    public function delete($id_paket) {
        $this->paket->deletePaket($id_paket);
        header("Location: index.php?modul=paket&fitur=list");
    }

    public function edit($id_paket) {  
        $paket = $this->paket->getPaketById($id_paket);
        // echo "<pre>";
        // print_r($paket);
        // echo "</pre>";
        include 'views/admin/paket_update.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_paket     = $_POST['id_paket'] ?? null;
            $nama_paket   = $_POST['nama_paket'] ?? null;
            $stok         = $_POST['stok'] ?? null;
            $harga_paket  = $_POST['harga_paket'] ?? null;
            $durasi       = $_POST['durasi'] ?? null;
            $gambar_paket = $_FILES['gambar_paket']['name'] ?? null;
    
            $existingPaket = $this->paket->getPaketById($id_paket);
    
            if (!empty($gambar_paket)) {
                $targetDir = "gambar/";
                $targetFile = $targetDir . basename($gambar_paket);
                $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    
                if (in_array(strtolower($fileType), $allowedTypes)) {
                    if (!move_uploaded_file($_FILES['gambar_paket']['tmp_name'], $targetFile)) {
                        echo "Gagal mengunggah gambar.";
                        return;
                    }
                } else {
                    echo "Format file tidak diperbolehkan.";
                    return;
                }
            } else {
                $gambar_paket = $existingPaket['gambar_paket'];
            }
    
            if ($this->paket->updatePaket($id_paket, $nama_paket, $stok, $harga_paket, $durasi, $gambar_paket)) {
                header("Location: index.php?modul=paket&fitur=list");
                exit;
            } else {
                echo "Update paket gagal.";
            }
        }
    }
    
}
?>