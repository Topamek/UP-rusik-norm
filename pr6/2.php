<?php
session_start();
if (!empty($_SESSION['auth'])): 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 стр</title>
</head>
<body>
    <p>лгн: <?php echo $_SESSION['UserLogin']; ?></p>
</body>
</html>
<?php else: ?>
    <!-- Задание 5 -->
    <p>пжпжжп автр - <a href="login.php">клика</a></p>
<?php endif; ?>