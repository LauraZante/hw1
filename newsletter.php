<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    
    if ($conn->connect_error) {
        echo json_encode(['status' => 'error', 'message' => 'Connessione al database fallita']);
        exit;
    }  

    // Sanitizzazione dei dati ricevuti per evitare injection
    $nome = $conn->real_escape_string($_POST['nome']);
    $cognome = $conn->real_escape_string($_POST['cognome']);
    $email = $conn->real_escape_string($_POST['email']);

    // Query di inserimento dei dati nel database
    $insertQuery = "INSERT INTO newsletter (nome, cognome, email) VALUES ('$nome', '$cognome', '$email')";
    if ($conn->query($insertQuery)) {
        echo json_encode(['status' => 'success', 'message' => 'Grazie per esserti iscritto alla nostra newsletter!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Si è verificato un errore interno']);
    }

    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Metodo di richiesta non valido']);
}
?>
