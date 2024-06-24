<?php


class User {
    public $conn = null;

    public function __construct()
    {
        $this->conn = connection();
    }
    public function custumer() {
        $sql = "SELECT * FROM `custumers` ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insert_custumer($username, $password, $email, $role, $last_login, $image, $status, $created_time) {
        try{
            $sql = "INSERT INTO `custumers` (username, password, email, role, last_login, image, status, created_time)
            VALUES (:username, :password, :email, :role, :last_login, :image, :status ,:created_time)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':last_login', $last_login);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':created_time', $created_time);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi :" . $e->getMessage();
            return false;
        }    
    }
    public function update_custumer($username, $password, $email, $role, $last_login, $image, $status, $created_time)
    {
        try {
            $sql = "UPDATE `custumers` SET username = :username, password = :password,
            email = :email, role = :role, last_login = :last_login, image=:image, status = :status WHERE id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':last_login', $last_login);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':status', $status);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true; //
            } else {
                return false; // 
            }
        } catch (PDOException $e) {
            echo "Lỗi : " . $e->getMessage();
            return false;
        }
    }

    public function delete_custumer($id) {
        try{
            $sql = "DELETE FROM `custumers` WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi" . $e->getMessage();
            return false;
        }
    }
}