<?php


class Product {
    public $conn = null;

    public function __construct()
    {
        $this->conn = connection();
    }
    public function product() {
        $sql = "SELECT * FROM `products` ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insert_product($category_id, $name, $price, $quantity, $description, $image, $status, $created_time) {
        try{
            $sql = "INSERT INTO `products` (category_id, name, price, quantity, description, image, status, created_time)
            VALUES (:category_id, :name, :price, :quantity, :description, :image, :status ,:created_time)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':created_time', $created_time);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi :" . $e->getMessage();
            return false;
        }    
    }
    public function update_product($category_id, $name, $price, $quantity, $description, $image, $status, $created_time)
    {
        try {
            $sql = "UPDATE `products` SET category_id = :category_id, created_time = :created_time,
            name = :name, price = :price, quantity = :quantity, description = :description,
            image=:image, status = :status WHERE id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':created_time', $created_time);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':created_time', $created_time);
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

    public function delete_product($id) {
        try{
            $sql = "DELETE FROM `products` WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e) {
            echo "Lỗi" . $e->getMessage();
            return false;
        }
    }
}