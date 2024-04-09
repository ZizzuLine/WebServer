<?php
    $channel_id = "2497042"; // id public channel
    $api_key = "H6Y216Q86ERLFYI1"; // api key write

    // cURL-init
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, ""); // Bypass proxy

    //create url post thingspeak

    $url = "https://api.thingspeak.com/channels/$channel_id/fields/1/last.json?api_key=$api_key";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $json_data = curl_exec($ch);

    // check if there is an error by the connection
    if (curl_errno($ch)) {
        echo 'cURL-Error: ' . curl_error($ch);
    } else {
        // cURL-close connection
        curl_close($ch);

        //Convert json data into php arrray

        $data = json_decode($json_data, true);

        // check converted data if correct
        if (json_last_error() === JSON_ERROR_NONE && isset($data['field1'])) {
            $link = $data['field1'];

            echo "<a href='$link'>$link</a>";
        } else {
            echo "Error Json.";
        }
    }
    curl_setopt($ch, CURLOPT_VERBOSE, true); 

    $json_data = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL-Error: ' . curl_error($ch);
    }

    //code for send to database

?>