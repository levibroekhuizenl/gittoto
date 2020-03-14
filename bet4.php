<?php
$servername = "localhost";
                    $username = "crashbeer_nl_sportbet";
                    $password = "4ZyY6iqsMLpY";
                    $dbname = "crashbeer_nl_sportbet";
$inlay = $_POST['inlay'];

    /*other variables*/
    $set = $_POST['set'];
                    session_start();
                    $getuser = $_SESSION["username"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$mysql = "SELECT * FROM users WHERE username='$getuser'";

 $result = $conn->query($mysql);



                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $budget = $row["budget"];
                            $newbudget = $budget - $inlay;
                            $match4 = $row["match4"];
                        }
                    } else {
                        
                    }

                    if($match4 == ""){
                    	echo "bet is geplaatst";
                        header("Location: http://crashbeer.nl/betset.php");
                    } else{
                    	echo "bet is al geplaatst";
                    	die;
                    }

                    if ($budget < $inlay){
                    	echo "error";
                    	die;
                    }

$sql = "UPDATE users SET match4 = '$set', inlay4 = '$inlay', budget = '$newbudget' WHERE username = '$getuser'";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$message = "Bedankt voor je bet";
echo "<script type='text/javascript'>alert('$message');</script>";

?>