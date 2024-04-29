<?php
require_once './classes/User.php';



class AuthController {
    public function login() {
        // Check if the user is already logged in, if so, redirect to home page
        if (isset($_SESSION['userID'])) {
            header("Location: index.php?controller=HomeController&method=index");
            exit;
        }

        // Handle login form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate login credentials (you need to implement this)
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['mot_de_passe'])) {
                // Login successful, set session variables
                $_SESSION['userID'] = $user['userID'];

                // Redirect to home page
                header("Location: index.php?controller=HomeController&method=index");
                exit;
            } else {
                // Invalid credentials, show error message
                $error = "Invalid email or password";
            }
        }

        // Load the login view
        require_once 'Views/login.php';
    }

    public function register() {
        // Handle registration form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate registration data (you need to implement this)
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into database (you need to implement this)
            $userModel = new User();
            $userModel->registerUser($name, $email, $hashedPassword, $address);

            // Redirect to login page
            header("Location: index.php?controller=AuthController&method=login");
            exit;
        }

        // Load the register view
        require_once 'Views/register.php';
    }
}


?>
