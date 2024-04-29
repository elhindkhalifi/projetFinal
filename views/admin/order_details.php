<!-- Views/admin/order_details.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Order Details</h2>
    <table>
        <tr>
            <th>Order Detail ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Unit Price</th>
        </tr>
        <?php foreach ($orderDetails as $orderDetail): ?>
            <tr>
                <td><?php echo $orderDetail['orderDetailID']; ?></td>
                <td><?php echo $orderDetail['productID']; ?></td>
                <td><?php echo $orderDetail['quantite']; ?></td>
                <td><?php echo $orderDetail['prix_unitaire']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
