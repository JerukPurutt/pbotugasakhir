<?php
require_once 'model/paket_model.php';
require_once 'model/role_model.php';
require_once 'model/user_model.php';
require_once 'model/paket_model.php';
require_once 'model/reservasi_model.php';

try {
    $reservasi = new ModelReservasi();
    echo "<h3>Pengujian Simpan Reservasi</h3>";
    $user_id = 7; // ID user
    $paket_id = 11; // ID paket
    $nama_paket = "Bronze";
    $username = "denis";
    $status = 0; // Contoh status

    $reservasi_id = $reservasi->saveReservasi($user_id, $paket_id, $username, $status);
    if ($reservasi_id) {
        echo "Reservasi berhasil disimpan. ID Reservasi: $reservasi_id<br>";
    } else {
        echo "Reservasi gagal disimpan.<br>";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
//     // Uji ambil semua reservasi berdasarkan user_id
//     echo "<h3>Pengujian Ambil Daftar Reservasi</h3>";
//     $list_reservasi = $reservasi->getListReservasi($user_id);
//     echo "<pre>";
//     print_r($list_reservasi);
//     echo "</pre>";

//     // Uji ambil reservasi berdasarkan user_id
//     echo "<h3>Pengujian Ambil Reservasi Berdasarkan User ID</h3>";
//     $reservasi_by_user = $reservasi->getReservasiById($user_id);
//     echo "<pre>";
//     print_r($reservasi_by_user);
//     echo "</pre>";

//     // Uji hapus reservasi
//     // echo "<h3>Pengujian Hapus Reservasi</h3>";
//     // $delete_result = $reservasi->deleteReservasi($user_id);
//     // if ($delete_result) {
//     //     echo "Reservasi berhasil dihapus untuk user ID $user_id.<br>";
//     // } else {
//     //     echo "Reservasi gagal dihapus untuk user ID $user_id.<br>";
//     // }
//     echo "<h3>Testing generateRandomNumber</h3>";
//     for ($i = 1; $i <= 5; $i++) {
//         $randomNumber = $reservasi->generateRandomNumber(6);
//         echo "Random Number $i: $randomNumber<br>";
//     }
//     // Test validasi kode unik
//     echo "<h3>Testing generateUniqueCode</h3>";
//     for ($i = 1; $i <= 5; $i++) {
//         $uniqueCode = $reservasi->generateUniqueCode(6);
//         echo "Unique Code $i: $uniqueCode<br>";
//     }
// } catch (Exception $e) {
//     echo "Terjadi kesalahan: " . $e->getMessage();
// }
?>
