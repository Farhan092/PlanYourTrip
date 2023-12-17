<?php
    session_start();
    unlink($_SESSION['flag']);
    session_destroy();
    setcookie('flag', 'true', time()-10, '/');
    header('location: ../view/login.php');
?>
