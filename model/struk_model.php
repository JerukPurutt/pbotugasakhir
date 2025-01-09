<?php
require_once 'connect/database.php';
require_once 'model/paket_model.php';

class ModelStruk {
    private $db;
    private $model_paket;

    public function __construct() {
        $this->connectDatabase();
        $this->model_paket = new ModelPaket();
    }

    public function connectDatabase() {
        $database = new Database(); // Membuat instance dari class Database
        $this->db = $database->connect(); // Mengambil koneksi dari class Database
    }

    public function getAllStruk() {
        $query = "SELECT * FROM struk_pembelian";
        $result = $this->db->query($query);

        $struks = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $paket = $this->model_paket->getPaketById($row['paket_id']);
                $struks[] = [
                    'id_struk' => $row['id_struk'],
                    'nama' => $row['nama'],
                    'email' => $row['email'],
                    'paket' => $paket,
                    'tanggal_pembelian' => $row['tanggal_pembelian'],
                    'kode_unik' => $row['kode_unik'],
                ];
            }
        }
        return $struks;
    }

    public function createStruk($nama, $email, $paket_id, $tanggal_pembelian, $kode_unik) {
        $kode_unik = $this->generateKodeUnik();
        $query = "INSERT INTO struk_pembelian (nama, email, paket_id, tanggal_pembelian, kode_unik) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssiss", $nama, $email, $paket_id, $tanggal_pembelian, $kode_unik);

        return $stmt->execute();
    }

    private function generateKodeUnik() {
        // Misalnya, generate kode unik 6 digit angka acak
        return rand(100000, 999999);
    }

    public function updateStruk($nama, $email, $paket_id, $tanggal_pembelian, $kode_unik, $id_struk) {
        $query = "UPDATE struk_pembelian SET nama = ?, email = ?, paket_id = ?, tanggal_pembelian = ?, kode_unik = ? WHERE id_struk = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssissi", $nama, $email, $paket_id, $tanggal_pembelian, $kode_unik, $id_struk);

        return $stmt->execute();
    }

    public function deleteStruk($id_struk) {
        $query = "DELETE FROM struk_pembelian WHERE id_struk = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_struk);
        return $stmt->execute();
    }

    public function getStrukById($id_struk) {
        $query = "SELECT * FROM struk_pembelian WHERE id_struk = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_struk);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $paket = $this->model_paket->getPaketById($row['paket_id']);
            return [
                'id_struk' => $row['id_struk'],
                'nama' => $row['nama'],
                'email' => $row['email'],
                'paket' => $paket,
                'tanggal_pembelian' => $row['tanggal_pembelian'],
                'kode_unik' => $row['kode_unik'],
            ];
        }
        return null;
    }
}
?>
