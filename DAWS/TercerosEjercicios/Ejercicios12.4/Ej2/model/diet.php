<?php
function diet($food)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://edamam-food-and-grocery-database.p.rapidapi.com/parser?ingr=$food",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: edamam-food-and-grocery-database.p.rapidapi.com",
            "x-rapidapi-key: d4210e487amsh99d762a33adfa01p1319aejsn7fbfff7a6ffe"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return json_decode($response);
    }
}
