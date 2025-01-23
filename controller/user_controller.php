<?php
require_once 'model/user_model.php';
require_once 'model/role_model.php';

class UserController {
    private $model_user;
private $nama_role;

    public function __construct() {
        $this->model_user = new ModelUser();
        $this->nama_role = new ModelRole();
    }

    public function listUser() {
        $users = $this->model_user->getAllUser();
        include 'views/admin/user_list.php';
    }

    public function addUser() {
        // Ambil data role dari model
        $roles = $this->nama_role->getAllRole();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_user = $_POST['username'] ?? null;
            $password_user = $_POST['password'] ?? null;
            $email_user = $_POST['email'] ?? null; // Pastikan input ini ada di form
            $nama_role = $_POST['role_name'] ?? null;
        
            // if ($nama_user && $password_user && $email_user && $nama_role) {
                $this->model_user->createUser($nama_user, $password_user, $email_user, $nama_role);
                header("Location: index.php?modul=user&fitur=list");
                exit;
            // } else {
            //     echo "Semua input harus diisi.";
            // }
        }else{
            include 'views/admin/user_input.php';
        }   
    }
    public function delete($user_id) {
        $this->model_user->deleteUser($user_id);
        header("Location: index.php?modul=user&fitur=list");
    }
    public function edit($user_id) {
        $user = $this->model_user->getUserById($user_id);
        $roles = $this->nama_role->getAllRole();
        include 'views/admin/user_update.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'] ?? null;
            $nama_user = $_POST['username'] ?? null;
            $password_user = $_POST['password'] ?? null;
            $email_user = $_POST['email'] ?? null; 
            $nama_role = $_POST['role_name'] ?? null;
            $this->model_user->updateUser($nama_user, $password_user, $email_user, $nama_role, $user_id);
            header("Location: index.php?modul=user&fitur=list");
        }
        
    }
    
}

?>