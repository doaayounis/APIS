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
$book_lang= $yummy->items[0]->volumeInfo->language; // type as a any output type
echo $book_lang;

}
//-------------------------------------------------------------------------------

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.themoviedb.org/3/movie/76341?api_key=0c60965b2e298aee9f4813bdb7d8a78a&language=$book_lang",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: 3edecde0-eafa-406f-8084-8ebaf5cc708e",
    "cache-control: no-cache"
  ),
));

$res = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "<br>" ;
  $yummy = json_decode($res);
  print($res) ;
}