<?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users"; 
                    $result = mysqli_query($mysqli, $sql);
                    $result1 = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);
                    $freeresult = mysqli_free_result($result);
?>