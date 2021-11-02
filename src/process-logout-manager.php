<?php
    session_start();
    if(isset($_SESSION['loginManager'])){
        unset($_SESSION['loginManager']);
        header("Location: ../index.php");
    }
?>