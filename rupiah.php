<?php

$ua = array("Accept-Charset: UTF-8",
"Accept: application/json",
"Content-Type: multipart/form-data; charset=utf-8;",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1; A1603 Build/LMY47I)");
$url = "https://v2.coinpade.com/apiv2/claim-screen";

$data = array();
$data["token"] = "f7deb52ce60a71cf9c9a585c3ad54c6ee9efdcbb9e0ab28ac9f3a4451e5dfb85f9031c27055aee0ded5bf08c514945f6c516e1248a3bfb4ee989b5b319c63d4f3b8ca28d3aa93ab6c269e1322ef9ef6708a4ac82eea8122c53b9b1adfb7c1d6a8d0da44ee9c7eef0a876d5f15c9067f284c162aba8d34aa26aba9a3100a5b3de548aa2d8cd206660a779d6c73fd3";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
$js = json_decode($result, true);
echo "Login Success\n";
echo "Welcome To CoinPade Bot ".$js["user"]["name"]."\n";
echo "Your Ballance : ".$js["user"]["user_balance"]."\n";
?>
