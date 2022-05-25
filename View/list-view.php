
        <div class="container">
        <h1><?php $title; ?></h1>
        <?php    

                    if($result = mysqli_query($mysqli, $sql)){
                        if($result1 > 0){
                            echo '<table class="table table-bordered table-hover">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Password</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Date of Birth</th>";
                                        if (isset($_SESSION["username"]) AND isset($_SESSION["password"]))   { 
                                        echo "<th>Update/Delete</th>"; 
                                        }
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){ 
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['bdate'] . "</td>";
                                    if (isset($_SESSION["username"]) AND isset($_SESSION["password"]))   { 
                                        echo "<td>";
                                        echo '<a href="Controller/update-controller.php?id='. $row['ID'] .'" class="btn btn-outline-primary" title="Update Record" data-toggle="tooltip">Update</a>';
                                        echo '<a href="Model/del-model.php?id='. $row['ID'] .'" title="Delete Record" class = "btn btn-outline-danger" data-toggle="tooltip"
                                        onclick="return confirm(\'Are you sure?\');">Delete</i></a>';
                                    echo "</td>";
                                     } 
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $freeresult;
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($mysqli);
                    ?>
    </div>