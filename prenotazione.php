<?php
require_once 'config.php';

function processBooking($conn, $name, $date, $time, $gender, $location) {
    $query = "INSERT INTO appointments (name, date, time, gender, location) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        return ['success' => false, 'message' => 'Error preparing statement: ' . $conn->error];
    }

    $stmt->bind_param("sssss", $name, $date, $time, $gender, $location);

    if ($stmt->execute()) {
        return ['success' => true, 'message' => 'Prenotazione effettuata con successo!'];
    } else {
        return ['success' => false, 'message' => 'Error executing statement: ' . $stmt->error];
    }

    $stmt->close();
}

$response = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];

    $conn = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    if ($conn->connect_error) {
        $response = ['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error];
    } else {
        $response = processBooking($conn, $name, $date, $time, $gender, $location);
        $conn->close();
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenota il tuo appuntamento</title>
    <link rel="stylesheet" href="prenotazione.css">
    <script src="prenotazione.js" defer></script>
</head>
<body>
    <div class="booking-form-container">
        <h1>Prenota il tuo appuntamento</h1>
        <div id="responseMessage"></div>
        
        <form id="bookingForm">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required autocomplete="off">
            
            <label for="date">Data:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="time">Ora:</label>
            <input type="time" id="time" name="time" required>
            
            <label for="gender">Bimbo/Bimba:</label>
            <select id="gender" name="gender" required>
                <option value="bimbo">Bimbo</option>
                <option value="bimba">Bimba</option>
            </select>
            
            <label for="location">Sede del Negozio:</label>
            <select id="location" name="location" required>
                <option value="sede1">Sede 1</option>
                <option value="sede2">Sede 2</option>
            </select>
            
            <button type="submit">Conferma Prenotazione</button>
        </form>
    </div>
</body>
</html>
