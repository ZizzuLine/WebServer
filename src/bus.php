<?php
include "db/db_conn.php";

// Ottenere il contenuto in base alla selezione
if (isset($_GET['opzione'])) {
    $opzione = $_GET['opzione'];

    // Query SQL per ottenere il contenuto in base all'opzione selezionata
    $sql = "SELECT contenuto FROM contenuto WHERE opzione = '$opzione'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostra il contenuto
        $row = $result->fetch_assoc();
        $contenuto = $row['contenuto'];
    } else {
        $contenuto = "Nessun contenuto trovato per questa opzione.";
    }
} else {
    // Per impostazione predefinita, mostra un messaggio iniziale
    $contenuto = "Seleziona un'opzione dalla barra di navigazione.";
    $sql = "SELECT contenuto FROM contenuto WHERE opzione = 'default'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostra il contenuto
        $row = $result->fetch_assoc();
        $contenuto = $row['contenuto'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con PHP e DB</title>
    <link rel="stylesheet" href="../css/stylebus.css">

</head>

<body>
    <!-- Barra di navigazione -->
    <div class="navbar">
        <!-- <a href="?opzione=default">Home</a> -->
        <a href="../index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Opzioni
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?opzione=bus-1">Bus-1</a>
                <a href="?opzione=bus-2">Bus-2</a>
            </div>
        </div>
    </div>

    <!-- Contenuto dinamico -->
    <div>
        <h2>Contenuto</h2>
        <p><?php echo $contenuto; ?></p>
    </div>

<?php
    
    // Controllo se è stata inviata una richiesta GET con il parametro id_argument
    if (isset($_GET['id_argument'])) {
        $id_argument = $_GET['id_argument'];
        
        // Modifica il titolo in base al valore di id_argument
        if ($id_argument === 'id1') {
            echo "<h1>Temperature Visualization</h1>";
        } elseif ($id_argument === 'id2') {
            echo "<h1>Humidity Visualization</h1>";
        } else {
            echo "<h1>Invalid Argument</h1>";
        }
    } else {
        echo "<h1>No Argument Provided</h1>";
    }
    include "../graphic.php";
    
?>



</body>

</html>