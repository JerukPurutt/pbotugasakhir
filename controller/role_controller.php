<?php
require_once 'model/role_model.php';

class RoleController {
    private $model_role;

    public function __construct(){
        $this->model_role = new ModelRole(); // Pastikan nama kelas konsisten
    }

    public function listRole(){ // Memperbaiki nama metode agar sesuai dengan 'role'
        $roles = $this->model_role->getAllRole(); // Memperbaiki referensi objek

        include 'views/admin/role_list.php';
    }

    public function addRole() { 
        // Pastikan metode ini tidak menerima argumen
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $role_name = $_POST['role_name'] ?? null;
            $role_status = $_POST['role_status'] ?? null;

            // Simpan data
            $this->model_role->createRole($role_name, $role_status);

            // Redirect ke halaman daftar role
            header("Location: index.php?modul=role&fitur=list");
            exit;
        } else {
            // Jika bukan POST, tampilkan form input
            include 'views/admin/role_input.php';
        }
    }

    public function delete($role_id) {
        $this->model_role->deleteRole($role_id);
        header("Location: index.php?modul=role&fitur=list");
    }

    public function edit($role_id) {
        $role = $this->model_role->getRoleById($role_id);
        include 'views/admin/role_update.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $role_id = $_POST['role_id'] ?? null;
            $role_name = $_POST['role_name'] ?? null;
            $role_status = $_POST['role_status'] ?? null;
            $this->model_role->updateRole($role_id, $role_name, $role_status);
            header("Location: index.php?modul=role&fitur=list");
        }
    }

    
}
?>