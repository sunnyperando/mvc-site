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
        <?php include 'nav.php';
              require "config.php"; ?>

<?php require 'Controller/reg-controller.php'; ?>
<!--?php 
require "Controller/myController.php?action='reg'";

?-->
        
</body>
</html>