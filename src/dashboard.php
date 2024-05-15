<?php
// Include il file database.php che contiene le informazioni di connessione al database
require_once('db/db_conn.php');

// Avvia la sessione
session_start();

// Verifica se l'utente è loggato
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Reindirizza alla pagina di login se l'utente non è loggato
    exit;
}

// Qui puoi mettere il codice della dashboard
echo "Benvenuto, " . $_SESSION['username'] . "!";

// Puoi includere altre parti della tua dashboard qui
?>
