<?php

include "src/db/db_conn.php";


// Daten filtern
$filter_type = isset($_POST['filter_type']) ? $_POST['filter_type'] : 'today';
$query = "";

if ($filter_type == 'today') {
    $query = "SELECT * FROM temperature WHERE DATE(timestamp) = CURDATE()";
} elseif ($filter_type == '1hour') {
    $query = "SELECT * FROM temperature WHERE timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
} elseif ($filter_type == 'week') {
    $query = "SELECT * FROM temperature WHERE WEEK(timestamp) = WEEK(NOW()) AND YEAR(timestamp) = YEAR(NOW())";
} elseif ($filter_type == 'average') {
    $query = "SELECT ROUND(AVG(value), 2) AS average_temperature FROM temperature";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $average_temperature = $row['average_temperature'];
    echo "<p>Average Temperature: $average_temperature °C</p>";
    exit();
}



$result = mysqli_query($conn, $query);

// Daten für das Diagramm vorbereiten
$timestamps = [];
$values = [];

while ($row = mysqli_fetch_assoc($result)) {
    $timestamps[] = $row['timestamp'];
    $values[] = $row['value'];
}

// Diagramm erstellen
$chart_data = [
    'x' => $timestamps,
    'y' => $values,
    'type' => 'scatter',
    'mode' => 'lines+markers',
    'name' => 'Temperature'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualization</title>
    <link rel="stylesheet" href="css/stylesgraphic.css">
</head>
<body>
    <div class="container">
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
    ?>
        <div class="menu">
            <form action="" method="post">
                <select name="filter_type">
                    <option value="today">Today</option>
                    <option value="1hour">Last Hour</option>
                    <option value="week">Entire Week</option>
                    <option value="average">Average Temperature</option>
                </select>
                <input type="submit" value="Filter">
            </form>
        </div>
        <div id="chart"></div>
    </div>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        var chartData = <?php echo json_encode([$chart_data]); ?>;
        Plotly.newPlot('chart', chartData);
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
