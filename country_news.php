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
$book_sales_country= $yummy->items[0]->saleInfo->country; // type as a any output type

echo $book_sales_country;
echo "<br>" ;

//-------------------------------------------------------------------------------------------

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=$book_sales_country&apiKey=c9edad53a37441f5be8bf97359b466d2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: 9064a92d-a933-4268-bb36-936648081a58",
    "cache-control: no-cache"
  ),
));

$res = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
$yummy = json_decode($res);
$length=sizeof($yummy->articles);
print "Recent News :";
echo "<br>" ;
for ($i = 0; $i < $length; $i++) {
  print($yummy->articles[$i]->title);
  echo "<br>" ;
  echo "<br>" ;
}

}
}