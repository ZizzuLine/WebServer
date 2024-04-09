<?php
include "db_conn.php";

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
    <style>
        /* Stili per la barra di navigazione */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a,
        .dropdown .dropbtn {
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Barra di navigazione -->
    <div class="navbar">
        <a href="?opzione=default">Home</a>
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
</body>

</html>