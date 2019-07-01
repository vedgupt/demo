<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://zfloos.com/api/v1/payments",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{  \r\n   \"amount\":0.1,\r\n   \"currency\":\"KWD\",\r\n   \"metadata\":{\r\n       \"key\": \"value\"\r\n   },\r\n   \"reference\":{  \r\n      \"type\":\"invoice\",\r\n      \"id\":\"ord_0001\"\r\n   },\r\n   \"customer\":{  \r\n      \"name\":\"Ahmad AlKurdi\",\r\n      \"email\":\"alkurdi@zkood.com\",\r\n      \"mobile\":{  \r\n         \"country_code\":\"965\",\r\n         \"number\":\"99928366\"\r\n      }\r\n   },\r\n   \"order\":{  \r\n      \"freight_costs\":1,\r\n      \"discount\": 1,\r\n      \"items\":[\r\n        {\r\n          \"sku\": \"5\",\r\n          \"name\": \"ben\",\r\n          \"quantity\": 1,\r\n          \"discount\": 0,\r\n          \"price\": 1\r\n        },{\r\n          \"sku\": \"65\",\r\n          \"name\": \"car\",\r\n          \"quantity\": 1,\r\n          \"discount\": 0,\r\n          \"price\": 2\r\n        }\r\n      ]\r\n   },\r\n   \"redirect_url\": \"https://zkood.com/status\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer qMkJAC8hwXAs1DvBzGvdmuV7qTOi2noPP2kOZLyspG6fvsmLoJlW7Xqd1Yqn
",
    "Language: en"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
} ?>