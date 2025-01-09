<?php
require_once 'model/user_model.php';

class LoginController
{
    private $modelUser;

    public function __construct()
    {
        $this->modelUser = new ModelUser();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;
            // echo $username;
            // echo "<br>";
            // echo $password;
    
            if ($username && $password) {
                $user = $this->modelUser->getUserByName($username);
                // echo"<pre>";
                // print_r($user);
                // echo"</pre>";
                if ($user && $user['password'] === $password) {
                    // Simpan informasi pengguna di session
                    $_SESSION['user'] = $user;
                    // echo"<pre>";
                    // print_r($_SESSION['user']);
                    // echo"</pre>";
    
                    // Pengkondisian berdasarkan role
                    if ($user['role']['role_name'] === 'user') {
                        include 'views/user/landing_pages.php';
                    } elseif ($user['role']['role_name'] === 'admin') {
                        echo "admin";
                        include 'views/admin/dashboard.php';
                    } elseif($user['role']['role_name'] === 'kasir') {
                        header("Location: index.php?modul=kurir&fitur=list");
                    } else {
                        $error = "Role tidak dikenali.";
                    }
                    exit;
                } else {
                    $error = "Username atau password salah.";
                }
            } else {
                $error = "Harap isi semua kolom.";
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