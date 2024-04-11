<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "zizzuline";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
    }


    // Daten filtern
    $filter_type = isset($_POST['filter_type']) ? $_POST['filter_type'] : 'today';
    $query = "";

    if ($filter_type == 'today') {
        $query = "SELECT * FROM temperature WHERE DATE(timestamp) = CURDATE()";
    } elseif ($filter_type == '1hour') {
        $query = "SELECT * FROM temperature WHERE timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
    } elseif ($filter_type == 'average') {
        $query = "SELECT AVG(value) AS average_temperature FROM temperature";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $average_temperature = $row['average_temperature'];
        echo "<p>Average Temperature: $average_temperature °C</p>";
        exit();
    }
    
    $time = date("d-m-Y H:i:s");
    echo $time;

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
    <title>Temperature Visualization</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Temperature Visualization</h1>
        <div class="menu">
            <form action="" method="post">
                <select name="filter_type">
                    <option value="today">Today</option>
                    <option value="1hour">Last Hour</option>
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
