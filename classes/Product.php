<?php
require_once 'Database.php'; 

class Product extends Database {
    public function getAllProducts() {
        $sql = "SELECT * FROM Produit";
        $stmt = $this->connect()->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$products) {
            echo "Error fetching products: " . $stmt->errorInfo()[2];
        }
     

        return $products;
    }
    public function addProduct($name, $description, $price, $quantity) {
        $sql = "INSERT INTO Produit (nom, description, prix, quantite_en_stock) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $description, $price, $quantity]);
    }

    public function editProduct($productId, $name, $description, $price, $quantity) {
        $sql = "UPDATE Produit SET nom = ?, description = ?, prix = ?, quantite_en_stock = ? WHERE productID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $description, $price, $quantity, $productId]);
    }

    public function getProductById($productId) {
        $sql = "SELECT * FROM Produit WHERE productID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$productId]);
        return $stmt->fetch();
    }

 
}
