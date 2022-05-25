<?php

$errors = [];
        
        
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    if (empty($_POST["username"])) {
      $errors['username'] = "Username is required";
      } elseif (ctype_alpha(str_replace(' ', '',$_POST["username"])) === false) {
      $errors['username'] = "Only letters and white space allowed";
      }else{
        $username = test_input($_POST["username"]);
      }
      
      $uppercase = preg_match('@[A-Z]@', $_POST["password"]);
      $lowercase = preg_match('@[a-z]@', $_POST["password"]);
      $number    = preg_match('@[0-9]@', $_POST["password"]);
      $specialChars = preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", $_POST["password"]);

      if (empty($_POST["password"])) {
        $errors['password'] = "Password is required";
      } elseif((strlen($_POST["password"]) >= 8) == false ){
        $errors['password'] = 'Password should be at least 8 characters';
      }elseif($uppercase == false){
        $errors['password'] = "Password should include at least one uppercase letter";
      }elseif($lowercase == false){
        $errors['password'] = "Password should include at least one lowercase letter";
      }elseif($number == false){
        $errors['password'] = 'Password should include at least one number';
      }elseif($specialChars == false){
        $errors['password'] = 'Password should include at least one special character';
      }else{
        $password = test_input($_POST["password"]);
      }
      
      if($login == false) {
        if (empty($_POST["email"])) {
          $errors['email'] = "Email is required";
        } elseif ((filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) === false) {
          $errors['email'] = "Invalid Email";
        }else {
          $email = test_input($_POST["email"]);
        }

        $datetime1 = date_create($_POST["bdate"]);
        $datetime2 = date_create(date("Y-m-d"));
        $interval = date_diff($datetime1, $datetime2);
        $years = $interval->format('%y');

        if (empty($_POST["bdate"])) {
          $errors['bdate'] = "Date of Birth required";
        } elseif(($years >= 18) == false){
          $errors['bdate'] = "Must be 18 years old";
        }else{
          $bdate = test_input($_POST["bdate"]);
        }
      }
}
          function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 

?>