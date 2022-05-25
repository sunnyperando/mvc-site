<?php
     $host   = 'localhost';
     $user   = 'root';
     $passwd = '';
     $db     = 'mysitedb';
     $mysqli = mysqli_connect($host, $user, $passwd, $db);

     if ($mysqli -> connect_errno) {
         echo "Failed to connect to MySql: " . $mysqli -> connect_error;
         exit();
     }
?>