<?php 
// models/Cart.php

class Cart {
    // Database connection
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public static function getCartItem($userID) {
        $db = new Database();
        $query = "SELECT * FROM panier WHERE userID = ?";
        return $db->query($query, [$userID]);
    }

    public function insertCartItem($userID, $productID, $quantity) {
        $query = "INSERT INTO panier (userID, productID, quantite) VALUES (:userID, :productID, :quantite)";
        $params = array(':userID' => $userID, ':productID' => $productID, ':quantite' => $quantity);
        $this->db->execute($query, $params);
    }

    public function updateCartItem($cartID, $quantity) {
        $query = "UPDATE panier SET quantite = :quantite WHERE cartID = :cartID";
        $params = array(':quantite' => $quantity, ':cartID' => $cartID);
        $this->db->execute($query, $params);
    }

    public function deleteCartItem($cartID) {
        $query = "DELETE FROM panier WHERE cartID = :cartID";
        $params = array(':cartID' => $cartID);
        $this->db->execute($query, $params);
    }

    public function getCartItems($userID) {
        $query = "SELECT p.productID, p.nom, p.prix, c.quantite FROM panier c 
                    INNER JOIN products p ON c.productID = p.productID 
                    WHERE c.userID = :userID";
        $params = array(':userID' => $userID);
        $result = $this->db->query($query, $params);
        return $result;
    }
}
