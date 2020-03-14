<?php

session_start();

$getuser = $_SESSION['username'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sportbet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

                      $getuser = $_SESSION["username"];
                    $newsql = "SELECT match1 FROM match1 WHERE username='$getuser'";
                    $result = $link->query($newsql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        	$getValue = $row['match1'];
                        	echo $getValue;
                            // Attempt delete query execution
								$sql = "DELETE FROM users WHERE match1='$getValue'";
								if(mysqli_query($link, $sql)){
								    echo "Records were deleted successfully.";
								} else{
								    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
								}
								 
								// Close connection
								

                        }
                    } else {
                       
                    }
                }
mysqli_close($link);
?>