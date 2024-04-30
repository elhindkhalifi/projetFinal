<?php
require_once 'classes/Product.php'; // Include Product class file
require_once 'classes/Database.php'; // Include Product class file

class HomeController {
    public function index() {

        // Check if user is not logged in, redirect to login page
        // if (!isset($_SESSION['userID'])) {
        //     header('Location: ../index.php?controller=AuthController&method=login');
        //     exit;
        // }

        // Fetch products from the database
        $productModel = new Product();
        $products = $productModel->getAllProducts(); // Adjust this according to your model method

        // Pass products to the view
        require_once 'views/home.php';
    }
}
?>
