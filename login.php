<!-- ?php session_start(); ? -->
<html>
    <head>
        <title> MySite </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body> <!--  Route -->

<?php   

if (!isset($_SESSION["username"]) AND !isset($_SESSION["password"]))  {

    include 'nav.php';
    require "config.php";

require 'Controller/login-controller.php'; 
}else{
    header("Location:index.php");
}
?>

        
</body>
</html>