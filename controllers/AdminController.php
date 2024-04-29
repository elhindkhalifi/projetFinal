<?php
require_once 'models/Product.php';
class AdminController {
    public function manageUsers() {
        // Load users from the database
        $userModel = new User();
        $users = $userModel->getUsers();

        // Load the manage users view
        require_once 'Views/admin/manage_users.php';
    }
    public function manageProducts() {
        // Load products from the database
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // Load the manage products view
        require_once 'Views/admin/manage_products.php';
    }
    public function addProduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
    
            // Insert into database (you need to implement this)
            $productModel = new Product();
            $productModel->addProduct($name, $description, $price, $quantity);
    
            // Redirect to manage products page
            header("Location: index.php?controller=AdminController&method=manageProducts");
            exit;
        }
    
        // Load the add product form view
        require_once 'Views/admin/add_product.php';
    }
    
    public function editProduct($productId) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
    
            // Update product in the database (you need to implement this)
            $productModel = new Product();
            $productModel->editProduct($productId, $name, $description, $price, $quantity);
    
            // Redirect to manage products page
            header("Location: index.php?controller=AdminController&method=manageProducts");
            exit;
        }
    
        // Get product details from the database
        $productModel = new Product();
        $product = $productModel->getProductById($productId);
    
        // Load the edit product form view
        require_once 'Views/admin/edit_product.php';
    }
    
}
