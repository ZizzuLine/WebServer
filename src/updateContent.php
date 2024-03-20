<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { 
    if (isset($_GET["var1"]) && isset($_GET["var2"])) {
        $var1 = $_GET["var1"];
        $var2 = $_GET["var2"];
        echo "Le variabili var1 e var2 sono state passate con i valori: $var1, $var2";
    } else {
        echo "Error.";
    }
} else {
    // Se il metodo della richiesta non è GET
    echo "Errore: Questo script PHP richiede una richiesta GET.";
}
?>
