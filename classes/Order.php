<?php
class Order extends Database {
    public function getOrders() {
        $sql = "SELECT * FROM Commande";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }
    
}
