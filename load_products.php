<?php
require_once 'config.php'; 

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, image_url FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='carousel-item'>";
        echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
        echo "<div class='product-info'>";
        echo "<h4>" . $row['name'] . "</h4>";
        echo "<p>$" . number_format($row['price'], 2) . "</p>";
        echo "<button class='favorite-btn' data-product-id='" . $row['id'] . "'>&#9733;</button>";
        echo "</div>";
    }
} else {
    echo "No products found";
}
$conn->close();
?>
