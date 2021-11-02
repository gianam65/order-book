<?php
    session_start();
    if(isset($_SESSION['loginAdmin'])){
        unset($_SESSION['loginAdmin']);
        header("Location: ../index.php");
    }
?>