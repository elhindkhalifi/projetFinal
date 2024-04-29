<?php
class OrderDetail extends Database {
    public function getOrderDetailsByOrderId($orderId) {
        $sql = "SELECT * FROM Detail_de_la_commande WHERE orderID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$orderId]);
        return $stmt->fetchAll();
    }
}
