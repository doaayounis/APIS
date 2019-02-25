<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.googleapis.com/books/v1/volumes?q=isbn:0747532699",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: 7230d948-b117-4665-a51d-add5bc99556d",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}
else {
 //echo $response;
 
$yummy = json_decode($response);
$book_year= $yummy->items[0]->volumeInfo->publishedDate; // type as a any output type
echo $book_year ;
echo "<br>" ;
}
//-------------------------------------------------------------------------------------------
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hillbillysoftware.com/Awards/ByYear/$book_year",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: eee09018-a8ba-4f4e-b217-1a5ea746f5c0",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}
else {
$yummy = json_decode($response);
$length=sizeof($yummy);
for ($i = 0; $i < $length; $i++) {
print "Nominee : ";
echo "<br>" ;
print($yummy[$i]->Nominee);
echo "<br>" ;
print "Category : ";
echo "<br>" ;
print($yummy[$i]->Category);
echo "<br>" ;
}
}