<?php
session_start();
if (!empty($_SESSION['auth'])): 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 стр</title>
</head>
<body>
    <p>ник: <?php echo $_SESSION['UserLogin']; ?></p>
</body>
</html>
<?php else: ?>
    <!-- Задание 5 -->
    <p>пжпжпж войди - <a href="login.php">Нажать</a></p>
<?php endif; ?>