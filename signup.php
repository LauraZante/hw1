<?php
require_once 'config.php';

function usernameExists($username, $conn) {
    $query = "SELECT id FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $exists = $result->num_rows > 0;
    $stmt->close();
    return $exists;
}

function validatePassword($password) {
    return strlen($password) >= 8 &&
           preg_match('/[A-Z]/', $password) &&
           preg_match('/[a-z]/', $password) &&
           preg_match('/[0-9]/', $password) &&
           preg_match('/\W/', $password);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $error = '';

    if (usernameExists($username, $conn)) {
        $error = 'Username già in uso. Scegliere un altro username.';
    } elseif (!validatePassword($password)) {
        $error = 'La password deve contenere almeno 8 caratteri, una maiuscola, una minuscola, un numero e un simbolo.';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param('sss', $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo 'Registrazione effettuata con successo.';
        } else {
            $error = 'Errore durante la registrazione: ' . $stmt->error;
        }

        $stmt->close();
    }

    if ($error) {
        echo $error;
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrazione - Amato bimbi</title>
</head>
<body>
<div class="logo-container">
        <img src="logo.jpg" alt="Site Logo" class="site-logo">
    </div>
    <div class="form-container">
        <form action="signup.php" method="post">
            <div class="form">
            <h2>REGISTRATI</h2>
            <label for="username">Nome utente:</label>
            <input type="text" id="username" name="username" required autocomplete="off">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autocomplete="off">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="off">

            <button type="submit">Registrati</button>
        </form> 
          </div>
    </div>
</body>
</html>