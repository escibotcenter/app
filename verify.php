<?php
$access_token = '	
Long term token which is displayed permanently.8wVRX6o7N5FhloESBkIyg/H1twGKS0Bs621I5tPk2u57GHBFWC1e2LSWAtTHuSl9zpZajioUhnT5lbbjnCYKAbDdcLP8e3ndcOiKEaPVDf2MXoLH6XqMV0aUsI0N/94Vv932jgYgu7V0nu3y6RIW2QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
