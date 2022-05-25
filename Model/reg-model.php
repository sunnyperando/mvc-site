<?php
        $title = 'Add User';
        $username = $password = $email = $bdate = "";
        
    
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
    $bool = false;
    if (count($errors) === 0) {
    $bool = true;
    }

    include 'config.php';
    $query  = $mysqli -> query("SELECT * FROM users"); 
    while($row = mysqli_fetch_array($query))
    {
        $table_users   = $row['username'];

        if ($username == $table_users) {
            $bool = false.
            Print '<script>alert("Username taken")</script>';
            //$usernameErr = 'Username taken';
            //Print '<script>window.location.assign("register .php")</script>';
        }
    }

    if($username  === ''
    AND $password === ''
    AND $email    === ''
    AND $bdate    === '' ) {
      $bool = false;
    }

    if ($bool === true) {
        $mysqli -> query("INSERT INTO users (username, password, email, bdate) 
                            VALUES ('$username','$password', '$email', '$bdate')");
        Print '<script      >alert("Sucessfully added!");</script>';
        Print '<script>window.location.assign("view.php");</script>';
    }
  }

?>