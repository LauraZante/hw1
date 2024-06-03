<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

$conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT products.id, products.name, products.description, products.price, products.image_url 
          FROM products 
          JOIN favorites ON products.id = favorites.product_id 
          WHERE favorites.user_id = ?";
$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$favorites = [];

while ($row = $result->fetch_assoc()) {
    $favorites[] = $row;
}

$stmt->close();
$conn->close();
?>

    <script src="favorites.js" defer></script>
    <script>
        const favorites = <?php echo json_encode($favorites); ?>;
    </script>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>I miei preferiti</title>
    <link rel="stylesheet" href="favorites.css">
</head>
<body>
    <h1>I miei preferiti</h1>
    <div class="favorites-container" id="favorites-container">
        <!-- I prodotti saranno inseriti qui da JavaScript -->
    </div>
</body>
</html>
