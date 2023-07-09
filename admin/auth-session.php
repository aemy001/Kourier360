<?php
    if(!isset($_SESSION['username'])){
        header('location: user-login.php');
        exit();
    }
?>