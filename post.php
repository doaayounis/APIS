<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.omdbapi.com/?i=tt3896198&apikey=5d7f6c29&5d7f6c29=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "Title\":\"Harry potter and the philosopher's stone\"",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: 7f91b3d9-46f9-4aae-8248-0e2a9d9d5b55",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  $yummy = json_decode($response);
  print "the movie Title is:     ";
  print($yummy[0]->Title);
}
