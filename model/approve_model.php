<?php
require_once 'Connect/Database.php';

class ModelApprove {
    private $db;
    public function __construct() {
        $this->connectDatabase();
    }
    public function connectDatabase() {
        $database = new Database(); // Membuat instance dari class Database
        $this->db = $database->connect(); // Mengambil koneksi dari class Database
    }
    // Mendapatkan semua reservasi
    public function getListApprove() {
        $query = "
            SELECT 
                r.id_reservasi, 
                r.user_id,
                r.id_paket,
                r.status,
                r.kode_unik,
                p.nama_paket,
                p.harga_paket,
                u.username
            FROM reservasi r
            JOIN paket_gym p ON r.id_paket = p.id_paket
            JOIN users u ON r.user_id = u.user_id
        ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    // Update status reservasi
    public function updateReservasi($id_reservasi, $status) {
        $query = "UPDATE reservasi SET status = ? WHERE id_reservasi = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $status, $id_reservasi);
        $stmt->execute();
    }

    // Mendapatkan reservasi berdasarkan ID
    public function getReservasiById($id_reservasi) {
        $query = "SELECT * FROM reservasi WHERE id_reservasi = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id_reservasi);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
}
?>
