<?php
function recipe($food)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://edamam-recipe-search.p.rapidapi.com/search?q=$food",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: edamam-recipe-search.p.rapidapi.com",
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

    // $recetas = file_get_contents(
    //     "https://api.edamam.com/api/recipes/v2?
    //     q=$food
    //     &app_key=c478b90fb4e55a48f1399846feceef36
    //     &_cont=CHcVQBtNNQphDmgVQntAEX4BYl1tAQQAQG1HCmEaZ1BwBQECUXlSUDARZwF6BFZUSm0VBTFHYwN7BQUDQGRFV2oUN1UhVwUVLnlSVSBMPkd5BgMbUSYRVTdgMgksRlpSAAcRXTVGcV84SU4%3D
    //     &type=public
    //     &app_id=6e372008"
    // );
    // $recetasObj = json_decode($recetas);

    // return $recetasObj;
}
