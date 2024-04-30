<!-- Views/admin/manage_products.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Manage Products</h2>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['productID']; ?></td>
                <td><?php echo $product['nom']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['prix']; ?></td>
                <td><?php echo $product['quantite_en_stock']; ?></td>
                <td>
                    <a href="views/admin/edit_product.php">Edit</a> | 
                    <a href="../../index.php?controller=AdminController&method=deleteProduct&productId=<?php echo $cartItem['productID']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
