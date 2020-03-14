<?php

$servername = "localhost";
                    $username = "crashbeer_nl_sportbet";
                    $password = "4ZyY6iqsMLpY";
                    $dbname = "crashbeer_nl_sportbet";
$homeValue = $_POST['homevalue'];
$gameOneTrue = $_POST['gameontrue'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


for($i=0;$i <100; $i++){

 $sql = "SELECT * FROM users WHERE id='$i'";

                    $result = $conn->query($sql);

                    if ($result->num_rows >= 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        	$budget = $row['budget'];
                          $newbudget = $budget + 3;
                        	


                  $sql = "UPDATE users SET budget='$newbudget' WHERE id=$i";

					if ($conn->query($sql) == TRUE) {
					    echo "";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}

					echo $i;

						



				echo "<br>";                  
                        }
                    } else {
                       
                    }
}

$conn->close();	

?>