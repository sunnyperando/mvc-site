<?php 
    session_start();
    if (isset($_SESSION["username"]) AND isset($_SESSION["password"])) {
        session_unset();
        session_destroy();
        header("Location:index.php");
    }else{
        header("Location:index.php");
    }
?>