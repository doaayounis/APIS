<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hillbillysoftware.com/Cast/ActorBySearch/c19edc4eed084cfebdbf713512afdc2e/Daniel%20Radcliff",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: f4e8425d-8561-4e27-a585-fa97c1ea870f",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
$yummy = json_decode($response);
print "Last work of actor :     ";
print($yummy[0]->Name);
echo "<br>" ;
print($yummy[0]->ShowName);
echo "<br>" ;
print($yummy[0]->Image);

}