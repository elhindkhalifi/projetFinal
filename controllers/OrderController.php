<?php
class OrderController {
    public function viewOrders() {
        // Load orders from the database
        $orderModel = new Order();
        $orders = $orderModel->getOrders();

        // Load the view
        require_once 'Views/admin/manage_orders.php';
    }

    public function viewOrderDetails($orderId) {
        // Load order details from the database
        $orderDetailModel = new OrderDetail();
        $orderDetails = $orderDetailModel->getOrderDetailsByOrderId($orderId);

        // Load the view
        require_once 'Views/admin/order_details.php';
    }
}
