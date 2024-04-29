<?php
class CartController {
    public function viewCart() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        $userID = $_SESSION['userID'];
    
        // Get cart items from the database
        $cartItems = Cart::getCartItem($userID);
    
        require_once 'Views/cart.php';
    }
    

    public function addToCart($productId) {
    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if product_id is set
    if (isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];

        // Check if cart array exists in session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Add product to cart
        $_SESSION['cart'][] = $productId;
    }

    // Redirect back to the home page after adding to cart
    header("Location: index.php?controller=HomeController&method=index");
    exit;
}

    public function removeFromCart($productId) {
              // Start session if not already started
              if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
    
            // Check if product_id is set
            if (isset($_GET['productId'])) {
                $productId = $_GET['productId'];
    
                // Check if cart array exists in session
                if (isset($_SESSION['cart'])) {
                    // Find the index of the product in the cart
                    $index = array_search($productId, $_SESSION['cart']);
                    // Remove the product from the cart if found
                    if ($index !== false) {
                        unset($_SESSION['cart'][$index]);
                    }
                }
            }
    
            // Redirect back to the cart page after removing from cart
            header("Location: index.php?controller=CartController&method=showCart");
            exit;
        }
}
