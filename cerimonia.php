<?php
session_start();
require_once 'config.php';

// Connessione al database
$conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query per ottenere i prodotti per la sezione Cerimonia
$query = "SELECT id, nome, descrizione, prezzo, immagine FROM cerimonia";
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
    <title>Cerimonia</title>
    <link rel="stylesheet" href="cerimonia.css">
</head>
<body>
    <header>
        <h1>Cerimonia</h1>
    </header>
    <main>
        <div class="cerimonia-container" id="cerimonia-container">
            <!-- I prodotti saranno inseriti qui da JavaScript -->
        </div>
    </main>
    <script>
        const prodotti = <?php echo json_encode($prodotti); ?>;
    </script>
    <script src="cerimonia.js" defer></script>
</body>
</html>
