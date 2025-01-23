<?php
require_once 'model/user_model.php';
require_once 'model/paket_model.php';

class LoginController
{
    private $modelUser;
    public $modelPaket;
    public function __construct()
    {
        $this->modelUser = new ModelUser();
        $this->modelPaket = new ModelPaket();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;
            // echo $username;
            // echo "<br>";
            // echo $password;
    
                $user = $this->modelUser->getUserByName($username);
                // echo"<pre>";
                // print_r($user);
                // print_r($password);
                // echo"</pre>";
                // die();
                if ($username && $user['password'] == $password) {
                    // Simpan informasi pengguna di session
                    $_SESSION['user'] = [
                        'id' => $user['user_id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        // 'role' => $user['role_name']
                    ];
                    // echo"<pre>";
                    // print_r($_SESSION['user']);
                    // echo"</pre>";
                    // Pengkondisian berdasarkan role
                    if ($user['role']['role_name'] === 'user') {
                        $pakets = $this->modelPaket->getAllPaket();
                        include 'views/user/landing_pages.php'; 
                    } elseif ($user['role']['role_name'] === 'admin') {
                        include 'views/admin/dashboard.php';
                    } elseif($user['role']['role_name'] === 'kasir') {
                        include 'views/kasir/kasir.php';;
                    } else {
                        $error = "Role tidak dikenali.";
                    }
                    exit;
                } else {
                    $error = "Username atau password salah.";

                    header('location: index.php?modul=login&fitur=login');
                }
            
        }
    
        include 'views/login.php';
    }

    public function logout() {
        unset($_SESSION['user']);
        header("Location: index.php?modul=login&fitur=login");
        exit();
        
    }

    public function register()
    {
        $error = null;
        $success = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? null;
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;
            $role = 'user'; // Role fixed sebagai 'customer'

            if ($username && $password) {
                // Validasi jika username sudah ada
                $existingUser = $this->modelUser->getUserByName($username);
                if ($existingUser) {
                    $error = "Username sudah digunakan, coba yang lain.";
                } else {
                    // Tambahkan user ke database
                    $this->modelUser->createUser($username, $password,$email,$role);
                    $success = "Pendaftaran berhasil! Silakan login.";
                    header("Location: index.php?modul=login&fitur=login");
                }
            } else {
                $error = "Harap isi semua kolom.";
            }
        }

        include 'views/register.php'; // Tampilkan halaman register
    }
    
    
    
}