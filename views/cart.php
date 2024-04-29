<!-- Views/cart.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Shopping Cart</h2>
    <div class="cart-items">
        <?php if (empty($cartItems)): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($cartItems as $cartItem): ?>
                    <tr>
                        <td><?php echo $cartItem['name']; ?></td>
                        <td><?php echo $cartItem['price']; ?></td>
                        <td>
                            <a href="../index.php?controller=CartController&method=removeFromCart&productId=<?php echo $cartItem['id']; ?>">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <a href="../index.php?controller=HomeController&method=index">Continue Shopping</a>
</body>
</html>
