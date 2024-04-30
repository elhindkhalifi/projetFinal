<!-- Views/admin/edit_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Edit Product</h2>
    <form action="../../index.php?controller=AdminController&method=editProduct&productId=<?php echo $productId;?>" method="POST">
        <input type="hidden" name="productId" value="<?php echo $productId; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $product['prix']; ?>" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="<?php echo $product['quantite']; ?>" min="0" required>
        </div>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
