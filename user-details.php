<?php 
    session_start();
    if (isset($_SESSION["username"]) AND isset($_SESSION["password"])) {
    
    
    include 'nav.php';
    require "config.php"; 

              echo 'user details' ;

              //session_destroy();

              print_r($_SESSION);
    }else{
        header("Location:index.php");
    }
?>