<?php


include "src/db/db_conn.php";

// Determina il tipo di filtro
$filter_type = isset($_POST['filter_type']) ? $_POST['filter_type'] : 'today';
$table = ""; // Inizializza la variabile della tabella del database
$query = "";

// Imposta la tabella del database in base all'id passato da graphic.php
if (isset($_GET['idselector']) && $_GET['idselector'] === '1') {
    $table = "temperature";
} elseif (isset($_GET['idselector']) && $_GET['idselector'] === '2') {
    $table = "humidity";
} 
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '3') {
    $table = "speed";
}
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '4') {
    $table = "fuel";
}
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '5') {
    $table = "route";
}else {
    // Se l'id non è valido, visualizza un messaggio di errore
    echo "Invalid ID";
    exit();
}

?>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <a href="?filter_type=today">
                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                <h5 class="mb-3">Skilled Instructors</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <a href="?filter_type=1hour">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h5 class="mb-3">Online Classes</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <a href="?filter_type=week">
                <i class="fa fa-3x fa-home text-primary mb-4"></i>
                <h5 class="mb-3">Home Projects</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <a href="?filter_type=average">
                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                <h5 class="mb-3">Book Library</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </a>
        </div>
    </div>
</div>

<?php
$result = mysqli_query($conn, $query);

// Prepara i dati per il grafico
$timestamps = [];
$values = [];

while ($row = mysqli_fetch_assoc($result)) {
    $timestamps[] = $row['timestamp'];
    $values[] = $row['value'];
}

// Prepara i dati per il grafico
$chart_data = [
    'x' => $timestamps,
    'y' => $values,
    'type' => 'scatter',
    'mode' => 'lines+markers',
    'name' => ucfirst($table) // Utilizza il nome della tabella come nome del grafico
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
        <div class="menu">
            <form action="" method="post">
                <select name="filter_type">
                    <option value="today">Today</option>
                    <option value="1hour">Last Hour</option>
                    <option value="week">Entire Week</option>
                    <option value="entire">Entire Values</option>
                    <option value="average">Average Value</option>
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
// Chiudi la connessione al database
mysqli_close($conn);
?>
