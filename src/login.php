<?php
// Include il file database.php che contiene le informazioni di connessione al database
require_once('database.php');

// Avvia la sessione
session_start();


// Verifica se il form è stato sottoposto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi l'input dell'utente
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Converte la password in SHA-256
    $hashed_password = hash('sha256', $password);
    echo $hashed_password;

    // Prepara la query per selezionare la password dal database
    $sql = "SELECT passwdhash FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Errore nella query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Utente trovato nel database, confronta le password
        $row = $result->fetch_assoc();
        $stored_password = $row['passwdhash'];

        if ($hashed_password === $stored_password) {
            // Password corretta, esegui il login
            echo "Login riuscito!";
        } else {
            // Password non corretta
            echo "Password errata.";
        }
    } else {
        // Utente non trovato nel database
        echo "Utente non trovato.";
    }
}


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html> -->