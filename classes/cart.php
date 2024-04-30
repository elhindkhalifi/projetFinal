<?php 
// models/Cart.php

class Cart extends Database {
    public function getCartItem($userID) {
        $pdo = $this->connect();

        $stmt = $pdo->prepare("SELECT p.*, c.quantite FROM panier c JOIN produits p ON c.productID = p.productID WHERE c.userID = ?");
        $stmt->execute([$userID]);
        $cartItems = $stmt->fetchAll();

        return $cartItems;
    }

    public function addToCart($userID, $productID) {
        $pdo = $this->connect();
        
        $stmt = $pdo->prepare("INSERT INTO panier (userID, productID, quantite) VALUES (?, ?, 1)");
        $stmt->execute([$userID, $productID]);
    }

    public function removeFromCart($userID, $productID) {
        $pdo = $this->connect();

        $stmt = $pdo->prepare("DELETE FROM panier WHERE userID = ? AND productID = ?");
        $stmt->execute([$userID, $productID]);
    }
}

