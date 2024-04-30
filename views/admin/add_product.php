<!-- Views/admin/add_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Add Product</h2>
    <form action="../../index.php?controller=AdminController&method=addProduct" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" required>
        </div>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
