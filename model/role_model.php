<?php
require_once 'connect/database.php';

class ModelRole{
    private $db;

    public function __construct(){
        $this->connectDatabase();
    }
    public function connectDatabase() {
        $database = new Database(); // Membuat instance dari class Database
        $this->db = $database->connect(); // Mengambil koneksi dari class Database
    }
        public function getAllRole(){
            $query = "SELECT * FROM roles";
            $result = $this->db->query($query);

            $role = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $role[] = $row;
            }
        }
        return $role;
        }

        public function createRole($role_name, $role_status){
            $query = "INSERT INTO roles (role_name, role_status) VALUES (?,?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $role_name, $role_status);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        public function updateRole( $role_id,$role_name, $role_status){
            $query = "UPDATE roles SET role_name = ?, role_status = ? WHERE role_id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ssi", $role_name, $role_status, $role_id);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }


        public function deleteRole($role_id){
            foreach($this->getAllRole() as $role) {
                if ($role['role_id'] == $role_id) {
                    $query = "DELETE FROM roles WHERE role_id = ?";
                    $stmt = $this->db->prepare($query);
                    $stmt->bind_param("i", $role_id);
                    $stmt->execute();
                    return true;
                }
            }
            return false;
        }

        public function getRoles(){
            return $this->db->query("SELECT * FROM roles");
        }

        public function getRoleById($role_id){
            foreach($this->getRoles() as $role) {
                if ($role['role_id'] == $role_id) {
                    return $role;
                }
            }
            return null;
        }

        public function getRoleByName($role_name){
            foreach($this->getRoles() as $role) {
                if ($role['role_name'] == $role_name) {
                    return $role;
                }
            }
            return null;
        }
}
?>