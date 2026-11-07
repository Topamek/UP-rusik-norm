<?php
$host = 'localhost';
$user = 'root';
$password = '';
$name = 'korneva'; 
$link = mysqli_connect($host,$user,$password,$name);

$query = "SELECT * FROM test";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
?>

<!-- ZADANIE_1 -->
<?php foreach ($data as $elem): ?>
    <p>
        <b> <?= $elem['name'] ?> </b>
        <b> <?= $elem['age'] ?> </b>
        <b> <?= $elem['salary'] ?> </b>
    </p>
<?php endforeach; ?>

<!-- ZADANIE_2 -->
<?php foreach ($data as $elem): ?>
    <div>
        <h2> <?= $elem['name'] ?> </h2>
        <p>
            <?= $elem['age'] ?> 
            <b> <?= $elem['salary'] ?> </b>            
        </p>

    </div>
<?php endforeach; ?>


<!-- ZADANIE_3 -->
<?php foreach ($data as $elem): ?>
    <table>
        <tr>
            <td> <?= $elem['id'] ?> </td>
            <td> <?= $elem['name'] ?> </td>
            <td> <?= $elem['age'] ?> </td>
            <td> <?= $elem['salary'] ?> </td>
            <td><a href="?del={$id}">удалить</a></td>      
        </tr>

    </table>
<?php endforeach; ?>

<!-- <?php 
    $del = $_GET['del'];

    $query = 'DELETE FROM test WHERE id=$del';

    mysqli_query($link, $query) or die(mysqli_error($link));

?> -->


