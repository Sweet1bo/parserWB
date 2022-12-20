<?php
include __DIR__ . "/app/db.php";
//Парсит страницу с товарами
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


$AllID = [];
$Vol = [];
$Part = [];
$Cost = [];
$DescriptionDirty = [];
$Description = [];
$CostValue = 0;
$DescriptionValue = 0;
$value = 0;
//Ищет ID, цену, описание и обрезает айди для нахождения изображения товара
for($i = 0; $i <= count($string); $i++){
    if(str_contains($string[$i], "root") === true){
        $AllID[$value] = substr($string[$i], 0, -7);
        $Vol[$value] = intval(substr($AllID[$value], 0, 3));
        $Part[$value] = substr($AllID[$value], 0, 5);
        $value++;
    }
    if(str_contains($string[$i], "averagePrice") === true){
        $Cost[$CostValue] = substr($string[$i], 0, -17);
        $CostValue++;
    }
    if(str_contains($string[$i], "brand") === true){
        $DescriptionDirty[$DescriptionValue] = substr($string[$i], 1, -9);
        $DescriptionValue++;
    }
}
for($i = 0; $i <= count($DescriptionDirty); $i++){
    if(str_contains($DescriptionDirty[$i], "Starkoff") === false){
        $Description[] = $DescriptionDirty[$i];
    }
}

$basket = [];
$imgUrl = [];
$i = 0;
//Находит basket товара, через перебор от 0 до 9, и записывает в txt файл все параметры
    for ($j = 0; $j <= count($AllID); $j++) {
        $checkUrl = "https://basket-0" . $i . ".wb.ru/vol" . $Vol[$j] . "/part" . $Part[$j] . "/" . $AllID[$j] . "/images/c516x688/1.jpg";
        $urlHeaders = @get_headers($checkUrl);
        if (!$urlHeaders || $urlHeaders[0] == 'HTTP/1.1 404 Not Found') {
            $i++;
            $j = $j - 1;
        } else {
            $basket[$j] = $i;
            $imgUrl[$j] = "https://basket-0" . $basket[$j] . ".wb.ru/vol" . $Vol[$j] . "/part" . $Part[$j] . "/" . $AllID[$j] . "/images/c516x688/1.jpg";
            $i = 0;
        }
        if(count($basket) === 100){
            break;
        }
    }

//Запись в БД
$product = [];
foreach($AllID as $key => $value){
    $product = [
        'product_ID' => $value,
        'basket' => $basket[$key],
        'cost' => $Cost[$key],
        'description' => $Description[$key],
        'img' => $imgUrl[$key]
    ];
    $productTest = insert('product', $product);
}



