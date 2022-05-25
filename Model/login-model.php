<?php   
  //session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
    $bool = false;
    if (count($errors) === 0) {
    $bool = true;
    }

    if($username  === ''
    AND $password === '' ) {
      $bool = false;
      $username = $password = "";
    }

    if($bool == true){
        include 'config.php';
        $query  = $mysqli -> query("SELECT * FROM users"); 
        while($row = mysqli_fetch_array($query))
        {
            $table_users   = $row['username'];
            $table_pass    = $row['password'];

            if ($username == $table_users AND $password == $table_pass) {
              session_start();
              $_SESSION["username"] = $table_users;
              $_SESSION["password"] = $table_pass;
                //print_r($_SESSION);
                //$usernameErr = 'Username taken';
                Print '<script>window.location.assign("user-details.php")</script>';
            }else{
                echo "<script>alert( 'Username and password incorrect' );</script>";
                Print '<script>window.location.assign("login.php")</script>';
            }
        }
    }

  }

?>