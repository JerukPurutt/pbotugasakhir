<?php
require_once 'Connect/Database.php';

class ModelReservasi {
    private $db;

    public function __construct() {
        $this->connectDatabase();
    }
    public function connectDatabase() {
        $database = new Database(); // Koneksi database
        $this->db = $database->connect();
    }
    // Simpan reservasi
    public function saveReservasi($user_id, $id_paket,$status) {
        // Generate kode unik
        $kode_unik = $this->generateUniqueCode(6);
        // Insert into reservasi table
        $query = "INSERT INTO reservasi (user_id, id_paket, status, kode_unik) 
                  VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iiii", $user_id, $id_paket, $status, $kode_unik);
    
        if ($stmt->execute()) {
            return $this->db->insert_id;
        }
        throw new Exception("Gagal menyimpan reservasi: " . $this->db->error);
    }
    
    public function getListReservasi($user_id) {
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
            WHERE r.user_id = ?
        ";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function generateUniqueCode($length = 6) {
        $isUnique = false;
        $uniqueCode = '';

        while (!$isUnique) {
            // Generate kode unik
            $uniqueCode = $this->generateRandomNumber($length);

            // Cek apakah kode sudah ada di database
            $query = "SELECT COUNT(*) AS count FROM reservasi WHERE kode_unik = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $uniqueCode);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if ($row['count'] == 0) {
                $isUnique = true; // Jika kode belum ada, maka kode valid
            }
        }
        return $uniqueCode;
    }

    function generateRandomNumber($length = 6) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomCode = '';

        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomCode;
    }

    public function getReservasiById($user_id) {
        $query = "SELECT * FROM reservasi WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); // Mengembalikan array data reservasi
    }

    public function deleteReservasi($user_id) {
        $query = "DELETE FROM reservasi WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $user_id);
        return $stmt->execute();
    }

    private function updatePaketStok($id_paket, $quantity) {
        $query = "UPDATE paket_gym SET stok = stok + ? WHERE id_paket = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $quantity, $id_paket);
        return $stmt->execute();
    }
}
?>
