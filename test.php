<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://catalog.wb.ru/brands/s/catalog?appType=1&brand=28258&couponsGeo=12,7,3,6,18,22,21&curr=rub&dest=-1075831,-79374,-367666,-2133462&emp=0&lang=ru&locale=ru&pricemarginCoeff=1.0&reg=0&regions=80,64,83,4,38,33,70,82,69,68,86,30,40,48,1,22,66,31&spp=0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept' => '*/*',
    'Accept-Language' => 'ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection' => 'keep-alive',
    'Origin' => 'https://www.wildberries.ru',
    'Referer' => 'https://www.wildberries.ru/brands/starkoff',
    'Sec-Fetch-Dest' => 'empty',
    'Sec-Fetch-Mode' => 'cors',
    'Sec-Fetch-Site' => 'cross-site',
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
    'sec-ch-ua' => '"Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
    'sec-ch-ua-mobile' => '?0',
    'sec-ch-ua-platform' => '"Windows"',
    'Accept-Encoding' => 'gzip',
]);

$response = curl_exec($ch);

curl_close($ch);
$string = explode(":", $response);
foreach($string as $value){
    echo $value;
    echo "<br/>";
}
