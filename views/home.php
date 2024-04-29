<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bievenue chez Inda's Joaillerie marocaine</h1>
    <p>
    Fondée par Hind El Khalifi, Inda’s est une joaillerie originaire du Maroc. 
    Inspirée par la richesse de sa culture, Inda’s s’assure d’être éco-responsable
    afin d’offrir à sa clientèle des bijoux de la plus noble des qualités tout en 
    respectant la Terre .
  </p>
  <p>
    Derrière chaque oeuvre se cache toute une équipe s’occupant de tout : allant
    de la récolte des minerais à la mise en vitrine. C’est donc pourquoi Inda’s se 
    porte garante de la valeur de chacune de ses pièces. Elle promet aussi à tous 
    ses employés des salaires at avantages compétitifs.
  </p>
  <p>
    Tous les bijoux ont vu le jour suite une alliance harmonique entre modernité
    et artisanat marocain. Ils se démarquent notamment par leur élégance et leur
    longévité. C’est ainsi que sans plus tarder, Inda’s vous invite à découvrir sa toute 
    première collection : Vie & Infini
  </p>
    <div class="products_list">
        <?php
        if (!empty($products)) {
            foreach ($products as $product) {
                // Display product information
                echo "<div class='product'>";
                echo "<h3>{$product['nom']}</h3>";
                echo "<p>{$product['description']}</p>";
                echo "<p>Price: {$product['prix']}</p>";
                echo "<div class='image_product'>";
                echo "<img src='{$product['image']}' alt='Product Image'>";
                echo "</div>";
                echo "<form action='../index.php?controller=CartController&method=addToCart&productId=". $product['productID'] . "' method='post'>";
                echo "<input type='hidden' name='product_id' value='{$product['productID']}'>";
                echo "<input type='submit' name='add_to_cart' value='Add to Cart'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>

    <div class="auth_links">
        <h2>Connexion / Inscription</h2>
        <p>
            <a href="views/login.php">Se connecter</a> |
            <a href="views/register.php">S'inscrire</a>
        </p>
    </div>
</body>
</html>

