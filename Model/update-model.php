<?php  

        require_once "../config.php";
        //$id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE ID = $id LIMIT 1";
                $result = mysqli_query($mysqli, $sql);
                mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);

                $username = $row['username'];
                $password = $row['password'];
                $email    = $row['email'];
                $bdate    = $row['bdate'];


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $bool = false;

  if (count($errors) === 0) {
  $bool = true;
  }
  
  if($row['username'] === $_POST["username"] 
  AND $row['password'] === $_POST['password'] 
  AND $row['email'] === $_POST['email']
  AND $row['bdate']    === $_POST['bdate'] ) {
    echo "<script>alert( 'Record Entries similar' ); </script>"; 
    $bool = false;
  }

  if($username  === ''
  AND $password === ''
  AND $email    === ''
  AND $bdate    === '' ) {
    $bool = false;
  }

  if($bool === true){

	$sqlu = "UPDATE users set username='" . $_POST["username"] . "', password='" . $_POST["password"] . "', email='" . $_POST["email"] . "',
            bdate='" . $_POST["bdate"] . "' 
            WHERE ID = '" . $id . "'";
	mysqli_query($mysqli, $sqlu);

    echo "<script>alert( 'Record Modified Successfully' );</script>"; 
    Print '<script>window.location.assign("../view.php");</script>';
}
}
// $select_query = "SELECT * FROM users WHERE ID='" . $_GET["ID"] . "'";
// $result = mysqli_query($conn, $select_query);
// $row = mysqli_fetch_array($result);
?>