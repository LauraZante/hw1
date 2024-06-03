<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nome'];  
    $subject = $_POST['subject'];  
    $rating = $_POST['rating'];  
    $review = $_POST['message'];  

    // Connessione al database e inserimento della recensione
    $conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO reviews (user_id, nome, subject, rating, message) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("issis", $user_id, $name, $subject, $rating, $review);
        if ($stmt->execute()) {
            $message = "Grazie per la tua recensione!";
        } else {
            $message = "Errore: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "Errore nella preparazione del comando SQL: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi una Recensione</title>
    <link rel="stylesheet" href="review.css">
</head>
<body>
    <h1>Aggiungi una Recensione</h1>
    <p id="message"><?php echo $message; ?></p>
    <form id="reviewForm" method="post" action="">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required autocomplete="off">
        </div>
        <div>
            <label for="subject">Seleziona il negozio:</label>
            <select id="subject" name="subject" required>
                <option value="Negozio 1">Negozio 1</option>
                <option value="Negozio 2">Negozio 2</option>
            </select>
        </div>
        <div>
            <label for="rating">Valutazione (1-5):</label>
            <select id="rating" name="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <label for="message">Messaggio:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Invia Recensione</button>
    </form>
</body>
</html>
