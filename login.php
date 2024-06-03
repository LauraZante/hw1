<?php
require_once 'auth.php';

if (checkAuth()) {
    header("Location: home.php");
    exit;
}

if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    require_once 'config.php';

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";

    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if (mysqli_num_rows($res) > 0) {
        $entry = mysqli_fetch_assoc($res);
        if (password_verify($_POST['password'], $entry['password'])) {
            // Autenticazione riuscita
            $_SESSION['username'] = $entry['username'];
            $_SESSION['user_id'] = $entry['id'];
            mysqli_free_result($res);
            mysqli_close($conn);
            header("Location: home.php");
            exit;
        }
    }
    $error = "Username, email e/o password errati.";
} else if (isset($_POST["username"]) || isset($_POST["email"]) || isset($_POST["password"])) {
    $error = "Inserisci username, email e password.";
}
?>

<html>
<head>
    <link rel='stylesheet' href='login.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accedi - Amato bimbi</title>
</head>
<body>
    <div class="logo-container">
        <img src="logo.jpg" alt="Site Logo" class="site-logo">
    </div>
    <div class="form-container">
        <div class="form">
            <h2>EFFETTUA LOGIN UTENTE</h2>
            <?php
            if (isset($error)) {
                echo "<p class='error-message'>$error</p>";
            }
            ?>
            <form name='login' method='post' autocomplete="off">
                <label for='username'>Nome utente</label>
                <input type='text' name='username' <?php if(isset($_POST["username"])){echo "value=".$_POST["username"];} ?> required>
                
                <label for='email'>Email</label>
                <input type='email' name='email' <?php if(isset($_POST["email"])){echo "value=".$_POST["email"];} ?> required>
                
                <label for='password'>Password</label>
                <input type='password' name='password' <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?> required>
                
                <button type='submit'>Accedi</button>
            </form>
            <p><a href="#">Recupera la tua password</a></p>
        </div>
        <div class="form">
            <h2>EFFETTUA REGISTRAZIONE</h2>
            <p>Sei un nuovo cliente? Crea adesso il tuo account, bastano semplicemente pochi click!</p>
            <a href="signup.php"><button>Registrati</button></a>
        </div>
    </div>
</body>
</html>
