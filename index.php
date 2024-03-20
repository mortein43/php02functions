<?php
function num (array $numbers)
{
    $lastKey = key(array_slice($numbers, -1, 1, TRUE));
    foreach ($numbers as $key => $number) {
        if ($number >= 0) {
            echo "$number";
        } else {
            echo "<span style='color: red'>$number</span>";
        }
        if ($key !== $lastKey) {
            echo ", ";
        }
    }
}
$numbers = [];
for ($i = 0; $i<10; $i++) {
    $numbers[] = rand(-100, 100);
}
num($numbers);
echo "<br><br>";

$thousands = [
  "1" => "одна тисяча",
  "2" => "дві тисячи",
  "3" => "три тисячи",
  "4" => "чотири тисячи",
  "5" => "п’ять тисяч",
  "6" => "шість тисяч",
  "7" => "сім тисяч",
  "8" => "вісім тисяч",
  "9" => "дев’ять тисяч"
];
$hundreds = [
  "1" => "сто",
  "2" => "двісті",
  "3" => "триста",
  "4" => "чотириста",
  "5" => "п’ятсот",
  "6" => "шістсот",
  "7" => "сімсот",
  "8" => "вісімсот",
  "9" => "дев’ятсот",
];
$tens = [
  "1" => array(
      "10" => "десять",
      "11" => "одиннадцять",
      "12" => "дванадцять",
      "13" => "тринадцять",
      "14" => "чотирнадцять",
      "15" => "п’ятнадцять",
      "16" => "шістнадцять",
      "17" => "сімнадцять",
      "18" => "вісімнадцять",
      "19" => "дев’ятнадцять"
        ),
    "2" => "двадцять",
    "3" => "тридцять",
    "4" => "сорок",
    "5" => "п’ятдесят",
    "6" => "шістедесят",
    "7" => "сімдесят",
    "8" => "вісімдесят",
    "9" => "дев’яносто",
];
$lastnumber = [
  "1" => "один",
  "2" => "два",
  "3" => "три",
  "4" => "чотири",
  "5" => "п’ять",
  "6" => "шість",
  "7" => "сім",
  "8" => "вісім",
  "9" => "дев’ять",
];


function returnNumberString ($numberInt, $thousands, $hundreds, $tens, $lastnumber)
{
    $numberString = (String)$numberInt;
    $numberStringLength = strlen($numberString);
    echo "$numberString - ";
    for ($i = 0; $i<$numberStringLength; $i++) {
        if($numberStringLength-$i == 4) {
            echo $thousands[intval($numberString[$i])] . " ";
        }
        if($numberStringLength-$i == 3 && $numberString[$i] != 0) {
            echo $hundreds[intval($numberString[$i])] . " ";
        }
        if($numberStringLength-$i == 2 && $numberString[$i] != 0) {
            if($numberString[$i] == "1") {
                $num = intval($numberString[$i] . $numberString[$i + 1]);
                echo $tens["1"][$num] . " ";
                break;
            } else {
                echo $tens[intval($numberString[$i])] . " ";
            }
        }
        if($numberStringLength-$i == 1 && $numberString[$i] != 0) {
            echo $lastnumber[intval($numberString[$i])] . " ";
        }
    }
}
returnNumberString(rand(1, 9999), $thousands, $hundreds, $tens, $lastnumber);

function divs($count)
{
    if ($count == 0) {
        return 0;
    }
    $x = rand(300, 500);
    $y = rand(50, 175);
    echo "<div style = 'background-color: blue; position: absolute; left: $x; top: $y; width: 15px; height: 15px;'></div>";
    divs($count - 1);
}
divs(10);
echo "<br><br><br><br><br><br><br><br><br>";
function products($name, $image, $price)
{
    echo "
    <div style='display: inline-block;'>
        <div style = 'display: flex; flex-direction: column; justify-content: center; align-items: self-start; 
                      border: 2px solid green; width: 200px; padding: 15px 0 15px 0;'>
            <image src = '$image' style='width: 150px; height: 195px; max-width: 100%; max-height: 100%; align-self: center;'/>
            <p style='font-weight: bold; font-size: 16px;'>$name</p>
            <p style=' font-size: 14px'>$price</p>
            <button style='margin: 0 0 0 15px; width: 125px; background-color: green; color: white; 
            border-top: 3px solid lightgray;
            border-left: 3px solid lightgray;
            border-right: 3px solid darkgray;
            border-bottom: 3px solid darkgray;
            '>Add to Cart</button>
        </div>
    </div>
    ";
}
products('iPhone 7 64GB Rose Gold', 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg', '600$');
products('Samsung Galaxy A8 64GB', 'https://content1.rozetka.com.ua/goods/images/big/319587874.jpg', '450$');
products('Xiaomi Redmi 6A 64GB', 'https://content.rozetka.com.ua/goods/images/big/63146630.jpg', '200$');


$products = array(
    array(
        'name' => 'Samsung Galaxy A8 64GB',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/319587874.jpg',
        'price' => 450
    ),
    array(
        'name' => 'Samsung Galaxy A8 64GB',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/319587874.jpg',
        'price' => 450
    ),
    array(
        'name' => 'iPhone 7 64GB Rose Gold',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg',
        'price' => 600
    ),
    array(
        'name' => 'iPhone 7 64GB Rose Gold',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg',
        'price' => 600
    ),array(
        'name' => 'iPhone 7 64GB Rose Gold',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg',
        'price' => 600
    ),array(
        'name' => 'iPhone 7 64GB Rose Gold',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg',
        'price' => 600
    ),array(
        'name' => 'iPhone 7 64GB Rose Gold',
        'image' => 'https://content1.rozetka.com.ua/goods/images/big/50029205.jpg',
        'price' => 600
    )
);



function calculateCart($products) {
    $cart = array();

    foreach($products as $product) {
        $found = false;
        foreach($cart as &$item) {
            if($item['name'] === $product['name']) {
                $item['count'] += 1;
                $item['total_price'] += $product['price'];
                $found = true;
                break;
            }
        }

        if(!$found) {
            $newItem = array(
                'name' => $product['name'],
                'image' => $product['image'],
                'count' => 1,
                'total_price' => $product['price']
            );
            $cart[] = $newItem;
        }
    }

    return $cart;
}

function printCart(array $cart)
{
    foreach ($cart as $item) {
        echo "
    <div style='display: inline-block;'>
        <div style='display: flex; flex-direction: column; justify-content: center; align-items: self-start; 
                    border: 2px solid green; width: 200px; padding: 15px 0 15px 0;'>
            <image src='$item[image]' style='width: 150px; height: 195px; max-width: 100%; max-height: 100%; align-self: center;'/>
            <p style='font-weight: bold; font-size: 16px; '>$item[name]</p>
            <div style='display: flex; flex-direction: row;'>
                <p style='font-size: 14px;'>Count: $item[count]</p>
                <p style='font-size: 14px; margin-left: 10px;'>Total price: $item[total_price]$</p>
            </div>
        </div>
    </div>
    ";
    }

}

echo "<br><br>";
$cart = calculateCart($products);
printCart($cart);

?>