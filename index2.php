<?php 
//2 practika


// Задание 1
// $str = 'abcde';
// $num = mb_strlen($str);
// echo $num;

// Здаание 1.2
// $str = 'привет';
// $num = mb_strlen($str);
// echo $num;

// Здаание 1.3
// $password = 'притb';
// $password_str = mb_strlen($password);
// if ($password_str > 5 and $password_str <10) {
//   echo 'пароль подходит';
// } else {
//   echo 'придумайте новый пароль';
// }


// Задание 2
// $str = 'php';
// echo strtoupper($str)

// Задание 2.2
// $str = 'PHP';
// echo strtolower($str)

// Задание 2.3
// $str = 'london';
// echo ucfirst($str)

// задание 2.4
// $str = 'london is the bla bla bla';
// echo ucwords($str)

// задание 2.5
// $str = 'LONDON';
// echo ucfirst(strtolower($str))

// 2/6
// $str = 'ПРИВЕТ';
// echo mb_strtolower($str)

// 2.8
// $str = 'привет';
// echo mb_strtoupper($str)

// Задание 3
// $str = 'document.pdf';
// $str_true = '.pdf';
// if (str_ends_with($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 3.2
// $str = 'https://example.com';
// $str_true = 'https://';
// if (str_starts_with($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 3.3
// $str = 'The bal bla fox';
// $str_true = 'fox';
// if (str_contains($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 3.4
// $str = 'document.png';
// if (str_ends_with($str,'.png') || (str_ends_with($str,'.jpg' ))) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }
// 3.5
// $str = 'document@png.com';
// if (str_contains($str,'@') || (str_contains($str,'.com' ))) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }


// ЗАДАНИЕ 4(5)
// 4.1
// $str = "abc abc abc";
// $position = strpos($str, 'b');
// echo $position;


//4.2
// $str = "abc abc abc";
// $position = strripos($str, 'b');
// echo $position;


//4.3
// $str = 'abc abc abc';
// echo strpos($str, 'b', 3); 


//4.4
// $str = 'aaa aaa aaa aaa aaa';
// $parts = explode(' ', $str, 3);

// $pos = strlen($parts[0]) + 1 + strlen($parts[1]);
// echo $pos;


//4.5
// $str = 'example..com';

// if (mb_strpos($str, '..', 0, 'UTF-8') !== false) {
//     echo 'есть две точки подряд';
// }
// else echo 'Отказано';


//4.6
// $str = 'http://example.com';

// if (str_starts_with($str, 'http://') || str_starts_with($str, 'https://')) {
//     echo 'строка начинается на хттп://';
// }


// ЗАДАНИЕ 5(6)
//5.1
// $str = 'aaa bbb ccc';
// $words = explode(' ', $str);
// print_r($words);

//5.2.
// $arr = ['a', 'b', 'c', 'd', 'e'];
// $result = implode(',', $arr);
// echo $result;

//5.3.
// $str = '1234567890';
// $arr = str_split($str, 2);
// print_r($arr);


//5.4.
// $str = '1234567890';
// $arr = str_split($str, 1);
// print_r($arr);


//5.5.
// $str = '1234567890';
// $result = chunk_split($str, 2, '-');
// echo $result;

//5.6.
// $date = '2024-05-10';
// $newDate = implode('.', array_reverse(explode('-', $date)));
// echo $newDate;

//5.7.
// $str = 'word@word@word@word';
// $result = mb_split('@', $str, -1);
// print_r($result);


//5.8. 
// $str = 'программирование';
// $chars = mb_str_split($str, 1);
// print_r($chars);

//5.9.
// $str = 'кириллица';
// $parts = mb_str_split($str, 2);
// print_r($parts);


// задание 7
// $str  =  '  srkoka  ';
// echo trim($str)

// 7.2
// $str  =  '/php/';
// echo trim($str, "/")

// 7.3
// $str  =  'text text text.';
// echo rtrim($str, ".") . "."


// ЗАДАНИЕ 8
//8.1
// $price = 19.99;
// echo "price: " . number_format($price, 2) . "$";

//8.2.
// $name = 'John';
// $age = 25;
// echo "Name: ".$name.", Age: ".$age," years";

//8.3.
// $name = "John";
// $score = 95;
// echo "student ".$name." scored ".$score." points";


//8.4.
// $product = "Laptop";
// $price = 1299.99;
// $discount = 15;

// echo "Product: ".$product." | Price: $".$price." | Discount: ".$discount."%";


//8.5.
// $x = 10;
// $y = 20;
// $z = 30;
// $sum = $x + $y + $z;
// echo "Sum: ".$x. "+" .$y. "+" .$z. '=' .$sum;

// ЗАдание 9
// $str = "12345678";
// echo number_format($str, 0, " ", " ");

// 9.2
// $str = "9876543.21";
// echo number_format($str, 2, '.', ' ');

// 9.3
// $str = "1234.5678";
// echo  '€'. number_format($str, 2, ',', '.');


// задание 10
//10.1
// $str = '12345';
// echo strrev($str);


//10.2

// $str = 'палиндромом';
// $reversed = strrev($str);

// if ($str === $reversed) {
//     echo "$str — палиндром";
// } else {
//     echo "$str — не палиндром (обратная строка: $reversed)";
// }

// ЗАДАНИЕ 11
// $str = "x";
// for ($i=1; $i<=9; $i++) 
// {
//   echo str_repeat($str, $i)."<br>";
// }


// 11.2
// for ($i=1; $i<=9; $i++) 
// {
//   echo str_repeat($i, $i)."<br>";
// }


//ЗАДАНИЕ 12
//12.1
// $str = "aaa <b>bbb</b> ccc";
// echo strip_tags($str);


//12.2
// $str = '
//   <p>aaa</p>
//   <b>bbb</b>
//   <s>ccc</s>
//   <i>ddd</i>
// ';
// echo strip_tags($str,'<b><i>');

//12.3.
// $str = 'aaa <b>bbb</b> <i>ccc</i>';
// echo htmlspecialchars($str);

 ?>