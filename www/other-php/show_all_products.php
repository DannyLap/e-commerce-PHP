<?php
include 'log.php';

// Sélectionne tous les produits de la table produits
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-12 col-md-4 col-lg-3 mb-5'>";
        echo "<a class=product-item href = '/www/cart.html'>";
        echo "<img class='img-fluid product-thumbnail' src='../" . $row['product_image'] . "' alt='" . $row['product_name'] . "'>";
        echo "<h3 class=product-title>" . $row['product_name'] . "</h3>";
        echo "<strong class=product-price>$" . $row['product_price'] . "</strong>";
        echo "<span class='icon-cross'>";
        echo "<img src='/images/cross.svg' class='img-fluid'>";
        echo "</span >";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "Aucun produit trouvé";
}

$conn->close();