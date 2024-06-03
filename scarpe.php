<?php
session_start();
require_once 'config.php';

$conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query per ottenere i prodotti per la sezione Scarpe
$query = "SELECT id, nome, descrizione, prezzo, immagine FROM scarpe";
$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->execute();
$result = $stmt->get_result();
$prodotti = [];

while ($row = $result->fetch_assoc()) {
    $prodotti[] = $row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scarpe</title>
    <link rel="stylesheet" href="scarpe.css">
</head>
<body>
    <header>
        <h1>Scarpe</h1>
    </header>
    <main>
        <div class="scarpe-container" id="scarpe-container">
            <!-- I prodotti saranno inseriti qui da JavaScript -->
        </div>
    </main>
    <script>
        const prodotti = <?php echo json_encode($prodotti); ?>;
    </script>
    <script src="scarpe.js" defer></script>
</body>
</html>
