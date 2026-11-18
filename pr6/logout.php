<?php
// 9 задагте
    session_start();
    $_SESSION['auth'] = null;
    // 10 задагте
    header("Location: index.php");
    $_SESSION['logout_message'] = 'Вы вышли из акка';
    die();
?>