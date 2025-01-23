<?php
require_once 'model/reservasi_model.php';
class ReservasiController {
    private $reservasi;
    public function __construct() {
        $this->reservasi = new ModelReservasi();
    }
    public function listReservasi() {
        $user_id = $_SESSION['user']['id'];
        $reservasi = $this->reservasi->getListReservasi($user_id);
        include 'views/user/reservasi_saya.php';
    }
    public function saveReservasi() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_SESSION['user']['id'];
            $paket_id = $_POST['paket_id'];
            $status = $_POST['status'];
            try {
                $this->reservasi->saveReservasi($user_id, $paket_id, $status);
                header("Location: index.php?modul=reservasi&fitur=list");
                exit();
            } catch (Exception $e) {
                echo "<pre>";
                print_r($_SESSION['user']);
                echo "</pre>";

                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Invalid request method.";
        }
    }    
}
?>
