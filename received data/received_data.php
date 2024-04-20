<?php
$channel_id = "2497042"; // id public channel
$api_key = "H6Y216Q86ERLFYI1"; // api key write

// Definisci la mappatura dei campi ThingSpeak ai rispettivi ID nel database
$field_to_id_mapping = array(
    'field1' => array('table' => 'temperature', 'id' => 1),
    'field2' => array('table' => 'humidity', 'id' => 2),
    'field3' => array('table' => '', 'id' => 3),
    'field4' => array('table' => '', 'id' => 4),
    'field5' => array('table' => '', 'id' => 5),
    'field6' => array('table' => '', 'id' => 6),
    'field7' => array('table' => '', 'id' => 7),
    'field8' => array('table' => '', 'id' => 8),
);

// cURL-init
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, ""); // Bypass proxy

// Esegui la richiesta per ogni campo
foreach ($field_to_id_mapping as $field => $db_info) {
    $table = $db_info['table'];
    $db_id = $db_info['id'];
    
    //create url post thingspeak
    $url = "https://api.thingspeak.com/channels/$channel_id/fields/$db_id/last.json?api_key=$api_key";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $json_data = curl_exec($ch);

    // check if there is an error by the connection
    if (curl_errno($ch)) {
        echo 'cURL-Error: ' . curl_error($ch);
    } else {
        //Convert json data into php array
        $data = json_decode($json_data, true);

        // check if field exists in data
        if (isset($data[$field])) {
            $value = $data[$field];
            echo "<p>$field: $value</p>";

            // Verifica la variazione e invia al database solo se è presente una variazione
            $conn = mysqli_connect("localhost", "root", "", "zizzuline");
            if (!$conn) {
                echo "Connection failed!";
            } else {
                // time and date of last modify on thingspeak
                $timestamp = date("Y-m-d H:i:s");

                // Controlla se il valore attuale è diverso dall'ultimo valore nel database
                $check_query = "SELECT value FROM $table WHERE id = '$db_id' ORDER BY timestamp DESC LIMIT 1";
                $check_result = mysqli_query($conn, $check_query);

                if (mysqli_num_rows($check_result) > 0) {
                    $row = mysqli_fetch_assoc($check_result);
                    $last_value = $row['value'];
                    if ($value != $last_value) {
                        // Se il valore è cambiato, aggiorna il timestamp e il valore nel database
                        $sql = "UPDATE $table SET timestamp = '$timestamp', value = '$value' WHERE id = '$db_id'";
                        if (mysqli_query($conn, $sql)) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . mysqli_error($conn);
                        }
                    } else {
                        echo "No variance in value, not updating database.";
                    }
                } else {
                    // Se non ci sono record nel database, inserisci il nuovo record
                    $sql = "INSERT INTO $table (timestamp, id, value) VALUES ('$timestamp', '$db_id', '$value')";
                    if (mysqli_query($conn, $sql)) {
                        echo "Record inserted successfully";
                    } else {
                        echo "Error inserting record: " . mysqli_error($conn);
                    }
                }

                mysqli_close($conn);
            }
        } else {
            echo "Field $field not present in ThingSpeak data.";
        }
    }
}

curl_close($ch);
?>
