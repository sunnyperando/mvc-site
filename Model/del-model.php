<?php
require_once "../config.php";
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE ID='" . $id . "'";
mysqli_query($mysqli,$sql);
echo "<script>alert('Record Deleted.');
      </script>"; 
      header("Location:".$_SERVER[HTTP_REFERER]);
?>