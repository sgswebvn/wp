<?php


class Category {
    public $conn = null;

    public function __construct()
    {
        $this->conn = connection();
    }
    public function category() {
        $sql = "SELECT * FROM `categories` ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insert_category($category, $created_time) {
        try{
            $sql = "INSERT INTO `categories` (category, created_time) VALUES (:category, :created_time)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam('created_time', $created_time);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi :" . $e->getMessage();
            return false;
        }    
    }
    public function show_one($id) {
        $sql = "SELECT * FROM `categories` WHERE id = ".$id; 
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function update_category($category)
    {
        try {
            $sql = "UPDATE `categories` SET category = :category WHERE id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category', $category);
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

    public function delete_category($id) {
        try{
            $sql = "DELETE FROM `categories` WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi" . $e->getMessage();
            return false;
        }
    }
}