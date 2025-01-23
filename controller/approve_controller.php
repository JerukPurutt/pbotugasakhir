<?php
require_once 'model/approve_model.php';
 // Pastikan autoload Composer di-load
class ApproveController {
    private $model;
    public function __construct() {
        $this->model = new ModelApprove();
    }
    public function listReservasi() {
        $reservasi = $this->model->getListApprove();
        include 'views/admin/reservasi_list.php';
    }
    // Menampilkan daftar reservasi
    // public function listAllApprove() {
    //     $reservasi = $this->model->getAllReservasi();
    
    //     // Ambil filter dari request (GET)
    //     $filterStatus = $_GET['status'] ?? null;
    //     $filterNamaPaket = $_GET['nama_paket'] ?? null;

    //     // Terapkan filter status
    //     if ($filterStatus !== null && $filterStatus !== '') {
    //         $reservasi = array_filter($reservasi, function ($item) use ($filterStatus) {
    //             return (string) $item['status'] === $filterStatus;
    //         });
    //     }
    
    //     // Terapkan filter nama paket
    //     if ($filterNamaPaket) {
    //         $reservasi = array_filter($reservasi, function ($item) use ($filterNamaPaket) {
    //             return isset($item['nama_paket']) && is_string($item['nama_paket']) && stripos($item['nama_paket'], $filterNamaPaket) !== false;
    //         });
    //     }

    //     // Kirim data ke view
    //     include 'views/admin/reservasi_list.php';
    // }

    // Fungsi untuk menambahkan reservasi baru
    public function addReservasi() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_reservasi = $_POST['user_reservasi'];
            $user_id = $_POST['user_id'];
            $username = $_POST['username'];
            $nama_paket = $_POST['nama_paket'];
            $harga_paket = $_POST['harga_paket'];
            $status = $_POST['status'];

            // Insert data ke tabel reservasi
            $query = "INSERT INTO reservasi (user_reservasi, user_id, username, nama_paket, harga_paket, status) 
                      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->model->db->prepare($query);
            $stmt->bind_param("sisssi", $user_reservasi, $user_id, $username, $nama_paket, $harga_paket, $status);
            $stmt->execute();

            // Ambil id_reservasi yang baru saja dimasukkan
            $id_reservasi = $this->model->db->insert_id;

            // Insert data ke tabel detail_reservasi
            $query_detail = "INSERT INTO detail_reservasi (id_transaksi, id_paket, user_id, create_at) 
                             VALUES (?, ?, ?, NOW())";
            $stmt_detail = $this->model->db->prepare($query_detail);
            $stmt_detail->bind_param("iii", $id_reservasi, $id_paket, $user_id);
            $stmt_detail->execute();

            // Redirect ke halaman list setelah insert
            header("Location: index.php?modul=reservasi&fitur=list");
            exit;
        }

        // Menampilkan form untuk menambah reservasi baru
        include 'Views/admin/add_reservasi.php';
    }

    // Fungsi untuk mengedit reservasi
    public function editReservasi($id_reservasi) {
        $reservasi = $this->model->getReservasiById($id_reservasi);

        include 'Views/admin/edit_reservasi.php';
    }

    // Fungsi untuk update status reservasi
    public function updateStatus() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST['status'] as $id_reservasi => $status) {
                $this->model->updateReservasi($id_reservasi, $status);
            }
            header("Location: index.php?modul=approve&fitur=list");
            exit;
        }
    }
    

    // Fungsi untuk mencetak laporan reservasi
    public function printReport() {
        $reservasi = $this->model->getAllReservasi();

        // Gunakan Dompdf untuk mencetak laporan
        ob_start();
        include 'Views/admin/print_report.php'; // Pastikan template sudah sesuai
        $html = ob_get_clean();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Kirim file PDF ke browser
        $dompdf->stream("laporan_reservasi.pdf", ["Attachment" => false]);
        exit;
    }
}
?>
