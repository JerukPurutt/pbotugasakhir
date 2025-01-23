<?php
require_once 'connect/database.php';
require_once 'model/role_model.php';

class ModelUser {
    private $db;
    private $model_role;

    public function __construct() {
        $this->connectDatabase();
        $this->model_role = new ModelRole();
    }


    public function connectDatabase() {
        $database = new Database(); // Membuat instance dari class Database
        $this->db = $database->connect(); // Mengambil koneksi dari class Database
    }

    public function getAllUser() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);

        $users = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }

    public function createUser($username, $password, $email, $role_name) {
        try {
            $query = "INSERT INTO users (username, password, email, role_name) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ssss", $username, $password, $email, $role_name);
            if ($stmt->execute()) {
                return true;
            }
        } catch (Exception $e) {
            // Tangani exception, misalnya log atau tampilkan pesan kesalahan
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    

    public function updateUser($username, $password, $email, $role_name, $user_id) {
        $query = "UPDATE users SET username = ?, password = ?, email = ?, role_name = ? WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssssi", $username, $password, $email, $role_name, $user_id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    
    public function deleteUser($user_id) {
        foreach($this->getAllUser() as $user){
            if($user['user_id']==$user_id){
                $query = "DELETE FROM users WHERE user_id = ?";
                $stmt = $this->db->prepare($query);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                return true;
            }
        }
       return false;
    }

    public function getUserById($user_id) {
        $query = "SELECT * FROM users WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $role = $this->model_role->getRoleById(1);
            return [
                'user_id' => $row['user_id'],
                'username' => $row['username'],
                'password' => $row['password'],
                'email' => $row['email'],
                'role' => $role,
            ];
        }
        return null;
    }

    public function getUserByName($username) {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $role = $this->model_role->getRoleByName($row['role_name']);
            return [
                'user_id' => $row['user_id'],
                'username' => $row['username'],
                'password' => $row['password'],
                'email' => $row['email'],
                'role' => $role,
            ];
        }
        return null;
    }
}
