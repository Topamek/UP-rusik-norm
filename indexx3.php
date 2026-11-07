<?php
// ЗАДАНИЕ 3
$host = 'localhost';
$user = 'root';
$password = '';
$name = 'Korneva'; 
$link = mysqli_connect($host,$user,$password,$name);

mysqli_query($link, "SET NAMES 'utf8'");
$query = "SELECT * FROM users";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);

//Задание 4
// $row1 = mysqli_fetch_assoc($res);
// var_dump($row1);

// $row2 = mysqli_fetch_assoc($res);
// var_dump($row2);


// $row3 = mysqli_fetch_assoc($res);
// var_dump($row3);

// $row4 = mysqli_fetch_assoc($res);
// var_dump($row4);

// ЗАДАНИЕ 5

$row5 = mysqli_fetch_assoc($res);
$data[] = $row5;
// var_dump($data);
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);


// ЗАДАНИЕ 6
// var_dump($data);


// ЗАДАНИЕ 7
// echo 'Имя: '.$data[0]["name"].'<br>'; // user1


// // ЗАДАНИЕ 8 
// echo 'Имя: '.$data[1]["name"].' | Возраст: '.$data[1]["age"].'<br>'; 


// // ЗАДАНИЕ 9 
// echo 'Имя: '.$data[2]["name"].' | Возраст: '.$data[2]["age"].' | Зарплата: '.$data[2]["salary"].'<br>'; 

// echo '<pre>'; // 


// ЗАДАНИЕ 10
// $query = "SELECT * FROM users WHERE id=3";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);`
// var_dump($data);


// // ЗАДАНИЕ 11
// $query = "SELECT * FROM users WHERE salary=900";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 12
// $query = "SELECT * FROM users WHERE age=23";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 13
// $query = "SELECT * FROM users WHERE salary>400";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 14
// $query = "SELECT * FROM users WHERE salary>=500";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 15
// $query = "SELECT * FROM users WHERE salary!=500";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 16
// $query = "SELECT * FROM users WHERE salary<=500";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 17
// $query = "SELECT * FROM users WHERE age>25 and age<=28";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 18
// $query = "SELECT * FROM users WHERE name='user1'";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 19
// $query = "SELECT * FROM users WHERE name='user1' and name='user2'";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 20
// $query = "SELECT * FROM users WHERE name!='user3'";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 21
// $query = "SELECT * FROM users WHERE age=27 OR salary=1000";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 22
// $query = "SELECT * FROM users WHERE age=27 OR salary!=400";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 23
// $query = "SELECT * FROM users WHERE age>=23 and age<27 OR salary=1000";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 24
// $query = "SELECT * FROM users WHERE age>=23 and age<=27 OR salary>=400 and salary<=1000";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 25
// $query = "SELECT name, age, salary FROM users";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// // ЗАДАНИЕ 26
// $query = "SELECT name FROM users";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);
// echo '</pre>';



// ЗАДАНИЕ 27
// $query = "INSERT INTO users (name,age,salary) VALUES ('user7', 26, 300)";
// mysqli_query($link, $query) or die(mysqli_error($link));


// ЗАДАНИЕ 28
//$query = "INSERT INTO users (name) VALUES ('xxxx')";
// mysqli_query($link, $query) or die(mysqli_error($link)); 


// ЗАДАНИЕ 29
// $query = "UPDATE users SET age=35 WHERE id=4";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res);

// // ЗАДАНИЕ 30
// $query = "UPDATE users SET salary=700 WHERE salary=500";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res);

// // ЗАДАНИЕ 31
// $query = "UPDATE users SET age=23 WHERE id>2 and id<=5";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res);

// ЗАДАНИЕ 32
// $query = "DELETE FROM users WHERE id=7";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res); // true

// ЗАДАНИЕ 33
// $query = "DELETE FROM users WHERE age=23";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res); // true

// ЗАДАНИЕ 34
// $query = "DELETE FROM users";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($res); // true


// ЗАДАНИЕ 35
// $query = "SELECT * FROM users ORDER BY salary";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 36
// $query = "SELECT * FROM users ORDER BY salary DESC";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 37
// $query = "SELECT * FROM users ORDER BY name";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 38
// $query = "SELECT * FROM users WHERE salary=500 ORDER BY age";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 39
// $query = "SELECT * FROM users ORDER BY name, salary";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 40
// $query = "SELECT * FROM users LIMIT 4";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);


// ЗАДАНИЕ 41
// $query = "SELECT * FROM users WHERE id>=2 LIMIT 3";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);

// ЗАДАНИЕ 42
// $query = "SELECT * FROM users ORDER BY salary LIMIT 3";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);


// ЗАДАНИЕ 43
// $query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
// var_dump($data);


// ЗАДАНИЕ 44
// $query = "SELECT COUNT(*) FROM users  WHERE salary=300";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// $data = mysqli_fetch_assoc($res);
// var_dump($data);


// ЗАДАНИЕ 45
// $query = "SELECT COUNT(*) FROM users WHERE salary=300 OR age=23";
// $res = mysqli_query($link, $query) or die(mysqli_error($link));
// $data = mysqli_fetch_assoc($res);
// var_dump($data);