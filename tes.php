<?php


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://dev-lnlo31gs.us.auth0.com/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"client_id\":\"5ZSeyQKvkumHftV7XNXIJVntoOGtWnnV\",\"client_secret\":\"enDIonx9NEFN4e_EvqMBzGHIRJFa-FYpa6nbcZJ3K2L_tvIaK0Un_cp5wUsj-i5U\",\"audience\":\"https://api.stevanandreas.com/\",\"grant_type\":\"client_credentials\"}",
    CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
