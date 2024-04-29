<?php
// models/User.php
require_once 'Database.php';

class User extends Database {
    public function getUsers() {
        $sql = "SELECT * FROM Utilisateur";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }
    public function registerUser($name, $email, $password, $address) {
        $sql = "INSERT INTO Utilisateur (nom, email, mot_de_passe, adresse) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $password, $address]);
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM Utilisateur WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}


?>
