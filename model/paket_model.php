<?php
require_once 'connect/database.php';
class ModelPaket {
    private $db;

    public function __construct() {
        $this->connectDatabase();
    }

    public function connectDatabase() {
        $database = new Database(); // Membuat instance dari class Database
        $this->db = $database->connect(); // Mengambil koneksi dari class Database
    }
    
    public function getAllPaket() {
        $query = "SELECT * FROM paket_gym"; // Ambil semua data paket gym
        $result = $this->db->query($query);

        $paket = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $paket[] = [
                    'id_paket'     => $row['id_paket'],
                    'nama_paket'   => $row['nama_paket'],
                    'stok'         => $row['stok'],
                    'harga_paket'  => $row['harga_paket'],
                    'durasi'       => $row['durasi'],
                    'gambar_paket' => $row['gambar_paket'],
                ];
            }
        }
        return $paket; // Kembalikan hasil berupa array
    }

    public function createPaket($nama_paket, $stok, $harga_paket, $durasi,$gambar_paket) {
        $query = "INSERT INTO paket_gym (nama_paket, stok, harga_paket, durasi,gambar_paket) VALUES (?, ?, ?, ?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("siiis", $nama_paket, $stok, $harga_paket, $durasi,$gambar_paket);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updatePaket($id_paket, $nama_paket, $stok, $harga_paket, $durasi, $gambar_paket) {
        $query = "UPDATE paket_gym SET nama_paket = ?, stok = ?, harga_paket = ?, durasi = ?, gambar_paket = ? WHERE id_paket = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("siiisi", $nama_paket, $stok, $harga_paket, $durasi, $gambar_paket, $id_paket);
    
        return $stmt->execute();
    }
    
    
    public function deletePaket($id_paket) {
        $query = "DELETE FROM paket_gym WHERE id_paket = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_paket);
        return $stmt->execute();
    }

    public function getPaketById($id_paket) {
        $query = "SELECT * FROM paket_gym WHERE id_paket = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_paket);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return [
                'id_paket' => $row['id_paket'],
                'nama_paket' => $row['nama_paket'],
                'stok' => $row['stok'],
                'harga_paket' => $row['harga_paket'],
                'durasi' => $row['durasi'],
                'gambar_paket' => $row['gambar_paket']
            ];
        }
        return null;
    }

    public function getPaketByName($nama_paket) {
        $query = "SELECT * FROM paket_gym WHERE nama_paket = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $nama_paket);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return [
                'id_paket' => $row['id_paket'],
                'nama_paket' => $row['nama_paket'],
                'stok' => $row['stok'],
                'harga_paket' => $row['harga_paket'],
                'durasi' => $row['durasi']
            ];
        }
        return null;
    }
}
?>
