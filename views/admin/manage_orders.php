<!-- Views/admin/manage_orders.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Manage Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['orderID']; ?></td>
                <td><?php echo $order['userID']; ?></td>
                <td><?php echo $order['date_commande']; ?></td>
                <td><?php echo $order['statut']; ?></td>
                <td><a href="index.php?controller=OrderController&method=viewOrderDetails&orderId=<?php echo $order['orderID']; ?>">View Details</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
