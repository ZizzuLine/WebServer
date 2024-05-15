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
else {
    // Se l'id non è valido, visualizza un messaggio di errore
    echo "Invalid ID";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera il valore della variabile "today"
    $today = $_POST['value'];
}
// Crea la query SQL in base al tipo di filtro e alla tabella del database
if ($filter_type == 'today') {
    $query = "SELECT * FROM $table WHERE DATE(timestamp) = CURDATE()";
} elseif ($filter_type == '1hour') {
    $query = "SELECT * FROM $table WHERE timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
} elseif ($filter_type == 'week') {
    $query = "SELECT * FROM $table WHERE WEEK(timestamp) = WEEK(NOW()) AND YEAR(timestamp) = YEAR(NOW())";
} elseif ($filter_type == 'entire') {
    $query = "SELECT * FROM $table";
}

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
</head>
<body>
   <!-- Service Start -->
   <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form method="post">
                        <input type="hidden" name="filter_type" value="today">
                        <input type="hidden" name="value" value="today">
                        <button type="submit" class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Today</h5>
                                <p>Filter</p>
                            </div>
                        </button>
                    </form>
                </div>

                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form method="post">
                        <input type="hidden" name="filter_type" value="1hour">
                        <input type="hidden" name="value" value="1hour">
                        <button type="submit" class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Houre</h5>
                                <p>Filter</p>
                            </div>
                        </button>
                    </form>
                </div>

                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form method="post">
                        <input type="hidden" name="filter_type" value="week">
                        <input type="hidden" name="value" value="week">
                        <button type="submit" class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Week</h5>
                                <p>Filter</p>
                            </div>
                        </button>
                    </form>
                </div>

                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form method="post">
                        <input type="hidden" name="filter_type" value="entire">
                        <input type="hidden" name="value" value="entire">
                        <button type="submit" class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Entire</h5>
                                <p>Filter</p>
                            </div>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service End -->
    <div class="container">
        
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
